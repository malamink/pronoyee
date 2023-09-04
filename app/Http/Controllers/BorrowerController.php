<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\User;
use Session;

class BorrowerController extends Controller
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
        $user = User::all();
        return view('Backend.Borrower.create', compact('user'));
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
        'BorrowedName'=>'required|max:30',
        'BorrowedType'=>'required',
        'CardNumber'=>'required',
        'BookName'=>'required',
        'BorrowedFromDate'=>'required',
        'BorrowedToDate'=>'required',
        'ActualReturnDate'=>'required',
        'IssuedBy'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        
     $borrower = new Borrower;
     $borrower->BorrowedName = $request->input('BorrowedName');
     $borrower->BorrowedType = $request->input('BorrowedType');
     $borrower->CardNumber = $request->input('CardNumber');
     $borrower->BookName = $request->input('BookName');
     $borrower->BorrowedFromDate = $request->input('BorrowedFromDate');
     $borrower->BorrowedToDate = $request->input('BorrowedToDate');
     $borrower->ActualReturnDate = $request->input('ActualReturnDate');
     $borrower->IssuedBy = $request->input('IssuedBy');

     
     $borrower->save();
     return redirect()->back()->with('status','Book borrower info added successfully');
     
    
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
