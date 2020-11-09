<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactForm;
use Toastr;

class ContactFormController extends Controller
{
    public function contact_me(Request $request){
        ContactForm::create([
            'for_user'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return redirect()->back()->with('message','Thanks for contacting!');
    }
}
