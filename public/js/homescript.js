function SelectImg() {
    console.log("SelectImg!");
    var x = document.getElementById("SelectTime").value;
    var image = document.getElementById("myImg");
    //var url ="images/se1_b08_"+x+".jpg";
    var url = x;
    image.src=url;
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

