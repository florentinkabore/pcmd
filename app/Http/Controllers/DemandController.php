<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Demand;
use App\Models\File;
use App\Models\Service;
use App\Models\Shape;


class DemandController extends Controller
{
    public function demandepage()
    {
        return view('demandepage');
    }

    public function demande(Request $request)
    { 
            $validated= $request->validate([
                'filetype'=>'required',
                'filename'=>'required',
                'file'=>'required|max:10000|mimes:doc,docx',
                'type_service'=>'required',
                'police'=>'required',
                'taille'=>'required',
                'type_service'=>'required',
                'interligne'=>'required',
            ]); 

        $data=new file();
        $file=$request->file;
        
        if($file !='')
        {
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('assets',$filename);
            $data->file=$filename;
        }     
        $data->filetype=$request->filetype;
        $data->filename=$request->filename;
        $data->file=$request->file;
        $data->save();

        $data2=new service();
            $data2->type_service=$request->type_service;
            $data2->type_service=$request->type_service;
            $data2->type_service=$request->type_service;
            $data2->save();


        $data3= new shape();
            $data3->police=$request->police;
            $data3->taille=$request->taille;
            $data3->interligne=$request->interligne;
            $data3->save();
            
            session()->flash('message', 'demande successfully submit.');
        return redirect()->back();
    }

}
