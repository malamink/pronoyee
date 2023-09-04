<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Writup;
use Session;

class WritupController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writup = Writup::all();
        return view('Backend.Writup.index', compact('writup'));
        // $data['writup'] = Writup::all();
        // return view('Writup.index',$data);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create(Request $request)
    {
        $data['writer']=DB::table('writers')->get();
        return view('Backend.Writup.create',$data);
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
        'WritupTitle'=>'required|max:50',
        'WriterName'=>'required', 
        'WritupCat'=>'required', 
        'WritupPublished'=>'required',
        'image'=>'required|mimes:jpg,png,jpeg|max:25', 
        'WritupContent'=>'required', 
     ];
     $cm = [
         'WritupTitle.required'=>'Enter writup title name',
         'WritupTitle.max'=>'Writup name can not contain more than 50 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end

     $writup = new Writup;
     $writup->WritupTitle = $request->input('WritupTitle');
     $writup->WriterName = $request->input('WriterName');
     $writup->WritupCat = $request->input('WritupCat');
     $writup->WritupPublished = $request->input('WritupPublished');
     
     
     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/writups/', $filename);
         $writup->image = $filename;    
     }

     $writup->WritupContent = $request->input('WritupContent');
     
     $writup->save();
     return redirect()->back()->with('status','Writup info added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Writup $writup)
    {
        $data['writup'] = $writup;
        return view('Backend.Writup.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Writup $writup)
    {
        $data['writup'] = $writup;
        return view('Backend.Writup.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writup $writup)
    {
     //validation start
     $rules = [
        'WritupTitle'=>'required|max:50',
        'WriterName'=>'required', 
        'WritupCat'=>'required', 
        'WritupPublished'=>'required',
        'image'=>'required|mimes:jpg,png,jpeg|max:25', 
        'WritupContent'=>'required', 
     ];
     $cm = [
         'WritupTitle.required'=>'Enter writup title name',
         'WritupTitle.max'=>'Writup name can not contain more than 50 characters',
     ];
     $this->validate($request, $rules,$cm);
     //validation end


     $writup->WritupTitle = $request->input('WritupTitle');
     $writup->WriterName = $request->input('WriterName');
     $writup->WritupCat = $request->input('WritupCat');
     $writup->WritupPublished = $request->input('WritupPublished');
        
     
     if($request->hasfile('image'))
     {
        $destination = 'uploads/writups/'.$writup->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }


         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/writups/', $filename);
         $writup->image = $filename;    
     }

     $writup->WritupContent = $request->input('WritupContent');
     
     $writup->update();
     return redirect()->back()->with('status','Writup info updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writup $writup)
    {
        $writup->delete();
        return redirect('writups');
    }
}
