<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function user_index()
    {
        $role=Auth::User()->role;
        if($role=='1')
        {
            return view('admin');
        }
        if($role=='2')
        {
            return view('operateur');
        }
        if($role=='3')
        {
            return view('client');
        }
        else
        {
            return view('client');
        }
    }

}
