<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\File;

class FileController extends Controller
{
    public function uploadpage()
    {
        return view('uploadpage');
    }

    public function store(Request $request)
    {

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
        return redirect()->back();

    }

    public function show()
    {
        $data=file::all();
        return view('showfile',compact('data'));
    }

    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }

    public function view($id)
    {
        $data=File::find($id);
        return view('viewfile',compact('data'));
    }
}