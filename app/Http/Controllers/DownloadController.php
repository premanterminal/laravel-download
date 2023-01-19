<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //
    function downloadFile($file_name){
        $file = Storage::disk('public')->get($file_name);
  
        return (new Response($file, 200))
              ->header('Content-Type', 'image/jpeg');
    }

    function view()
    {
        $files = Storage::files("public");
        $imgFiles = array();
        foreach ($files as $key => $val) {
            $val = str_replace("public/","",$val);
            array_push($imgFiles, $val);
        }
    return view('welcome', ['images' => $imgFiles]);
    }
}
