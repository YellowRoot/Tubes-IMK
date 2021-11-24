<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    function login(Request $req) 
    {
        $req->validate([
            'username'=>'required | max:255',
            'password'=>'required | min:6'
        ]);

        return $req->input();
    }
}
