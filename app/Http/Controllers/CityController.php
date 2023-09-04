<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['city'] = City::all();
        return view('Backend.City.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
    public function create(Request $request) 
    {
        $data['state']=DB::table('states')->get();
        return view('Backend.City.create',$data);
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
        'state_id'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        City::create([
            'name'=>$request->name,
            'state_id'=>$request->state_id,
        ]);
        // return redirect('countries');
        return redirect()->back()->with('status','City added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        $data['city'] = $city;
        return view('Backend.City.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $data['city'] = $city;
        return view('Backend.City.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $data['name'] = $request->name;
        $data['state_id'] = $request->state_id;
        $city->update($request->except('keys_token'));
        return redirect()->back()->with('status','City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect('cities');
    }
}
