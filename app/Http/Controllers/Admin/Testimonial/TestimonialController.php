<?php

namespace App\Http\Controllers\Admin\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;
use DB;
use File;
use Carbon\Carbon;
class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required'
        ]);
            
        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $destination = base_path().'/public/admin/post/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/post/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);
        }

        $testimonial = new Testimonial;
        $testimonial->image = $image_name;
        $testimonial->desc = $request->input('desc');

        if($testimonial->save()){
            return redirect()->back()->with('message', 'Testimonial Added Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function list(){
        return view('admin.testimonial.list');
    }

    public function show(){
        $query = Testimonial::orderBy('created_at', 'DESC');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('image', function($row){
            $image = '<img src="'.asset('admin/post/thumb/'.$row->image).'" height="200" />';
            return $image;
        })
        ->addColumn('desc', function($row){
            $desc = htmlspecialchars_decode($row->desc);
            return $desc;
        })
        ->addColumn('action', function($row){
            $btn = '
            <a href="'.route('admin.testimonial_edit', [encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>              
            <a href="'.route('admin.testimonial_delete', [encrypt($row->id)]).'" class="btn btn-danger btn-sm">Delete</a>              
            ';
            if ($row->status == '1') {
                $btn .= '<a href="'.route('admin.testimonial_status', ['id' => encrypt($row->id), 'status' => 2]).'" class="btn btn-primary btn-sm">Unpublish</a>';
                return $btn;
            }else{
                $btn .= '<a href="'.route('admin.testimonial_status', ['id' => encrypt($row->id), 'status' => 1]).'" class="btn btn-success btn-sm">Publish</a>';
                return $btn;
            }
            return $btn;
        })
        ->rawColumns(['image', 'desc', 'action'])
        ->make(true);
    }

    public function edit($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'desc' => 'required'
        ]);
        $id = $request->input('id');
        if($request->hasfile('image'))
        {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $destination = base_path().'/public/admin/post/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time()).".".$image_extension;
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);
            $thumb_path = base_path().'/public/admin/post/thumb/'.$image_name;
            Image::make($image)
            ->resize(300, 400)
            ->save($thumb_path);

            // Check wheather image is in DB
            $checkImage = Testimonial::find($id);
            if($checkImage->image){
                //Delete
                $image_path = "admin/post/thumb/".$checkImage->image;  
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

                //Update
                $image_update = DB::table('testimonials')
                ->where('id', $id)
                ->update([
                    'image' => $image_name,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                ]);   

                if($image_update){
                    return redirect()->back()->with('message','Testimonial Updated Successfully!');
                }else{
                    return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                } 
            }else{
                //Update
                $image_update = DB::table('testimonials')
                ->where('id', $id)
                ->update([
                    'image' => $image_name,
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
                ]);   
                
                if($image_update){
                    return redirect()->back()->with('message','Testimonial Updated Successfully!');
                }else{
                    return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                } 
            }
        }

        $testimonial = Testimonial::find($id);
        $testimonial->desc = $request->input('desc');
        if($testimonial->save()){
            return redirect()->back()->with('message', 'Testimonial Updated Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $testimonial = Testimonial::find($id);

        if($testimonial->delete()){
            if(File::exists(public_path().'admin/post/'.$testimonial->image)){
                File::delete(public_path().'admin/post/'.$testimonial->image);
            }
            
            if(File::exists(public_path().'admin/post/thumb/'.$testimonial->image)){
                File::delete(public_path().'admin/post/thumb/'.$testimonial->image);
            }
            
            return redirect()->back()->with('message', 'Testimonial Deleted Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function status($id, $status){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $testimonial_update = DB::table('testimonials')
            ->where('id', $id)
            ->update([
                'status' => $status,
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
            ]);

            if($testimonial_update){
                return redirect()->back()->with('message','Testimonial Updated Successfully');
            }else{
                 return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            } 
    
    }
}
