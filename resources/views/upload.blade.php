<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-lg-offset-4 col-lg-4">
    <center><h1>Upload a File</h1></center>
    <form action="/store" enctype="multipart/form-data" method="POST">
    <!-- {{csrf_field()}} -->
        <input type="file" name="image">
        <br><br>
        <input type="submit" value="Upload">
    </form>
    </div>


</body>
</html>