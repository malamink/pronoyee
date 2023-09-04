<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Country;
use Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $country = Country::all();
        // return view('Country.index', compact('country'));
        $data['country'] = Country::all();
        return view('Backend.Country.index',$data);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Country.create');
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
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        Country::create([
            'name'=>$request->name,
        ]);
        // return redirect('countries');
        return redirect()->back()->with('status','Country added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $data['country'] = $country;
        return view('Backend.Country.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $data['country'] = $country;
        return view('Backend.Country.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $data['Name'] = $request->Name;
        $country->update($request->except('keys_token'));
        // return redirect('countries');
        return redirect()->back()->with('status','Country updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect('countries');
    }
}
