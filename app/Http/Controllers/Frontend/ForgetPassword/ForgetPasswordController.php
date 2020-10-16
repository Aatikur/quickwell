<?php

namespace App\Http\Controllers\Frontend\ForgetPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    public function index(){
        return view('web.password.forgot-pasword');
    }

    public function send(Request $request){
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $credentials = ['email' => $request->input('email')];
        $response = Password::sendResetLink($credentials, function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('message', trans($response));
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }

    public function postReset(Request $request){
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required',
            'password' => 'required|string|min:6|same:confirm_password'
        ]);

        $status = Password::reset(
            $request->only('email','password', 'confirm_password', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
    
                $user->setRememberToken(Str::random(60));
    
                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => __($status)]);
    }
}
