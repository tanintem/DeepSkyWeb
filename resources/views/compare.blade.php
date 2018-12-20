<!doctype html>
<html>
    <head>
        <script src="js/homescript.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/mainStyle.css" type="text/css">
    </head>
    <body onload="myInit()>
                
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color:#87CEEB;">
        <li class="breadcrumb-item"><a href="Home">Home</a></li>
        <li class="breadcrumb-item"><a style="color:black" href="RealTime0"><a>Real Time Image and Prediction</a></li>    </ol>
    </nav>

    <br>
    <br>

    <div class='display '>

        <div class="row ">

            <div class="col-sm sub-content" >
                <div class="form-group container ">
                    <label for="SelectTime" >Time select</label>
                    <select class="form-control " id="SelectTime" onchange="SelectDuo()" >
                        @foreach($dropdown as $option)
                        <option value= {{$option->combine}} > {{$option->str}} </option>
                        @endforeach
                    </select>

                    <br><br>

                    <label for="PredictLength" >Prediction Length</label>
                    <select class="form-control " id="PredictLength" onchange="select_predict_ength()" >
                        <option value="" > compare result </option>
                        <option value="">next 1 hour</option>
                    </select>
                    
                   <br><br><br>

                    <div class="row">
                        <div class='col'>
                            <button onclick="prev_duo()" class="sm-btn-next btn btn-secondary btn-lg btn-block"><</button>
                        </div>
                        <div class ='col'>
                        <button onclick="next_duo();" class="sm-btn-next btn btn-secondary btn-lg btn-block">></button>
                        </div>
                    </div>


                </div>
            </div>

            <div class = "col-md5 sub-content" >
                    <div class="row">
                        <div class="col-md  ">
                        <h3>Real Time Image</h3><br>
                        <img id="myImg" class="img-fluid" src="{{url($dropdown[$real_time]->url)}}"width="679">
                        </div >
                        <div class="col-md  ">
                            <h3>Predicted Image</h3><br>
                            <div style="position: relative ">
                                <img id="myPred" class="img-fluid" src="{{url($dropdown[$real_time]->pred_url)}}" style="position: relative; top:0; left:0; " >
                                <img src="{{$marker}}" class="img-fluid" style="position: absolute; top:0; left:0; ">
                            </div>
                            
                        </div>
                        <div class="col-"></div>
                    </div>
                <br>
            </div>
        </div>

    </div>
    
    <script>
        document.getElementById('SelectTime').selectedIndex={{$real_time}};
        document.getElementById('PredictLength').selectedIndex={{$pred_time}};
        
    </script>

    <body>
</html> 