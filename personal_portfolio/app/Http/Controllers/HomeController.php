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
        return view('home');
    }
    public function update_profile(Request $request){
        $id=$request->id;

        $user=User::findOrFail($id);
        $skills=$user->skills;
        array_push($skills,$request->skills);
        $user->update([
            'skills'=>$request->skills,
        ]);
        return redirect()->back();
    }
    public function show(){
        $skills=Auth::user()->skills;
        foreach($skills as $skill){
            $skills = preg_replace('/[^0-9]/', '', $skills);
        }
        return view('homepage',compact('skills'));
    }
}
