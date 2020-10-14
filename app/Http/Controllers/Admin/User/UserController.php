<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }

    public function show(){
        $query = User::latest();
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $action = '<a  href="'.route('admin.delete_user', ['id' => encrypt($row->id)]).'" class="btn btn-danger">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function destroyUser($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $user = User::find($id);
        if($user->delete()){
            return redirect()->back()->with('message', 'User Deleted Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
