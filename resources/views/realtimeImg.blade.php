<!doctype html>
<html>
    <head>
        <script src="js/homescript.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/mainStyle.css" type="text/css">
    </head>
    <body>
                
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color:#87CEEB;">
        <li class="breadcrumb-item"><a style="color:black" href="RealTime">Real Time Image</a></li>
        <li class="breadcrumb-item"><a href="Prediction">Prediction</a></li>
    </ol>
    </nav>
    
    <div >
           
        <div class="form-group container">
        <label for="SelectTime" >Time select</label>
        <select class="form-control" id="SelectTime" onchange="SelectImg()" >
            @foreach($dropdown as $option)
            <option value= {{$option->url}}>{{$option->str}}</option>
            @endforeach
        </select>
        </div>

        <h3>Real Time Image</h3>

        <div class="container ">
            <div class="row  align-items-center">
                <div class="col-sm" >
                    <button onclick="prevImg()" class="btn btn-primary  btn-lg btn-block">prev</button>
                </div>
                <div>
                    <img id="myImg" class="img-fluid" alt="Responsive image" src="{{url($dropdown[0]->url)}}">
                </div>
                <div class="col-sm" >
                    <button onclick="nextImg()" class="btn btn-primary  btn-lg btn-block">next</button>
                </div>
            </div>
        </div>

    </div>
    <body>
</html> 