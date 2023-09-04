<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDashboardController extends Controller
{
    public function UserDashboard()
    {
        return view('Users.user-dashboard');
    }
    

    
}

