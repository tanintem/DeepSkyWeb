<html>
    <head>
        <script src="js/homescript.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/mainStyle.css" type="text/css">
    </head>
<body background="https://images.unsplash.com/photo-1460411794035-42aac080490a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">

    <nav class="navbar navbar-light blue-nav" >    
    <div class="row" style="heigh:">

        <div class="col-">
        <img src={{$logo}}  class="img-fluid logo navbar-brand" alt="" style="padding-left:1%;">
        </div>

        <div class="col- nav-div">
            <label for="SelectTime" style="text-align:left;">Time select</label>
            <select class="form-control " id="SelectTime" onchange="SelectDuo()" >
                @foreach($dropdown as $option)
                <option value= {{$option->combine}} > {{$option->str}} </option>
                @endforeach
            </select>   
        </div>

        <div class="col- nav-div">
            <label for="PredictLength" >Prediction Length</label>
            <select class="form-control " id="PredictLength" onchange="select_predict_ength()" >
                <option value="" > compare result </option>
                <option value="">next 1 hour</option>
            </select>
        </div>
        
        <div class="col- big-nav-div" style="margin-left:5px;">
            <br>
            <div class="row">
                <div class='col'>
                    <button onclick="prev_duo()" class="sm-btn-next btn btn-secondary btn-lg btn-block white-btn"><</button>
                </div>
                <div class ='col'>
                <button onclick="next_duo();" class="sm-btn-next btn btn-secondary btn-lg btn-block white-btn">></button>
                </div>
            </div>
        </div>
    </div>

    </nav>


       
        
        <div class="col light-bg">
            <div class="row  ">
                <div class="col-md" align="center">
                <div class="fit-content">
                    <div class="row">
                        <div class="col"> <h3 style="text-align: left">Satellite Image</h3> </div>
                        <div class="col"> <h3 id='SatelliteTime' style="text-align: right;"></h3> </div>
                    </div>
                    <img id="myImg" class="img-fluid mid-img" src="{{url($dropdown[$real_time]->url)}}"width="679">
                </div>
                
                </div >
                <div class="col">
                    <div class="fit-content ">
                    <div class="row">
                        <div class="col"> <h3>Predicted Image</h3> </div>
                        <div class="col"> <h3 id='PredictionTime' style="text-align: right;"></h3></div>
                    </div>
                        <div style="position: relative; ">
                            <img id="myPred" class="img-fluid" src="{{url($dropdown[$real_time]->pred_url)}}" style="position: relative; top:0; left:0; " >
                            <img src="{{$marker}}" class="img-fluid" style="position: absolute; top:0; left:0; ">
                        </div>
                    </div>
                </div>


            </div>
        </div>
        


    <script>
        document.getElementById('SelectTime').selectedIndex={{$real_time}};
        document.getElementById('PredictLength').selectedIndex={{$pred_time}};
        showTime();
    </script>
   
</body>
</html>
