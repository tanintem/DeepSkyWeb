function SelectImg() {
    console.log("SelectImg!");
    var x = document.getElementById("SelectTime").value;
    var image = document.getElementById("myImg");
    //var url ="images/se1_b08_"+x+".jpg";
    var url = x;
    image.src=url;
}

function getNextImg(x,op){
    var index = x.slice(-8,-4);
    var len = document.getElementById("SelectTime").length;
    console.log(len);
    
    if(op=="next"){
        if(index == len-1){
            index = 0;
        }
        else{
             index = parseInt(index)+1;
        }
    }
    if(op=="prev"){
        if(index == 0){
            index = len-1;
        }
        else{
            index = parseInt(index)-1;
        }
    }
    index = ("0000"+index).slice(-4);
    var newUrl = x.slice(0,-8)+index+".jpg";
    return newUrl;
}

function nextImg(){
    var x = document.getElementById("myImg").src;
    var url = getNextImg(x,'next');
    var image = document.getElementById("myImg");
    image.src=url;
    var idx = parseInt(url.slice(-8,-4));
    console.log(idx);
    document.getElementById('SelectTime').selectedIndex=idx; 
}

function prevImg(){
    var x = document.getElementById("myImg").src;
    console.log(x);
    var url = getNextImg(x,'prev')
    var image = document.getElementById("myImg");
    image.src=url;
    var idx = parseInt(url.slice(-8,-4));
    console.log(idx);
    document.getElementById('SelectTime').selectedIndex=idx; 
}

