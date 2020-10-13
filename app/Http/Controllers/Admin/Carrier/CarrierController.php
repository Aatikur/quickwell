<?php

namespace App\Http\Controllers\Admin\Carrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrier;
use DB;
use Carbon\Carbon;

class CarrierController extends Controller
{
    public function index(){
        return view('admin.carrier.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'designation'  => 'required',
            'role'   => 'required'
        ]);

        $carrier = new Carrier;
        $carrier->designation = $request->input('designation');
        $carrier->role = $request->input('role');

        if($carrier->save()){
            return redirect()->back()->with('message', 'Job Openings Added Successfully');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function list(){
        return view('admin.carrier.list');
    }

    public function show(){
        $query = Carrier::orderBy('created_at', 'DESC');
        return datatables()->of($query->get())
        ->addIndexColumn()
        ->addColumn('action', function($row){
               $btn = '
               <a href="'.route('admin.carrier_view', [encrypt($row->id)]).'" class="btn btn-info btn-sm" target="_blank">View</a>
               <a href="'.route('admin.carrier_edit', [encrypt($row->id)]).'" class="btn btn-warning btn-sm">Edit</a>              
               <a href="'.route('admin.carrier_delete', [encrypt($row->id)]).'" class="btn btn-danger btn-sm">Delete</a>              
               ';
               if ($row->status == '1') {
                   $btn .= '<a href="'.route('admin.carrier_status', ['id' => encrypt($row->id), 'status' => 2]).'" class="btn btn-danger btn-sm">Unpublish</a>';
                    return $btn;
                }else{
                   $btn .= '<a href="'.route('admin.carrier_status', ['id' => encrypt($row->id), 'status' => 1]).'" class="btn btn-success btn-sm">Publish</a>';
                    return $btn;
                }
                return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function singleView($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $carrier = Carrier::find($id);
        return view('admin.carrier.show', compact('carrier'));
    }

    public function edit($id){
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $carrier = Carrier::find($id);
        return view('admin.carrier.edit', compact('carrier'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'designation' => 'required',
            'educational_qualification' => 'required',
            'work_experience'   => 'required',
            'role'   => 'required'
        ]);
        
        $id = $request->input('id');
        $carrier = Carrier::find($id);
        $carrier->designation = $request->input('designation');
        $carrier->educational_qualification = $request->input('educational_qualification');
        $carrier->work_experience = $request->input('work_experience');
        $carrier->role = $request->input('role');

        if($carrier->save()){
            return redirect()->back()->with('message', 'Job Openings Updated Successfully!');
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

        $carrier = Carrier::find($id);
        if($carrier->delete()){
            return redirect()->back()->with('message', 'Job Deleted Successfully');
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

        $carrier = DB::table('carriers')
        ->where('id', $id)
        ->update([
            'status' => $status,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
        ]);

        if($carrier){
            return redirect()->back()->with('message','Job Updated Successfully');
        }else{
             return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        } 

    }
}
