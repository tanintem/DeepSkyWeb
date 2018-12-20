function SelectImg() {
    console.log("SelectImg!");
    var x = document.getElementById("SelectTime").value;
    var image = document.getElementById("myImg");
    //var url ="images/se1_b08_"+x+".jpg";
    var url = x;
    image.src=url;
}

function SelectDuo(){
    var input = document.getElementById("SelectTime").value;
    var real_image = document.getElementById("myImg");
    var pred_img = document.getElementById("myPred");
    var url = input.split(":");
    console.log(url);
    real_image.src=url[0];
    pred_img.src=url[1];
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
    var real_image = document.getElementById("myImg");
    var pred_img = document.getElementById("myPred");
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
    var real_image = document.getElementById("myImg");
    var pred_img = document.getElementById("myPred");
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
    window.location.href = "/compare"+index_time+"-"+index_pred;
}