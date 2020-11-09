<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=User::where('email','stahzid550@gmail.com');

        return view('home',compact('user'));
    }
    public function update_profile(Request $request){
        $id=$request->id;

        $user=User::findOrFail($id);
        $skills=$user->skills;
        $social_links=$user->social_links;
        if($skills || $social_links){
            array_push($skills,$request->skills);
            array_push($social_links,$request->social_links);
        }

        $user->update([
            'skills'=>$request->skills,
            'social_links'=>$request->social_links,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=> $request->phone_no,
            'address'=>$request->address,
        ]);
        return redirect()->back();
    }
    public function show(){
        $usr=User::where('email','stahzid550@gmail.com')->get();
        $user=$usr[0];
        $skills=$user->skills;
        $social_links=$user->social_links;
        if($skills){
            foreach($skills as $skill){
                $skills = preg_replace('/[^0-9]/', '', $skills);
            }
        }
        $email=$user->email;
        $name=$user->name;
        $address=$user->address;
        $phone_no=$user->phone_no;
        $id=$user->id;


        return view('homepage',compact('skills','social_links','email','name','address','phone_no','id'));
    }
}
