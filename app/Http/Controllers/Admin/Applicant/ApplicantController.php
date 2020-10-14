<?php

namespace App\Http\Controllers\Admin\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use File;
class ApplicantController extends Controller
{
    public function index(){
        return view('admin.application.index');
    }

    public function show(){
        $query = Job::latest();
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $action = '<a  href="'.route('admin.delete_applicant', ['id' => encrypt($row->id)]).'" class="btn btn-danger">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function showApplicant(){
        $query = Job::where('status', 1)->latest();
            return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('resume', function($row){
                $action = '<a  href="'.asset('web/resumes/'.$row->resume).'" class="btn btn-warning">Resume</a>';
                return $action;
            })
            ->addColumn('action', function($row){
                $action = '<a  href="'.route('admin.delete_applicant', ['id' => encrypt($row->id)]).'" class="btn btn-danger">Delete</a>';
                return $action;
            })
            ->rawColumns(['action', 'resume'])
            ->make(true);
    }

    public function destroyApplicant($id){
        try{
            $id = decrypt($id);
        }catch(DecryptException $e) {
            abort(404);
        }
        $applicant = Job::find($id);
        if($applicant->delete()){
            if(File::exists(public_path().'web/resumes'.$applicant->resume)){
                File::delete(public_path().'web/resumes'.$applicant->resume);
            }
            return redirect()->back()->with('message', 'Applicant Deleted Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
