<!doctype html>
<html>
    <head>
        <script src="js/homescript.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
                
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color:#87CEEB;">
        <li class="breadcrumb-item"><a href="RealTime">Real Time Image</a></li>
        <li class="breadcrumb-item"><a style="color:black;" href="Prediction">Prediction</a></li>
    </ol>
    </nav>
    
    <div class="container-fluid" style='background-color:antiquewhite'>
           
        <div class="form-group">
        <label for="SelectTime">Time select</label>
        <select class="form-control" id="SelectTime" onchange="SelectImg()" >z`
            @foreach($dropdown as $option)
            <option value= {{$option->url}}>{{$option->str}}</option>
            @endforeach
        </select>
        </div>

        <div class="container">
        <button onclick="prevImg()" class="btn btn-primary">prev</button>
        <img id="myImg" class="img-fluid" alt="Responsive image" src="{{url($dropdown[0]->url)}}">
        <button onclick="nextImg()" class="btn btn-primary">next</button>
        </div>

    </div>
    <body>
</html> 