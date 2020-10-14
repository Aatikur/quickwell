<?php

namespace App\Http\Controllers\Admin\GetInTouch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GetInTouch;
class GetInTouchController extends Controller
{
    public function index(){
        return view('admin.getintouch.index');
    }

    public function show(){
        $query = GetInTouch::latest();
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $action = '<a  href="'.route('admin.delete_getintouch', ['id' => encrypt($row->id)]).'" class="btn btn-danger">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function destroyGetInTouch($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $getintouch = GetInTouch::find($id);
        if($getintouch->delete()){
            return redirect()->back()->with('message', 'Get In Touch Deleted Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
