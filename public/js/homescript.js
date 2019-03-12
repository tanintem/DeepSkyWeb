//for new UI

function setTime(){
    var time = new Date;
    var hour = time.getUTCHours();
    var min = time.getUTCMinutes();
    min = min-(min%10);
    min = "0"+min.toString();
    min = min.slice(-2);
    var d = new Date();
    var hour_local = d.getHours();
    var satelliteImgTime = hour_local.toString()+":"+min.toString()+" Local";
    var showCurrentTime = document.getElementById("CurrentTime");
    showCurrentTime.innerText=satelliteImgTime;
    return [hour,min]
}


function active_radio(){
    var showTime = setTime();
    var showPredHour = showTime[0];
    var showPredMin = showTime[1];
    var hour = document.configControl.predictLength;
    var minute = document.getElementById("inputAddNextMin");
    minute.value=50;
    var select_hour = 0;
    var select_minute = 10;
    var band = document.configControl.band;

    for(var i = 0; i<band.length; i++){
        band[i].onclick = function(){
            change_image(select_hour,select_minute);
        }
    }

    for(var i = 0; i < hour.length; i++) {
        hour[i].onclick = function () {
            if(parseInt(this.value)==0&&select_minute==0){
                $(minute).val(10)
                select_minute =10;
            }
            //console.log(this.value)
            select_hour = parseInt(this.value);
            console.log('hour='+select_hour)
            change_image(select_hour,select_minute)
            if(select_hour==3){
                $(minute).val(0)
                select_minute=0;
            }
            changePredTime(showPredHour,showPredMin,select_hour,select_minute);
        };
    }
    minute.onchange = function(){
        //console.log(this.value)
        if(select_hour==0&&this.value==0){
            $(this).val(10)
            select_minute=10;
        }
        if(select_minute==0 && this.value==0 &&select_hour>0){
            console.log(50);
            $(this).val(50);
            select_hour-=1;
            hour[select_hour].checked=true;
        }
        if(this.value >50 && select_hour<3){
            $(this).val(0);
            select_hour+=1;
            hour[select_hour].checked=true;
        }
        if(select_hour==3){
            $(minute).val(0)
            select_minute=0;
        }
        select_minute = this.value
        change_image(select_hour,select_minute)
        changePredTime(showPredHour,showPredMin,select_hour,select_minute);
    };
    changePredTime(showPredHour,showPredMin,select_hour,select_minute);
}

function changePredTime(hour,min,nextHour,nextMin){
    console.log(hour+":"+min+","+nextHour+":"+nextMin);
    min =  parseInt(min)+parseInt(nextMin);
    var d = new Date();
    var hour_local = d.getHours();
    hour = hour_local
    hour += nextHour+Math.floor(min/60);
    min = min%60;
    min = "0"+min.toString();
    min = min.slice(-2);
    var showPred_time = hour.toString()+":"+min+" Local";
    document.getElementById("PredictTime").innerText = showPred_time;
}

function change_image(hour,minute){
    var prediction_image = document.getElementById("predictImage");
    var band = document.configControl.band;
    var base = "/storage/";
    var heavyRain = "/storage/heavy-rain/";
    if(band[0].checked==true){
        var src = base+"next-"+hour+"hr/"+minute+".jpg";
    }
    if(band[1].checked==true){
        var src = heavyRain+"next-"+hour+"hr/"+minute+".jpg";
    }
    console.log(src);
    prediction_image.src=src;
}

