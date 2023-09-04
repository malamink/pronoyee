<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;

class AdminController extends Controller
{
    public function Admin()
    {
        return view('Backend.Admin.admin');
    }

 
    public function AdminLogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/dashboard');
        }else{
            Session::flash('error-msg','Invalid Email or Password');
            return redirect('admin');
        }
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        // return redirect('admin');
    }
}
