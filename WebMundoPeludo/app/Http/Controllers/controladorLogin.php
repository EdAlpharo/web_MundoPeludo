<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    function login(){
        return view('login');
    }
}
