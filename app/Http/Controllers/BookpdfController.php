<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Bookpdf;
use App\Models\Book;
use App\Models\Writer;
use Session;


class BookpdfController extends Controller
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
        
        return view('Backend.Bookpdf.create');
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
        'BookName'=>'required|max:30',
        'WriterName'=>'required',
        'PdfFile'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        
     $bookpdf = new Bookpdf;
     $bookpdf->BookName = $request->input('BookName');
     $bookpdf->WriterName = $request->input('WriterName');

     if($request->hasfile('PdfFile'))
     {
         $file = $request->file('PdfFile');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/PdfFile/', $filename);
         $bookpdf->PdfFile = $filename;    
     }
     $bookpdf->save();
     return redirect()->back()->with('status','Pdf book info added successfully');
     
    
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
