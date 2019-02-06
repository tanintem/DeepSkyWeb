function SelectImg() {
    console.log("SelectImg!");
    var x = document.getElementById("SelectTime").value;
    var image = document.getElementById("myImg");
    //var url ="images/se1_b08_"+x+".jpg";
    var url = x;
    image.src=url;
}

function showTime(){
    var option = document.getElementById("SelectTime");
    var time = option.options[option.selectedIndex].text;
    var show_satellite_time = document.getElementById('SatelliteTime')
    show_satellite_time.innerText=time;

    var show_prediction_time = document.getElementById("PredictionTime");
    var PredictionLength = document.getElementById("PredictLength").selectedIndex;
    if(PredictionLength==0){
        show_prediction_time.innerText=time;
    }
    else{
        var hour = time.split(":");
        var new_time = parseInt(hour[0])+PredictionLength; //บรรทัดนี้บวกเวลาช่องขวา
        var pre_time = "000000000" + new_time.toString()
        var prediction_time = pre_time.substr(pre_time.length-2) +":"+ hour[1];
        console.log(prediction_time);
        show_prediction_time.innerText=prediction_time;
    }

}


function SelectDuo(){
    var input = document.getElementById("SelectTime").value;
    var real_image = document.getElementById("myImg");
    var pred_img = document.getElementById("myPred");
    var url = input.split(":");
    console.log(url);
    real_image.src=url[0];
    pred_img.src=url[1];
    showTime();
}

function nextImg(){
    //var x = document.getElementById("myImg").src;
    var select = document.getElementById("SelectTime");
    var index = select.selectedIndex;
    var image = document.getElementById("myImg");
    index +=1;
    if(index>select.length-1){
        index = 0;
    }
    select.selectedIndex=index;
    image.src=select.value;
}

function prevImg(){
    var select = document.getElementById("SelectTime");
    var index = select.selectedIndex;
    var image = document.getElementById("myImg");
    index -=1;
    if(index<0){
        index = select.length-1;
    }
    select.selectedIndex=index;
    image.src=select.value;
}

function next_duo(){
    SelectDuo();
    var select = document.getElementById("SelectTime");
    var index = select.selectedIndex;

    index +=1;
    if(index>select.length-1){
        index = 0;
    }
    select.selectedIndex=index;
    console.log(index);
}

function prev_duo(){
    SelectDuo();
    var select = document.getElementById("SelectTime");
    var index = select.selectedIndex;

    index -=1;
    if(index<0){
        index = select.length-1;
    }
    select.selectedIndex=index;
    console.log(index);
}

function goRealTime(){
    var index = document.getElementById("SelectTime").selectedIndex;
    window.location.href = "/RealTime"+index;

}

function goPredict(){
    var index = document.getElementById("SelectTime").selectedIndex;
    var index_predict = document.getElementById("PredictLength").selectedIndex;
    window.location.href = "/Prediction"+index+"-"+index_predict;

}
              
function select_predict_ength(){
    var index_pred = document.getElementById("PredictLength").selectedIndex;
    var index_time = document.getElementById("SelectTime").selectedIndex;
    window.location.href = "/newShow"+index_time+"-"+index_pred;
}
//for new UI

function setTime(){
    var time = new Date;
    var hour = time.getUTCHours();
    var min = time.getUTCMinutes();
    min = min-(min%10);
    var satelliteImgTime = hour.toString()+":"+min.toString()+" UTC";
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

    for(var i = 0; i < hour.length; i++) {
        hour[i].onclick = function () {
            if(this.value==0&&select_minute==0){
                $(minute).val(10)
            }
            //console.log(this.value)
            select_hour = parseInt(this.value);
            console.log('hour='+select_hour)
            change_image(select_hour,select_minute)
            if(select_hour==3){
                $(minute).val(0)
            }
            changePredTime(showPredHour,showPredMin,select_hour,select_minute);
        };
    }
    minute.onchange = function(){
        //console.log(this.value)
        if(select_hour==0&&this.value==0){
            $(this).val(10)
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
    hour += nextHour+Math.floor(min/60);
    min = min%60;
    min = "0"+min.toString();
    min = min.slice(-2);
    var showPred_time = hour.toString()+":"+min+" UTC";
    document.getElementById("PredictTime").innerText = showPred_time;
}

function change_image(hour,minute){
    var prediction_image = document.getElementById("predictImage");
    var src = "/storage/next-"+hour+"hr/"+minute+".jpg";
    console.log(src);
    prediction_image.src=src;
}



