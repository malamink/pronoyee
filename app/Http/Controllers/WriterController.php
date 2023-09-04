<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Writer;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Language;
use App\Models\Timeperiod;
use Session;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $data['writer'] = Writer::all();
        return view('Backend.Writer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $country = Country::all();
        $language = Language::all();
        $timeperiod = Timeperiod::all();
        return view('Backend.Writer.create', compact('country'));
    
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
        'wNameBn'=>'required|max:30',
        'wNameEn'=>'required',
        'CountryName'=>'required|string|',
        'StateName'=>'required|string|', 
        'CityName'=>'required|string|',
        'BirthPlace'=>'required', 
        'Language'=>'required',        
        'wTperiod'=>'required', 
        'wDbirth'=>'required', 
        'wBiography'=>'required', 
        'image'=>'required|mimes:jpg,png,jpeg|max:25',
        'writerViews' => 'nullable',
     ];
     $cm = [
         'wNameBn.required'=>'Type writers name',
         'wNameBn.max'=>'Writers name can not contain more than 30 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end

     $writer = new Writer;
     $writer->wNameBn = $request->input('wNameBn');
     $writer->wNameEn = $request->input('wNameEn');
     $writer->CountryName = $request->input('CountryName');
     $writer->StateName	= $request->input('StateName');
     $writer->CityName = $request->input('CityName');
     $writer->BirthPlace = $request->input('BirthPlace');
     $writer->Language = $request->input('Language');
     $writer->wTperiod = $request->input('wTperiod');
     $writer->wDbirth = $request->input('wDbirth');
     $writer->wBiography = $request->input('wBiography');
     $writer->writerViews = $request->input('writerViews');

     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/writers/', $filename);
         $writer->image = $filename;    
     }
     $writer->save();
     return redirect()->back()->with('status','Writers info added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Writer $writer)
    {
        $data['writer'] = $writer;
        return view('Backend.Writer.show',$data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function edit(Writer $writer)
    {
        $data['writer'] = $writer;
        return view('Backend.Writer.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writer $writer)
    {
        //validation start
       $rules = [
        'wNameBn'=>'required|max:30',
        'wNameEn'=>'required',
        'CountryName'=>'required|string|',
        'StateName'=>'required|string|', 
        'CityName'=>'required|string|',
        'BirthPlace'=>'required', 
        'Language'=>'required',        
        'wTperiod'=>'required', 
        'wDbirth'=>'required', 
        'wBiography'=>'required', 
        'image'=>'required|mimes:jpg,png,jpeg|max:25',
        'writerViews' => 'nullable',
     ];
     $cm = [
         'wNameBn.required'=>'Type writers name',
         'wNameBn.max'=>'Writers name can not contain more than 30 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end

        $data['wNameBn'] = $request->wNameBn;
        $data['wNameEn'] = $request->wNameEn;
        $data['wBplace'] = $request->wBplace;
        $data['wDname'] = $request->wDname;
        $data['wCname'] = $request->wCname;
        $data['wLanguage'] = $request->wLanguage;
        $data['wTperiod'] = $request->wTperiod;
        $data['wDbirth'] = $request->wDbirth;
        $data['wBiography'] = $request->wBiography;

        if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/writers/', $filename);
         $writer->image = $filename;    
     }


        $writer->update($request->except('keys_token'));
        return redirect()->back()->with('status','State updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        $writer->delete();
        return redirect('writers');
    }
}


 