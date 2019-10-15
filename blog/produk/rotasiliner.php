<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="gambar/cart.png">
  <title>ROTASI LINER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="tentangkami" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#tentangkami">ROTASI LINER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../index.html">HOME</a></li>
        <li><a href="#mengenaitim">About Team</a></li>
        <li><a href="#rotasiliner">ROTASILINER</a></li>
        <li><a href="#date">Schedules</a></li>
        <li><a href="#partnership">Partnership and Implementation</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>
      <li data-target="#myCarousel" data-slide-to="11"></li>
      <li data-target="#myCarousel" data-slide-to="12"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../../images/foto1.jpg" alt="judul1" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ROTASI LINER Team</h3>
          <p>Team discussed construction plan of ROTASI LINER</p>
        </div>
      </div>
      <div class="item">
        <img src="../../images/foto2.jpg" alt="judul2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Discussion with lecture</h3>
            <p> Dr. Rizky Tirta Adhiguna, M.Si and team discussed the implementation to society</p>
        </div>
      </div>
      <div class="item">
        <img src="../../images/foto3.jpg" alt="judul3" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Partnership</h3>
          <p> ROTASI LINER collaborated with Kantin Bangau at SMA Xaverius 1 Palembang<p>
        </div>
      </div>
      <div class="item">
        <img src="../../images/spec.jpeg" alt="judul4" width="1200" height="700">
        <div class="carousel-caption">
          <h3>ROTASI LINER Specification</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/vendor.jpg" alt="judul5" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Training</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/vendor2.jpg" alt="judul6" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Training</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/vendor3.jpeg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Training</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/siswa.jpg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Socialization</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/siswa2.jpg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Socialization</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/efi.jpeg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3> What percentage of efficiency have ?</h3>
          <p> After using ROTASI LINER </p>
        </div>
      </div>
      <div class="item">
        <img src="../../images/map.jpeg" alt="judul8" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Kantin Bangau's map</h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/kantin.jpg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3></h3>
        </div>
      </div>
      <div class="item">
        <img src="../../images/pim.jpeg" alt="judul7" width="1200" height="700">
        <div class="carousel-caption">
          <h3>My team and I represented for Sriwijaya University and South Sumatra in PIMNAS 31, Yogyakarta</h3>
          <p> Pekan Ilmiah Mahasiswa Nasional (PIMNAS) 31 is held by Ministry of Research, Technology and Higher Education
            of the Republic of Indonesia</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="mengenaitim" class="container text-center">
  <h3>About Team and ROTASI LINER</h3>
  <p><em>What is ROTASI LINER?</em></p>
  <p> ROTASI LINER is a tray robot which can deliver orders to customers,
    transactions, and take dirty dishes on one time travel.This project is worked by 5 student and a lecture from several
  faculties in Sriwijaya University. ROTASI LINER collaborated with Kantin Bangau and Sriwijaya University. It is also
 funded by Ministry of Research, Technology and Higher Education of the Republic of Indonesia. </p>
 <p><em>So, what is the special of it?</em></p>
 <p>well, it is a pioneer tray robot with multiple functions first in Indonesia. </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Dr. Rizky Tirta Adhiguna, M.Si</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="../../images/pakrizky.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Supervisor</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>David Setiawan Husin</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="../../images/david.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Technician</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Abdo Al Azer</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="../../images/abdo.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Technician</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Cynthia Caroline</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="../../images/cynthia.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Programmer</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Muhammad Galang Samudra</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="../../images/galang.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Hygiene Control</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Timotius Wira Yudha</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="../../images/wira.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p>Programmer</p>
        <p>ROTASI LINER</p>
        <p>Sriwijaya University</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="date" class="bg-1">
  <div class="container">
    <h3 class="text-center">Schedule</h3>
    <p class="text-center">In this below<br> there are several dates of implementation ROTASI LINER</p>
    <ul class="list-group">
      <li class="list-group-item">Buying equipments and components <span class="label label-success">Done!</span></li>
      <li class="list-group-item">Construction <span class="label label-success">Done!</span></li>
      <li class="list-group-item">Implementation <span class="label label-success">Done!</span></li>
      <li class="list-group-item">Implementation <span class="label label-success">Done!</span></li>
      <li class="list-group-item">August <span class="badge">1</span></li>
    </ul>

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../images/xav1.jpg" alt="xav1" width="400" height="300">
          <p><strong>Kantin Bangau</strong></p>
          <p>Everyday</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../images/unsrihall.jpg" alt="unsri" width="400" height="300">
          <p><strong>Monitoring and Evaluation</strong></p>
          <p>20 July - 21 July 2018</p>
          <p> Sriwijaya University </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../images/uny.jpg" alt="unsri" width="400" height="300">
          <p><strong>Presentation</strong></p>
          <p> August 28 2018</p>
          <p> Yogyakarta State University </p>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="rotasiliner" class="container">
<h3 class="text-center">ROTASI LINER</h3>
  <p class="text-center"><em>Watch video about ROTASI LINER's development</em></p>
      <div style="text-align:center">
  <video width="700" controls>
    <source src="../../videos/pimnas.mp4" type="video/mp4">
  </video>
    <p class="text-center"><em>Pre-Order WebApp</em></p>
    <video width="400" controls>
      <source src="../../videos/preorder.mp4" type="video/mp4">
    </video>
</div>
</div>

<!-- Container (Contact Section) -->
<div id="partnership" class="container">
  <h3 class="text-center">Contact Us</h3>
  <p class="text-center"><em>Do you want to know more about ROTASI LINER?</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Please, don't hesitate to ask us!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Palembang, South Sumatera, Indonesia</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: kantinbangau@gmail.com</p>
    </div>
  </div>
  <br>
  <h3 class="text-center">Partnership and Implementation</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Procedure</a></li>
    <li><a data-toggle="tab" href="#menu1">Pre-Order WebApp</a></li>
    <li><a data-toggle="tab" href="#menu2">How Efficiency Can be Created?</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Procedure</h2>
      <p>1. Customers need to stop ROTASI LINER using stop button</p>
      <p>2. Order and pay</p>
      <p>3. Running the robot again using blue button</p>
      <p>4. Take your order</p>
      <p>Don't forget to put your dishes back to robot :)</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Pre-Order Web App</h2>
      <p>Only students from SMA Xaverius 1 Palembang who can pre-order in Website kantinbangau.com.
      Food kiosk will prepare your orders and the food is ready!</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Efficiency</h2>
      <p> ROTASI LINER has ability to reduce time travel. </p>
        <p> Estimating Process Time </p>
      </p> Average Customers do orders : 30 s </p>
    </p> Average Customers get their orders: 56 s </p>
    </p> Average Customers put their dishes: 15 s </p>
    </div>
  </div>
</div>


<footer class="text-center">
  <a class="up-arrow" href="#tentangkami" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>ROTASI LINER | Sriwijaya Creativity Centre</a></p>
</footer>

<script>
$(document).ready(function(){

  $('[data-toggle="tooltip"]').tooltip();

  $(".navbar a, footer a[href='#tentangkami']").on('click', function(event) {


    if (this.hash !== "") {


      event.preventDefault();

      // Store hash
      var hash = this.hash;


      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){


        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
