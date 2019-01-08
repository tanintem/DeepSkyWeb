<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class uploadController extends Controller
{
    //
    public function index()
    {
        return view('upload');
    }

    public function store(request $request)
    {
        print_r($request->all());
        //print_r($request);
        // $name = $request->image->getClientOriginalName();
        // return $request->image->storeAs('public',$name);

        //return "this is store";
    }
}
