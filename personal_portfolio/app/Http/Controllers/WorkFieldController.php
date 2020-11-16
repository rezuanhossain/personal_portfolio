<?php

namespace App\Http\Controllers;

use App\WorkField;
use Illuminate\Http\Request;
use Auth;

class WorkFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;
        $work_field=WorkField::all()->where('user_id',$id);
      return view('workList',compact('work_field'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id=Auth::user()->id;
        if(!is_null($request->to)){
            $to=$request->to;
        }else{
            $to=$request->end;
        }
        $work_field=WorkField::create([
            'user_id'=>$id,
            'title'=>$request->title,
            'company'=>$request->company,
            'description'=>$request->description,
            'from'=>$request->from,
            'to'=>$to

        ]);
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function show(WorkField $workField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry=WorkField::findOrFail($id);
        return view('workFieldEdit',compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $to="";
        if(!is_null($request->to)){
            $to=$request->to;
        }else{
            $to=$request->end;
        }

        $entry=WorkField::findOrFail($request->id);

        $entry->update([
            'user_id'=>$request->id,
            'title'=>$request->title,
            'company'=>$request->company,
            'description'=>$request->description,
            'from'=>$request->from,
            'to'=>$to
        ]);
        return redirect()->route('workfield.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkField $workField)
    {
        //
    }
    public function delete($id){
        $entry=WorkField::findOrFail($id);
        $entry->delete();
        return redirect()->back();
    }
}
