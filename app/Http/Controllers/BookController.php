<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Book;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $book = Book::all();
        $book = Book::paginate(1);
        // return view('Book.index', compact('book'));

        $data['book'] = Book::all();
        return view('Backend.Book.index',$data);
    } 
 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) 
    {
        $data['writer']=DB::table('writers')->get();
        $data['bookcat']=DB::table('bookcats')->get();
        $data['publication']=DB::table('publications')->get();
        $data['language']=DB::table('languages')->get();
        return view('Backend.Book.create',$data);
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
        'BookNumber'=>'required',
        'bTitle'=>'required|max:30',
        'wName'=>'required',
        'bCategory'=>'required',
        'bPublications'=>'required',
        'bPublishDate'=>'required',
        'bLanguage'=>'required',
        'isbn'=>'required',
        'bPrice'=>'required',
        'image'=>'required|mimes:jpg,png,jpeg|max:25',
        'pdf'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        
     $book = new Book;
     $book->BookNumber = $request->input('BookNumber');
     $book->bTitle = $request->input('bTitle');
     $book->wName = $request->input('wName');
     $book->bCategory = $request->input('bCategory');
     $book->bPublications = $request->input('bPublications');
     $book->bPublishDate	= $request->input('bPublishDate');
     $book->bLanguage = $request->input('bLanguage');
     $book->isbn = $request->input('isbn');
     $book->bPrice = $request->input('bPrice');

     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/books/', $filename);
         $book->image = $filename;    
     }

     if($request->hasfile('pdf'))
     {
         $file = $request->file('pdf');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/pdfs/', $filename);
         $book->pdf = $filename;    
     }
     $book->save();
     return redirect()->back()->with('status','Book info added successfully');
     
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $data['book'] = $book;
        return view('Backend.Book.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $data['book'] = $book;
        return view('Backend.Book.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //validation start 
       $rules = [
        'BookNumber'=>'required',
        'bTitle'=>'required|max:30',
        'wName'=>'required',
        'bCategory'=>'required',
        'bPublications'=>'required',
        'bPublishDate'=>'required',
        'bLanguage'=>'required',
        'isbn'=>'required',
        'bPrice'=>'required',
        'image'=>'required|mimes:jpg,png,jpeg|max:25',
        'pdf'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     

        $data['BookNumber'] = $request->BookNumber;
        $data['bTitle'] = $request->bTitle;
        $data['wName'] = $request->wName;
        $data['bCategory'] = $request->bCategory;
        $data['bPublications'] = $request->bPublications;
        $data['bPublishDate'] = $request->bPublishDate;
        $data['bLanguage'] = $request->bLanguage;
        $data['isbn'] = $request->isbn;
        $data['bPrice'] = $request->bPrice;
        $data['image'] = $request->image;
        $data['pdf'] = $request->pdf;
        $book->update($request->except('keys_token'));
        // return redirect('countries');
        return redirect()->back()->with('status','Book updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books');
    }
}

