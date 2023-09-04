<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Almirah;
use App\Models\Bookshelf;
use Session;



class BookshelfController extends Controller
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
        $almirah = Almirah::all();
        return view('Backend.BookShelf.create', compact('almirah'));
    
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
        'bTitle'=>'required',
        'AlmirahName'=>'required',
        'ShelfNumber'=>'required',
        'ShelfLocation'=>'required',
     ];
    
     
     $this->validate($request, $rules);
     //validation end
     
        
     $bookshelf = new Bookshelf;
     $bookshelf->bTitle = $request->input('bTitle');
     $bookshelf->AlmirahName = $request->input('AlmirahName');
     $bookshelf->ShelfNumber = $request->input('ShelfNumber');
     $bookshelf->ShelfLocation = $request->input('ShelfLocation');

     $bookshelf->save();
     return redirect()->back()->with('status','Book shelf location added successfully');
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
