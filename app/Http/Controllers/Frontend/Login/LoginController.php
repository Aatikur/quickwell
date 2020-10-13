<?php

namespace App\Http\Controllers\Frontend\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Session;
class LoginController extends Controller
{
    public function login(){
        return view('web.login');
    }

    public function userLogin(Request $request){
        $this->validate($request, [
            'mobile' => 'required|numeric',
            'password' => 'required'
        ]);
        if (Auth::guard('web')->attempt(['mobile' => $request->mobile, 'password' => $request->password])){
            if(Session::has('oldUrl')){
                dd(1);
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('mobile', 'remember'))->with('error','Mobile or password is incorrect!');
    }

    public function logout(Request $request, Guard $guard)
    {
        $guard->logout();
        $request->session()->invalidate();
        return redirect()->route('web.login');
    }
}
