<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class ImgControl extends Controller
{
    //

    public function showReal($num)
    {
        $dropdown=[];
        $dir = Storage::Files('public/images/');
        sort($dir);
        foreach($dir as $url){
            $option =  new option(Storage::url($url));
            $dropdown[] = $option;
        }
        return view('realtimeImg',compact('dropdown','num'));
    }

    public function showPredict($num)
    {
        $dropdown=[];
        $dir = Storage::Files('public/prediction/');
        sort($dir);
        foreach($dir as $url){
            $option =  new option(Storage::url($url));
            $dropdown[] = $option;
        }
        return view('predictImg',compact('dropdown','num'));
    }

    public function showCompare($real_time,$pred_time)
    {
        $dropdown = [];
        $real_dir = Storage::Files('public/images/');
        sort($real_dir);
        if($pred_time==0){
            $predict_dir = Storage::Files('public/prediction');
        }
        elseif($pred_time==1){
            $predict_dir = Storage::Files('public/next-1hr');
        }
        sort($predict_dir);
        $length= sizeof($predict_dir);
        for($i=0; $i<$length; $i++){
            //$r_time=substr($real_dir[$r_count+$i],-8,4);
            $option = new option_duo(Storage::url($real_dir[$i]),Storage::url($predict_dir[$i]),$i);
            $dropdown[] = $option;
        }
        //print_r($dropdown);
        $marker=Storage::url('public/marker/donmuangmask.png');
        return view('compare',compact('dropdown','real_time','pred_time','marker'));
    }
}

class option //extends ImgControl
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

class option_duo extends option
{

    var $pred_url;
    var $combine;
    function __construct($url,$pred_url,$index){
        $this->index = (string) $index;
        $this->url = $url;
        $this->pred_url = $pred_url;
        $this->combine = $url.":".$pred_url;
        $time = $this->get_time_format($url);
        $this->str = $time." UTC";
    }
}

