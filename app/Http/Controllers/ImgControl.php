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
        return view('realtimeImg',compact('dropdown','bg'));
    }

    public function showPredict()
    {
        $dropdown=[];
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
       $this->url = $url;
       $time = $this->get_time_format($url);
       $this->str = $time." UTC";
    }
    
    public function get_time_format($url){
        $hour = substr($url,-8,2);
        $min = substr($url,-6,2);
        $time = $hour.":".$min;
        //echo($time."<br>");
        return $time;
    }

}
