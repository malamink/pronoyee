<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subcategory'] = Subcategory::all();
        return view('Backend.SubCategory.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.SubCategory.create');
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
        'SubCatName'=>'required|max:30',
        'Cat_id'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
     
        Subcategory::create([
            'SubCatName'=>$request->SubCatName,
            'Cat_id'=>$request->Cat_id,
        ]);
        return redirect()->back()->with('status','Sub-category added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        $data['subcategory'] = $subcategory;
        return view('Backend.SubCategory.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $data['subcategory'] = $subcategory;
        return view('Backend.SubCategory.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $data['SubCatName'] = $request->SubCatName;
        $data['Cat_id'] = $request->Cat_id;
        $subcategory->update($request->except('keys_token'));
        return redirect()->back()->with('status','Sub-category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect('subcategories');
    }
}
