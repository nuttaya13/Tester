<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function index()
    {
        return view('fileUpload');        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'payment'=>'required|numeric',
            'file' => 'required',
        ]);
        $input = $request->all();
        $file = $request->file('file');
        $input['file'] = $file->getClientOriginalName();
        $file->move(public_path('upload'),$file->getClientOriginalName());
        File::create(['file' => $input['file']]);
        
        return redirect()->back()->with('success', 'success Full file upload');;

    }
}