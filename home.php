<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Travelin</title>
    <!-- <link rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://azmind.com/demo/bootstrap-footer/template-3/assets/css/style.css">
  </head>
<body>
    <!-- CSS only -->

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h4><font color="black"><b>Travelin</b></h4></font>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="text-decoration: none;" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tiket.html">Tiket</a>
      </li>
      <li class="nav-item">
        <form method="post" action="logout.php">
          <button type="submit" name="logout">Logout</button>
        </form>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="kota1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="kota2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="kota3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="jumbotron">
    <h1 align="center" class="display-3"><b>Travelin</b></h1><br>
    <p align="center" class="lead">Buy Your Online Plane Ticket In Here.</p>
    <hr class="my-4">
  </div>
  
  <div class="card" style="width: 50rem; margin: auto; border: none">
    <div class="card-body" style="float: left;">
      <img src="tiket.png" class="card-img-top" alt="...">
      <h5 class="card-title">Pembayaran Yang Mudah</h5>
      <br>
      <p class="card-text">Disini anda bisa melakukan pembayaran melalui rekening bank anda dengan meduh dan tidak ribet</p>
      <a href="#" class="card-link">Selengkapnya...</a>
    </div>
  </div>
  <br>
  <br>
  <div>
    <h2 style="margin: auto;">Partner Maskapai</h2><br>
    <table style="margin: auto;">
      <tr>
        <td><img src="airasia.png" alt=""></td>
        <td><img src="garuda.png" alt=""></td>
        <td><img src="citilink.png" alt=""></td>
        <td><img src="batik.png" alt=""></td>
        <td><img src="lionair.png" alt=""></td>
        <td><img src="nippon.png" alt=""></td>
      </tr>
    </table>
  </div>
  <br>
  <br>
  <br>
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
            <p>
              Ini Hanyalah Sebuah Tugas Akhir Mata Pelajaran PKK
            </p>
                </div>
          <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
            <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i>Jl. Binor 7 No 1</p>
                <p><i class="fas fa-phone"></i>082333497006</p>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:ilhamfatur46@gmail.com">ilhamfatur46@gmail.com</a></p>
                </div>
                <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                  <h3>Follow Me</h3>
                  <p>
                    <a href="#"><i class="fab fa-facebook"></i></a> 
          <a href="#"><i class="fab fa-twitter"></i></a> 
          <a href="#"><i class="fab fa-google-plus-g"></i></a> 
          <a href="#"><i class="fab fa-instagram"></i></a> 
          <a href="#"><i class="fab fa-pinterest"></i></a>
                  </p>
                </div>
          </div>
      </div>
    </div>
  </footer>

</body>
</html>