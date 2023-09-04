<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use Session;
 
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::all();
        return view('Backend.Menu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Menu.create');
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
        'MenuName'=>'required|max:30',
     ];
     
     $this->validate($request, $rules);
     //validation end

        
    $menu = new Menu;
    $menu->MenuName = $request->input('MenuName');
   
    $menu->save();
    return redirect()->back()->with('status','Menu info added successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Menu $menu)
    {
        $data['menu'] = $menu;
        return view('Backend.Menu.show',$data);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $data['menu'] = $menu;
        return view('Backend.Menu.edit',$data);

    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
       //validation start 
       $rules = [
        'MenuName'=>'required|max:30',
     ];
     
     $this->validate($request, $rules);
     //validation end

    $data['MenuName'] = $request->MenuName;
    $menu->update($request->except('keys_token'));
    // return redirect('countries');
    return redirect()->back()->with('status','Menu updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect('menus');
    }
}
