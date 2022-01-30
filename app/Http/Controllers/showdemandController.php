<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand;
use App\Models\File;

class showdemandController extends Controller
{
    function showdemand()
    {
        return view('showdemand');
    }

    function index()
    {
        $data=file::all();
        $data=shape::all();
        return view('showdemand', compact('data'));
    }

    
    
}
