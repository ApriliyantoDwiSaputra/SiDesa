<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import class Auth

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function prosesLogin()
    {
        
    }
}
