<?php

namespace App\Http\Controllers\Frontend\GetInTouch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\GetInTouch;
class GetInTouchController extends Controller
{
    public function send(Request $request){
        $rules = array(
            'full_name'         => 'required',
            'email'             => 'required|email:rfc,dns',
            'mobile'            => 'required|numeric',
            'city'              => 'required',
            'message'           => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $email = $request->input('email');
        $isExists = GetInTouch::where('email',$email)->first();
        if($isExists){
            return response()->json(array("error" => "Email already exists!"));
        }

        $mobile = $request->input('mobile');
        $isExists = GetInTouch::where('mobile',$mobile)->first();
        if($isExists){
            return response()->json(array("error" => "Mobile already exists!"));
        }

        $getInTouch = new GetInTouch;
        $getInTouch->full_name  = $request->input('full_name');
        $getInTouch->email      = $request->input('email');
        $getInTouch->mobile     = $request->input('mobile');
        $getInTouch->city       = $request->input('city');
        $getInTouch->message    = $request->input('message');

        if($getInTouch->save()){
            return response()->json(['success' => 'Data Added successfully.']);
        }
    }
}
