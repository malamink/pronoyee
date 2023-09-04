<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use Session;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data['programme'] = Programme::all();
        return view('Backend.Programme.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Programme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation start 
       $rules = [
        'ProgrammeName'=>'required|max:30',
        'ProgCat'=>'required',
        'participantList'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end

      
     $programme = new Programme;
     $programme->ProgrammeName = $request->input('ProgrammeName');
     $programme->ProgCat = $request->input('ProgCat');

     if($request->hasfile('participantList'))
     {
         $file = $request->file('participantList');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/participantList/', $filename);
         $programme->participantList = $filename;    
     }
     $programme->save();
     return redirect()->back()->with('status','Programme info added successfully');
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
