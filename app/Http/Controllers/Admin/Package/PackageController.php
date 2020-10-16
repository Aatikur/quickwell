<?php

namespace App\Http\Controllers\Admin\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use DB;
use DataTables;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    public function index(){
        return view('admin.package.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required|numeric',
            'feature' => 'required',
            'description' => 'required'
        ]); 
            
        $package = new Package;
        $package->name          = $request->input('package');
        $package->amount        = $request->input('amount');
        $package->slug          = Str::slug($request->input('package'));
        $package->feature       = $request->input('feature');
        $package->description   = $request->input('description');
        if($package->save()){
            return redirect()->back()->with('message', 'Package Added Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function show(){
        return view('admin.package.show');
    }

    public function showPackage(){
        $query = Package::orderBy('created_at', 'DESC');
        return datatables()->of($query->get())
        ->addIndexColumn()
       ->addColumn('action', function($row){
           $btn = '<a href="'.route('admin.view', ['id' => encrypt($row->id)]).'" class="btn btn-primary">View</a>
           <a href="'.route('admin.edit', ['id' => encrypt($row->id)]).'" class="btn btn-info">Edit</a>';
            if($row->status == 1){
                $btn .= '<a href="'.route('admin.status', ['id' => encrypt($row->id), 'status' => 2]).'" class="btn btn-warning">UnPublish</a>';
            }else{
                $btn .= '<a href="'.route('admin.status', ['id' => encrypt($row->id), 'status' => 1]).'" class="btn btn-success">Publish</a>';
            }
            return $btn;
        })
        ->editColumn('amount', function($row){
            return number_format($row->amount, 2);
        })
        ->rawColumns(['action', 'amount'])
        ->make(true);
    }

    public function view($id){
        try {
            $id = decrypt($id);
        }
        catch(DecryptException $e) {
            return redirect()->back();
        }

        $package = Package::find($id);
        return view('admin.package.single', compact('package'));
    }

    public function edit($id){
        try {
            $id = decrypt($id);
        }
        catch(DecryptException $e) {
            return redirect()->back();
        }

        $package = Package::find($id);
        return view('admin.package.edit', compact('package'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required|numeric',
            'feature' => 'required',
            'description' => 'required'
        ]); 
        $id                     = $request->input('id');
        $package                = Package::find($id);
        $package->name          = $request->input('name');
        $package->amount        = $request->input('amount');
        $package->slug          = Str::slug($request->input('name'));
        $package->feature       = $request->input('feature');
        $package->desc   = $request->input('description');
        if($package->save()){
            return redirect()->back()->with('message', 'Package Updated Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function statusPackage($id, $status){
        try {
            $id = decrypt($id);
        }
        catch(DecryptException $e) {
            return redirect()->back();
        }

        $package = DB::table('packages')
        ->where('id', $id)
        ->update([
            'status' => $status,
            'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString()
        ]);

        if($package){
            return redirect()->back()->with('message','Package Updated Successfully!');
        }else{
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }

    }
}
