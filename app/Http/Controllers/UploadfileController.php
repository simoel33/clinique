<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadfileController extends Controller
{
    
    public function upload(){

        return view('upload');
    }

    public function uploadFile(Request $request){
            $path = $request->file->store('public')->RgetRealPath();

        return var_dump($path);
    }
}
