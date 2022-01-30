<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shape;

class ShapeController extends Controller
{
    public function shapepage()
    {
        return view('shapepage');
    }

    public function selectshape(Request $request)
    {

        $data= new Shape;
        $data->police=$request->police;
        $data->taille=$request->taille;
        $data->interligne=$request->interligne;
        $data->save();
        return redirect()->back();

    }

    public function showshape()
    {
        $data=shape::all();
        return view('showshape',compact('data'));
    }
}
