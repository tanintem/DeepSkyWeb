<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class test extends Controller
{
    //
    public function filesystem(){
        $file = Storage::files('public/images');
        foreach($file as $name){
            // echo(Storage::url($name));
            echo(asset($name));
            echo("<br>");
        }

    }
}
