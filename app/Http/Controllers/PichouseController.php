<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pichouse;
use Session;

class PichouseController extends Controller
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
        return view('Backend.Pichouse.create');
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
        'PicTitle'=>'required|max:30',
        'PicCat'=>'required',
        'image'=>'required', 
     ];
     $cm = [
         'PicTitle.required'=>'Enter title name',
         'PicTitle.max'=>'title name can not contain more than 30 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end

     $pichouse = new Pichouse;
     $pichouse->PicTitle = $request->input('PicTitle');
     $pichouse->PicCat = $request->input('PicCat');
     
     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/pichouses/', $filename);
         $pichouse->image = $filename;    
     }
     $pichouse->save();
     return redirect()->back()->with('status','Pichouse info added successfully');

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
