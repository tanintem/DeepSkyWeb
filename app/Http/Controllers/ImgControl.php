<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class ImgControl extends Controller
{
    //

    public function showReal()
    {
        $dropdown=[];
        $time = range(0,4);
        $dir = Storage::Files('public/images/');
        sort($dir);
        foreach($dir as $url){
            $option =  new option(Storage::url($url));
            $dropdown[] = $option;
        }
        
        //$url = Storage::url('images/se1_b08_00000.jpg');
        //return "<img src='".$url."'.>";
        //print_r($dropdown);
        //echo($dir[0]);
        return view('realtimeImg',compact('dropdown'));
    }

    public function showPredict()
    {
        $dropdown=[];
        $time = range(0,4);
        $dir = Storage::Files('public/prediction/');
        sort($dir);
        foreach($dir as $url){
            $option =  new option(Storage::url($url));
            $dropdown[] = $option;
        }
        
        //$url = Storage::url('images/se1_b08_00000.jpg');
        //return "<img src='".$url."'.>";
        //print_r($dropdown);
        //echo($dir[0]);
        return view('predictImg',compact('dropdown'));
    }
}

class option extends ImgControl
{
    var $url;
    var $str;
    function __construct($url) {
       $this->str = substr($url,-9,5);
       $this->url = $url;
    }
    // public function get_str(){
    //     $str = substr($url,-9,5);
    //     return $str;
    // }
}
