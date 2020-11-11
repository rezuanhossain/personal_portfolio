<?php

namespace App\Http\Controllers;

use App\EducationField;
use Illuminate\Http\Request;
use Auth;

class EducationFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=Auth::user()->id;
        EducationField::create([
            'user_id'=>$id,
            'title'=>$request->title,
            'institution'=>$request->institution,
            'years'=>$request->years,
            'graduating_in'=>$request->graduating_in,
            'status'=>$request->status,
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
     * @param  \App\EducationField  $educationField
     * @return \Illuminate\Http\Response
     */
    public function show(EducationField $educationField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EducationField  $educationField
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationField $educationField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EducationField  $educationField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationField $educationField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EducationField  $educationField
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationField $educationField)
    {
        //
    }
}
