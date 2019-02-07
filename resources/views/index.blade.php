<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Deep Sky</title>
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="The sky prediction." name="description" />
  <meta content="BdgPixel" name="author" />
  <!--Fav-->
  <link href="images/favicon-3.ico" rel="shortcut icon" />
  <!--styles-->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/meta-style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/modal.css" rel="stylesheet"/>
  <!--fonts google-->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,300,500,700" rel="stylesheet" type="text/css" />
  <!--
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,300,500,700" rel="stylesheet" type="text/css" />
  -->

  <!--fontsawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">

  <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
  <!--PRELOADER-->
  <div id="preloader">
    <div id="status">
      <!--<img alt="logo" src="images/005-cherry-blossom-2.png">-->
    </div>
  </div>
  <!--/.PRELOADER END-->

  <!--HEADER -->
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block">
          <!-- hidden spacer to center brand on mobile -->
        </span>
        <a class="navbar-brand d-none d-lg-inline-block align-text-bottom" href="#">
          <img src="images/logo-nav-01.png" class="d-inline" style="max-height: 50px" alt="logo-nav">
          <h3 class="mb-0 d-inline" style="letter-spacing: 0px;">
            Deep Sky
          </h3>
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
          <img src="images/logo-nav-02.png" style="max-height: 90px" alt="logo">
        </a>
        <div class="w-100 text-right">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
          <li class="nav-item">
            <a href="#" class="nav-link m-2 menu-item nav-active" id='Soultion' onclick="show_architecture();">Our Architecture</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link m-2 menu-item">Credits</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link m-2 menu-item">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!--/.HEADER END-->
  <!-- modal zome -->
  <div id="myModalArchitecture" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close" onclick="close_span();">&times;</span>
      <h5>Our Architecture</h5>
      <img src="images/architecture.png" alt="">
    </div>
  </div>
  <!-- end modal -->
  <!--CONTENT WRAP-->
  <div class="content-wrap">
    <!--CONTENT-->
    <div class="content">
      <!--HOME-->
      <section id="home">
        <div class="container-fluid">
          <div class="row">
            <!--PREDICTION PART-->
            <div id="predict-part" class="col-12 col-sm-8 col-md-9 col-xl-10">
              <div class="row">
                <!-- Satellite Image -->
                <div class="col-6 p-lg-5" style="height:90vh;">
                  <div class="container">
                    <div class="row pt-3 text-white d-flex align-items-end">
                      <h2 class="col-8 text-left font-weight-bold">
                        <small class="d-block d-lg-none"><i class="fas fa-satellite"></i></small>
                        <img src="images/icon-s.png" style="max-height: 40px" class="d-none d-lg-inline" alt="icon">
                        Satellite Image
                      </h2>
                      <h4 class="col-4 text-right align-text-bottom" id="CurrentTime"> 10:00 UTC </h4>
                    </div>
                    <div class="row pb-1">
                      <hr class="col-11" style="height: 1px; border: 0; border-top: 2px solid #ccc; color: #ccc;">
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <img src="storage/images/current.jpg" alt="PredictedPic" class="image-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <!--/. Satellite Image END-->
                <!-- Predicted Image -->
                <div class="col-6 p-lg-5" style="height:90vh;">
                  <div class="container">
                    <div class="row pt-3 text-white d-flex align-items-end">
                      <h2 class="col-8 text-left font-weight-bold">
                        <small class="d-block d-lg-none"><i class="fas fa-cloud"></i></small>
                        <img src="images/icon-c.png" style="max-height: 40px" class="d-none d-lg-inline" alt="icon">
                        Predicted Image
                      </h2>
                      <h4 class="col-4 text-right align-text-bottom" id="PredictTime"> 10:00 UTC </h4>
                    </div>
                    <div class="row pb-1">
                      <hr class="col-11" style="height: 1px; border: 0; border-top: 2px solid #ccc; color: #ccc;">
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <img src="storage/next-0hr/10.jpg" alt="PredictedPic" id="predictImage"class="image-fluid">
                      </div>
                    </div>
                  </div>
                </div>
                <!--/. Predicted Image END -->
              </div>
            </div>
            <!--/.PREDICTION PART END-->
            <!--CONFIGURATION PART-->
            <div id="config-part" class="col-12 col-sm-4 col-md-3 col-xl-2 gdc-3" style="height:90vh;">
              <div class="container">
                <div class="row pt-4 text-night d-flex align-items-end">
                  <h4 class="col-12 font-weight-bold">
                    <i class="far fa-clipboard"></i> Configuration panel
                  </h4>
                </div>
                <!--CONFIG CONTROL-->
                <div class="row text-left m-2 configboard">
                  <div class="col-12 p-2">
                    <form name="configControl"> 
                      <div class="form-group">
                        <label for="inputPredictLengh" class="col-sm-12 col-form-label font-weight-bold">
                          Prediction Length
                        </label>
                        <div class="row">
                          <div class="offset-sm-1 col-sm-11">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="predictLength0" name="predictLength" class="custom-control-input" value= 0
                                checked="checked">
                              <label class="custom-control-label" for="predictLength0">Next 0 hour</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="predictLength1" name="predictLength" class="custom-control-input" value=1>
                              <label class="custom-control-label" for="predictLength1">Next 1 hour</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="predictLength2" name="predictLength" class="custom-control-input" value=2>
                              <label class="custom-control-label" for="predictLength2">Next 2 hour</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="predictLength3" name="predictLength" class="custom-control-input" value=3>
                              <label class="custom-control-label" for="predictLength3">Next 3 hour</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddNextMin" class="col-sm-12 col-form-label font-weight-bold"> and in next
                        </label>
                        <div class="row">
                          <div class="offset-sm-1 col-sm-10">
                            <input type="number" id="inputAddNextMin" value="10" min="0" max="60" step="10" />
                          </div>
                        </div>
                        <div class="row">
                          <p class="col-sm-11 text-right"> Minutes </p>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <!--/.CONFIG CONTROL END-->
                <!--LINE-->
                <div class="row py-1">
                  <hr class="col-8" style="height: 1px; border: 0; border-top: 2px solid #fff; color: #fff;">
                </div>
                <!--/.LINE-->
              </div>
            </div>
            <!--/.CONFIGURATION PART END-->
          </div>
        </div>
      </section>
      <!--/.HOME END-->

      <!--FOOTER-->
      <footer class="footer">
        <div class="container">
          <span class="text-muted">DeepSky from Computer Engineering, KMUTT &copy; 2019</span>
        </div>
      </footer>
      <!--/.FOOTER END-->

      <!--/.CONTENT END-->
    </div>
    <!--/.CONTENT-WRAP END-->
  </div>


  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>-->
  <script src="js/jquery.appear.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/bootstrap-input-spinner.js"></script>
  <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <script src="js/homescript.js"></script>
  <script src="js/modal.js"></script>
  <script language="javascript" type="text/javascript">
    $("input[type='number']").inputSpinner()
    $("input.large").inputSpinner({ groupClass: "input-group-lg" })
    active_radio();
    setTime();

    window.onclick = function(event) {
      if (event.target == modal) {
        modalArchitecture.style.display = "none";
      }
    }
    </script>
</body>

</html>