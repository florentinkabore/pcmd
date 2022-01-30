<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service (Request $request)
    {
          $data=new service();
            $data->type_service=$request->mise_en_forme;
            $data->type_service=$request->correction;
            $data->type_service=$request->redaction;
            $data->save();  
    }
}
