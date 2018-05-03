<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 300 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 7px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 10px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 1;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #111 !important;
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
    .btn-1 {
      padding: 10px 20px;
      background-color:#ff4d4d;
      color: #fff;
      border: 1px solid #ff4d4d;
      transition: .2s;
      position: center;
  }
  .btn-1:hover, .btn-1:focus {
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">3D</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage"></a></li>
        <li><a href="#band">ҮҮСГЭЛТ</a></li>
        <li><a href="#tour">ТАЙЛБАР</a></li>
        <li><a href="#contact">ТУХАЙ</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<div id="band" class="bg-1">

  <div class="container">
    <h3 class="text-center" style="letter-spacing: 5px;">3-D ЭЛЕМЕНТАР ЗУРАГ ҮҮСГЭХ</h3>
    <p class="text-center">Хэрвээ та элементар зураг үүсгэхийг хүсвэл ЭХЛЭХ товчлуур дээр дарна уу.<br></p>
    <div class="row text-center">
      <div class="col-sm-12">
          <button class="btn-1" data-toggle="modal" data-target="#myModal">ЭХЛЭХ</button>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-tasks"></span> ТОХИРГОО</h4>
        </div>

        <div class="modal-body">

          <form role="form" method="post" action="touch.php">
            <div class="form-group">
              <label for="psw"> Файлын нэр /Англиар/</label>
              <input type="text" class="form-control" id="name" placeholder="файлын нэрээ оруулна уу?" name="name" required="Тухайн талбарыг заавал бөглөнө үү?">
            </div>
            <div class="form-group">
              <label for="usrname"> Нийт гүний тоо</label>
              <select class="form-control" name="qnt" style="text-align: center;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <!-- <input type="number" class="form-control" id="pwd" placeholder="Нийт гүний тоогоо оруулна уу?" name="qnt" value="1" style="text-align: center;"> -->
            </div>
            <div class="form-group">
              <label for="number"> Нэг элементар зургийн хэмжээ</label>
              <select class="form-control" name="msr" id="msr" style="text-align: center;">
                <option value="50">50:50</option>
                <option value="60">60:60</option>
                <option value="70">70:70</option>
                <option value="80">80:80</option>
                <option value="90">90:90</option>
                <option value="100">100:100</option>
              </select>
              <!--     
                <input type="number" class="form-control" id="msr" placeholder="Үүсэх элементар зургийн хэмжээг оруулна уу?" name="msr" required value="1" style="text-align: center;"> -->
            </div>
              <button type="submit" class="btn btn-block" >БАЙГУУЛАХ
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Цуцлах
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="icons/web1.png" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Нийлмэл дүрсэн дэлгэцийн бүтэц</h3>
        </div>      
      </div>

      <div class="item">
        <img src="icons/web2.png" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Зорилго</h3>
        </div>      
      </div>
    
      <div class="item">
        <img src="icons/web3.png" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ажиллагаа</h3>
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
<div id="tour" class="container text-center" >
  <h3 style="letter-spacing: 5px;">НИЙЛМЭЛ ДҮРСЭН ДЭЛГЭЦ ГЭЖ ЮУ ВЭ?</h3>
  <p>Нийлмэл дүрсэн дэлгэц нь 2 хэмжээст дэлгэц болон линз матрицаас бүрдэнэ. Линз матриц нь олон жижиг линзээс бүрдэх бөгөөд нэг жижиг линзийг элементар линз гэж нэрлэдэг. Нийлмэл дүрс буюу 3Х дүрсийг үүсгэхдээ линз матрицийг хэрэглэдэг. Анх санааг нь 1908 онд Gabriel Lippmann дэвшүүлсэн. Элементар линз болгон 3Х биетээс дүрс үүсгэх бөгөөд эдгээрийг элементар дүрс гэж нэрлэдэг. Линз матриц ашиглан 3Х биетээс элементар дүрс үүсгэх учраас элементар линз болгоны ард нэг элементар дүрс үүснэ. Үүссэн элементар дүрсийг 2 хэмжээст дэлгэцэнд үзүүлээд дэлгэцийн урд линз матриц тавьбал элементар дүрс болгон харгалзах элементар линзээр цуглуулагдаж 3Х дүрсийг үүсгэдэг тул нийлмэл дүрсэн дэлгэц гэж нэрлэдэг. </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Элементар зураг</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="elemental_image_rec_con1.bmp" class="person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Элементар зураг</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="elemental_image_rec_con2.bmp" class="person" alt="Elemental image" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Элементар зураг</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="elemental_image_rec_con3.bmp" class=" person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">ТУХАЙ</h3>
  <p class="text-center"><em>   Энэхүү ажлын зорилго нь Нийлмэл дүрсэн дэлгэцийн элементар зургийг үүсгэхэд зориулагдсан бөгөөд элементар зураг үүсгэх үе шатыг хялбаршуулах зорилготой. Өмнө нь элементар зургийг үүсгэхдээ Paint болон бусад программууд дээр 2 хэмжээст зургийг зурж, шаардлагатай өгөгдлүүлийг заавал боловсруулалт хийх программ дээр өөрчилөн оруулдаг байсан. Харин энэхүү веб апликейшн нь олон механик ажлыг хөнгөвчлөн бүгдийг нэг дор агуулсан.</em></p>
  <div class="row">
  <br>
  <h3 class="text-center">Хөгжүүлэлт дээр ажилласан</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">ОЮУТАН</a></li>
    <li><a data-toggle="tab" href="#menu1">БАГШ</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Т. Төгөлдөр</h2>
      <p>МУИС ХШУИС Электрон системийн автомажуулалт - 4</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Д. Номин-Эрдэнэ</h2>
      <p>МУИС ХШУИС ЭХИТэнхимийн багш, Докторант</p>
    </div>
  </div>
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>

    <!-- Wrapper for slides 
<div class="container">
	<center>
  <h2>3-D Элементар зураг үүсгэх</h2></center>
  <form class="form-horizontal" action="#" method = "post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Файлын нэр /Англиар/:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="файлын нэрээ оруулна уу?" name="name" required="Тухайн талбарыг заавал бөглөнө үү?">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="qnt">Нийт гүний тоо:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="pwd" placeholder="Нийт гүний тоогоо оруулна уу?" name="qnt" value="1">
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-2" for="">Элементар зургийн хэмжээ:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="msr" placeholder="Үүсэх элементар зургийн хэмжээг оруулна уу?" name="msr" required value="1" style="text-align: center;">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-5 col-sm-7">
        <button type="submit" style = "width: 200px" class="btn btn-success">ЭХЛЭХ</button>
      </div>
    </div>
  </form>
</div>
-->