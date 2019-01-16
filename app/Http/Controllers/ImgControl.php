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

    public function newShow($real_time,$pred_time)
    {
        $dropdown = [];
        $plist=[];
        $rlist=[];
        $real_dir = Storage::Files('images/');
        sort($real_dir);
        $predict_dir=Storage::Files('next-1hr');
        sort($predict_dir,SORT_STRING);
        if($pred_time==2){
            $predict_dir = Storage::Files('next-2hr');
            sort($predict_dir,SORT_STRING);
        }
        if($pred_time==3){
            $predict_dir = Storage::Files('next-3hr');
            sort($predict_dir,SORT_STRING);
        }
        $plength = sizeof($predict_dir);
        $rlength = sizeof($real_dir); 
        $rc=0;
        $pc=0;
        $count=0;
        
        while($rc<$rlength&&$pc<$plength){
            $r_time=substr($real_dir[$rc],-8,4);
            $p_time=substr($predict_dir[$pc],-8,4);
            $compare = strcmp($r_time,$p_time);
            if($compare==0){
                $plist[]=$predict_dir[$pc];
                $rlist[]=$real_dir[$rc];
                echo($predict_dir[$pc]."  ".$real_dir[$rc]."<br>");
                $rc++;
                $pc++;
                $count++;
            }
            elseif($compare<0){
                $rc++;
            }

            elseif($compare>0){
                $pc++;
            }
        }

        // if($pred_time==0){
        //     $plist = array_rotate($plist,-6);
        // }   

        // for($i=0; $i<$count; $i++){
        //     //$r_time=substr($real_dir[$r_count+$i],-8,4);
        //     $option = new option_duo(Storage::url($rlist[$i]),Storage::url($plist[$i]),$i);
        //     $dropdown[] = $option;
        // }
        // //print_r($dropdown);
        // $marker=Storage::url('marker/bigmarker.png');
        // $logo=Storage::url('marker/logo-white.png');
        // // foreach($predict_dir as $dir){
        // //     echo($dir);
        // //     echo("<br>");
        // // }
        // exec('php /full/path/to/artisan view:clear');
        // return view('newShow',compact('dropdown','real_time','pred_time','marker','logo'));
    }


}
function array_rotate($array, $shift) {
    if(!is_array($array) || !is_numeric($shift)) {
        if(!is_array($array)) error_log(__FUNCTION__.' expects first argument to be array; '.gettype($array).' received.');
        if(!is_numeric($shift)) error_log(__FUNCTION__.' expects second argument to be numeric; '.gettype($shift)." `$shift` received.");
        return $array;
    }
    $shift %= count($array); //we won't try to shift more than one array length
    if($shift < 0) $shift += count($array);//handle negative shifts as positive
    return array_merge(array_slice($array, $shift, NULL, true), array_slice($array, 0, $shift, true));
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

