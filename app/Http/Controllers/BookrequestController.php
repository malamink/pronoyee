<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookrequest;
use Session;


class CommunicationController extends Controller
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
        return view('Frontend.Bookrequest.create');
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
        'name'=>'required|max:30',
        'phone'=>'required|numeric|min:11',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'message'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
     $bookrequest = new Bookrequest;
     $bookrequest->name = $request->input('name');
     $bookrequest->phone = $request->input('phone');
     $bookrequest->email = $request->input('email');
     $bookrequest->message = $request->input('message');

 
        $bookrequest->save();
     return redirect()->back()->with('status','Book request send successfully');    
    

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
