<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requested;

class DemandeController extends Controller
{
    public function demandepage()
    {
        return view('demandepage');
    }

    public function demande(Request $request)
    {
        $data= new Requested;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

}
