<?php

namespace App\Http\Controllers\Frontend\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrier;
use App\Models\Job;
class CareerController extends Controller
{
    public function index() {
        $careers = Carrier::latest()->paginate(5);
        return view('web.career.career', compact('careers'));
    }

    public function job(Request $request){
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'designation' => 'required',
            'resume.*' => 'required|mimes:doc,docx,zip,pdf|max:10000'
        ]); 
        $job = new Job;
        if($request->hasFile('resume')){
            $file = $request->file('resume');
            $filename = time() . '.' . $request->file('resume')->extension();
            $filePath = public_path() . '/web/resumes/';
            $file->move($filePath, $filename);
        }
        $job->full_name = $request->input('full_name');
        $job->email = $request->input('email');
        $job->mobile = $request->input('mobile');
        $job->designation = $request->input('designation');
        $job->resume = $filename;
        
        if($job->save()){
            return redirect()->back()->with('message', 'Applied Successfully!');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
