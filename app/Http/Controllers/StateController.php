<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\State;
use Session;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['state'] = State::all();
        return view('Backend.State.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.State.create');
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
        'country_id'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        State::create([
            'name'=>$request->name,
            'country_id'=>$request->country_id,
        ]);
        // return redirect('countries');
        return redirect()->back()->with('status','State added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        $data['state'] = $state;
        return view('Backend.State.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        $data['state'] = $state;
        return view('Backend.State.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  State $state)
    {
        $data['name'] = $request->StateName;
        $state->update($request->except('keys_token'));
        return redirect()->back()->with('status','State updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();
        return redirect('states');
    }
}
