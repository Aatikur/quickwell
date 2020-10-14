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
                return redirect()->back()->with('status', trans($response));
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }
}
