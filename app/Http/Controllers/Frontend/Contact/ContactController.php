<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('web.contact.contact');
    }

    public function contact(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'email'     => 'required|email',
            'contact_no'=> 'required|numeric',
            'message'  => 'required'
        ]);
        
        $contact = new Contact();
        $contact->full_name = $request->input('full_name');
        $contact->email = $request->input('email');
        $contact->contact_no = $request->input('contact_no');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        if($contact->save()){
            return redirect()->back()->with('message', 'Thank you! We will contact you soon.');
        }else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
