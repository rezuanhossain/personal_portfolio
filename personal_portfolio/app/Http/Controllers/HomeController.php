<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\EducationField;
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

        $social_links=$user->social_links;

        if(!is_null($social_links)){

            array_push($social_links,$request->social_links);
        }

        $user->update([
            'skills'=>$request->skills,
            'social_links'=>$request->social_links,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_no'=> $request->phone_no,
            'address'=>$request->address,
            'about'=>$request->about
        ]);
        return redirect()->back();
    }
    public function show(){

        $usr=User::where('email','antuahmed@gmail.com')->get();

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
        $about=$user->about;
        $id=$user->id;

        $education=EducationField::where('user_id',$id)->get();


        return view('homepage',compact('skills','social_links','email','name','address','phone_no','id','about','education'));
    }
}
