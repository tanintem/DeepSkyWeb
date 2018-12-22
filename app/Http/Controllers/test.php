<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class test extends Controller
{
    //
    public function filesystem(){
        $file = Storage::files('images');
        foreach($file as $name){
            // echo(Storage::url($name));
            echo(asset($name));
            //echo(Storage::url($name));
            echo("<br>");
        }

    }
}
