<?php

namespace App\Http\Controllers\Admin\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use DB;
use DataTables;
use Carbon\Carbon;

class PackageController extends Controller
{
    public function index(){
        return view('admin.package.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'amount' => 'required|numeric'
        ]); 
            
        $package = new Package;
        $package->name = $request->input('package');
        $package->amount = $request->input('amount');

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
            if($row->status == 1){
                $btn = '<a href="'.route('admin.status', ['id' => encrypt($row->id), 'status' => 2]).'" class="btn btn-warning">UnPublish</a>';
            }else{
                $btn = '<a href="'.route('admin.status', ['id' => encrypt($row->id), 'status' => 1]).'" class="btn btn-success">Publish</a>';
            }
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
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
