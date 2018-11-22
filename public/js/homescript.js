function SelectImg() {
    console.log("SelectImg!");
    var x = document.getElementById("SelectTime").value;
    var image = document.getElementById("myImg");
    //var url ="images/se1_b08_"+x+".jpg";
    var url = x;
    image.src=url;
}

function nextImg(){
    var x = parseInt(document.getElementById("SelectTime").value);
    console.log(x);
    x +=1
    if(x>4){
        x=0;
    }
    console.log(x);
    var url = "images/se1_b08_"+('00000'+x).slice(-5)+".jpg"
    var image = document.getElementById("myImg");
    image.src=url;
    document.getElementById('SelectTime').selectedIndex=x;
}

function prevImg(){
    var x = parseInt(document.getElementById("SelectTime").value);
    console.log(x);
    x -=1
    if(x<0){
        x=4;
    }
    console.log(x);
    var url = "images/se1_b08_"+('00000'+x).slice(-5)+".jpg"
    var image = document.getElementById("myImg");
    image.src=url;
    document.getElementById('SelectTime').selectedIndex=x; 
}
