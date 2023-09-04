<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ptube;
use Session;
 

class PtubeController extends Controller
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
    public function create()
    {
        return view('Backend.Ptube.create');
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
        'VidTitle'=>'required|max:30',
        'VidCat'=>'required',
        'Video'=>'required', 
     ];
     $cm = [
         'VidTitle.required'=>'Enter VidTitle name',
         'VidTitle.max'=>'VidTitle name can not contain more than 30 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end

     $ptube = new Ptube;
     $ptube->VidTitle = $request->input('VidTitle');
     $ptube->VidCat = $request->input('VidCat');
     
     if($request->hasfile('Video'))
     {
         $file = $request->file('Video');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/ptubes/', $filename);
         $ptube->Video = $filename;    
     }
     $ptube->save();
     return redirect()->back()->with('status','Ptube info added successfully');

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
