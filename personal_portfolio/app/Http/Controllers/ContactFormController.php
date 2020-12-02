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
    public function index(){
        $mails=ContactForm::all()->where('for_user',auth()->user()->id)->where('seen',0);

        return view('mailList',compact('mails'));
    }
    public function mark(Request $request){


            $entry=ContactForm::findOrFail($request->id);
            $entry->update([
                'seen'=>1,
            ]);


        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}
