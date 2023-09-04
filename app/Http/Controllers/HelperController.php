<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use Session;


class HelperController extends Controller
{
    public function MenuList()
    {
        $menulist = Menu::select('id','MenuName')->get();
        return view('Backend.Menu.add-sub-menu', compact('menulist'));
    }
}
