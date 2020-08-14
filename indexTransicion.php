<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    a {
      color: black;
    }
    .box {
      position: relative;
      width: 300px;
      height:200px;
      display: inline-block;
      /*border-radius: 8px;*/
      overflow: hidden;
      margin:15px;
      /*border: 3px solid black;*/
    }
    img {
      width: 100%;
      transition: all linear 1s;
    }
    img.hover-img {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;      
    }
    .box:hover img {
      opacity:7;
    }
    </style>
    <title>Transición Imágenes CSS</title>

  </head>
  <body style="background-color:;">
  <div style="height: 100px;">
  </div>
  <div class="text-center">
      <div class="box">
        <a href="#">
            <img src="logo/1/5.jpg" class="" alt="Responsive image" width="300px">
            <img src="logo/1/9.jpg" class="hover-img" alt="Responsive image" width="300px">
        </a>
      </div>
  </div>
  <div style="height: 500px;">
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>