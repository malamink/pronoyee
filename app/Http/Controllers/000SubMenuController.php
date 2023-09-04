<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\SubMenu;
use Session;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
        
        $data['submenu'] = SubMenu::all();
        return view('Backend.SubMenu.index',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.SubMenu.create');
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
        'SubMenuName'=>'required|max:30',
        'menu_id'=>'required',
     ];
     
     $this->validate($request, $rules);
     //validation end
  
    SubMenu::create([
        'SubMenuName'=>$request->SubMenuName,
        'menu_id'=>$request->menu_id,
    ]);
    return redirect()->back()->with('status','Sub-menu added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubMenu $submenu)
    {
        $data['submenu'] = $submenu;
        return view('Backend.SubMenu.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMenu $submenu)
    {
        $data['submenu'] = $submenu;
        return view('Backend.SubMenu.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $submenu)
    { 
        $data['SubMenuName'] = $request->SubMenuName;
        $submenu->update($request->except('keys_token'));
        return redirect()->back()->with('status','Submenu updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMenu $submenu)
    {
        $submenu->delete();
        return redirect('submenus');
    }
}
