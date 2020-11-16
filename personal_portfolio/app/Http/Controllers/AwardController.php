<?php

namespace App\Http\Controllers;

use App\Award;
use Illuminate\Http\Request;
use Auth;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards=Award::all()->where('user_id',auth()->user()->id);
        return view('awardList',compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $award=Award::create([
            'award'=>$request->award,
            'given_by'=>$request->given_by,
            'description'=>$request->description,
            'date'=>$request->date,
            'user_id'=>auth()->user()->id
        ]);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $entry=Award::findOrFail($id);

        return view('awardEdit',compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $entry=Award::findOrFail($request->id);
        $entry->update([
            'given_by'=>$request->given_by,
            'description'=>$request->description,
            'date'=>$request->date,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('award.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        //
    }
    public function delete($id){
        $entry=Award::findOrFail($id);
        $entry->delete();
        return redirect()->back();
    }
}
