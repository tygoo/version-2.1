<html>
<head>
<title>3D IMAGE</title>
    <script type="text/javascript" src="js/touchdrawings.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/csstyles.css">
    <script src="js/jscolor.js"></script>

</style>
</head>
<body onload="init()">
    <nav class="navbar navbar-inverse">

      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

          <a data-toggle="tooltip" data-placement="bottom" title="ИЛГЭЭХ" href="#" id="btn" style=" margin-left: 10px; width: 100px; height: 40px; padding:10px 15px; margin-top: 15px; text-decoration: none;">
            <img src="icons/send1.png" class = "icon-text1" style="color:white; margin-top: 15px;" width="22px" height="22px"></a>

            <a data-toggle="tooltip" data-placement="bottom" title="ХАДГАЛАХ" href="#" id="save_bmp_image" style=" margin-left: -10px; width: 100px; height: 40px; padding:10px 15px; margin-top: 15px; text-decoration: none;">
            <img src="icons/correct.png" class = "icon-text1" style="color:white; margin-top: 15px;" width="22px" height="22px"></a>

            <a data-toggle="tooltip" data-placement="bottom" title="УСТГАХ" href="#" id="delete_count_value" onclick = "reset();" style=" margin-left: -10px; width: 100px; height: 40px; padding:10px 15px; margin-top: 15px; text-decoration: none;">
            <img src="icons/delete.png" class = "icon-text" style="color:white; margin-top: 15px;" width="19px" height="19px"></a>

          <a data-toggle="tooltip" data-placement="bottom" title="АРИЛГАХ" href="#" onclick="clearCanvas(canvas,ctx);" style=" margin-left: -10px; width: 100px; height: 40px; padding:10px 15px; margin-top: 15px; text-decoration: none;">
            <img src="icons/eraser.png" class = "icon-text1" style="color:white; margin-top: 15px;" width="22px" height="22px"></a>

            <a data-toggle="tooltip" data-placement="bottom" title="ТЕКСТ" href="#" style=" margin-left: -10px; width: 100px; height: 40px; padding:10px 15px; margin-top: 15px; text-decoration: none;">
                <img src="icons/Fast_text.png" class = "icon-text" style="color:white; margin-top: 15px;" width="19px" height="19px" id="Pen">
            </a>
            <a data-toggle="tooltip" data-placement="bottom" title="ЗУРАХ" href="#" style=" width: 100px; height: 40px; padding:10px 5px; margin-top: 15px; text-decoration: none;">
                <img src="icons/draw.png" class = "icon-text" style="color:white;margin-top: 15px" width="19px" height="19px" id="draw">
            </a>

            <a data-toggle="tooltip" data-placement="bottom" title="ТОХИРГОО" href="#" style=" margin-left:10px;width: 100px; height: 40px; padding:10px 5px; margin-top: 15px; text-decoration: none;">
                <img src="icons/conf.png" class = "icon-text" style="color:white;margin-top: 15px" width="19px" height="19px" onclick="openNav()">
            </a>

        </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" style = "text-align:center; margin-left: 30px;">
                    <li class="dropdowns"><a href="#">Өнгө:
                        <input class="jscolor" value="68DDB7" id = "pen_color" name="fname"></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-collapse" style="padding-top: 15px;">
                    <li style="color: #b2b2b2; font-size: 15px; margin-left: 10px; text-align:center;">

                        <form>
                      <a href="#" style="text-decoration: none; color:#b2b2b2; font-size: 15;" class="method">Хурдан арга </a> <input type="radio" name="coffee" value="1" checked> &nbsp&nbsp&nbsp
                      <a href="#" style="text-decoration: none; color:#b2b2b2; font-size: 15;" class="method">Уламжлалт арга </a> <input type="radio" name="coffee" value="0">
                    </form>
                    </li>
                </ul>
                <ul style = "text-align:center;" class="nav navbar-nav navbar-right navbar-collapse" data-toggle="tooltip" data-placement="bottom" title="ГАРАХ" onclick="logout();">
                      <li><a href="#"><img src="icons/logout.png" class = "icon-text1" style="color:white; font-size: 20px;" width="22px" height="22px" > Гарах</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="sketchpadapp" class="col-sm-12 col-xs-12 container">
        <center>
            <canvas id="sketchpad" height="400px" width="400px"> </canvas>
        </center>
    </div>


    <div id="mySidenav" class="sidenav1">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <li class="dropdown">
                <a class="dropdown-toggle" id = "text_size1" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu" id = "myList" style = "margin-left: 25px;">
                    <!--<li><input class="size" value="1" id = "draw_size" name="fname" type="number"></li>-->
                        <li id="textCanvas"><a href="#">
                            <canvas id="text1" width="160" height="50"></canvas></a>
                        </li>
                        <li id="textCanvas"><a href="#">
                            <canvas id="text2" width="160" height="50"></canvas></a>
                        </li>
                        <li id="textCanvas"><a href="#">
                            <canvas id="text3" width="160" height="50"></canvas></a>
                        </li>
                        <li id="textCanvas"><a href="#">
                            <canvas id="text4" width="160" height="50"></canvas></a>
                        </li>
                    </ul>
            </li>

        <li class="dropdown">
            <a class="dropdown-toggle" id = "sizes" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu" id = "myList" style = "margin-left: 25px;">
                <!--<li><input class="size" value="1" id = "draw_size" name="fname" type="number"></li>-->
                    <li id="drawCanvas"><a href="#">
                        <canvas id="myCanvas1" width="160" height="50"></canvas></a>
                    </li>
                    <li id="drawCanvas"><a href="#">
                        <canvas id="myCanvas2" width="160" height="50"></canvas></a>
                    </li>
                    <li id="drawCanvas"><a href="#">
                        <canvas id="myCanvas3" width="160" height="50"></canvas></a>
                    </li>
                    <li id="drawCanvas"><a href="#">
                        <canvas id="myCanvas4" width="160" height="50"></canvas></a>
                    </li>
              </ul>
        </li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" id = "draw_image" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu" id = "myList">
                            <!--<li><input class="size" value="1" id = "draw_size" name="fname" type="number"></li>-->
            <center>
            <input type="file" id="input" width="150" height="50"></center>
          </ul>
        </li>
        <center>
        <li style="color: #b3b3b3; font-size: 15px; margin-left: 10px">X тэнхлэг: <input type="number" onchange="canvas.width = document.getElementById('x-axis').value;" id = "x-axis" name="fname" value="1" style="width: 70px; margin-top:15px; color: black; text-align: center;">
        </li>

        <li style="color: #b3b3b3; font-size: 15px; margin-left: 10px">Y тэнхлэг: <input type="number" onchange="canvas.height = document.getElementById('y-axis').value;" id = "y-axis" name="fname" value="1" style="width: 70px; margin-top:15px; color: black;text-align: center;">
        </li>

        <li style="color: #b3b3b3; font-size: 15px; margin-left: 10px">Z тэнхлэг: <input type="number" id = "z-axis" name="fname" value="1" style="width: 70px; margin-top:15px; color: black;text-align: center;">
        </li>
        </center>
    </div>

</body>

 <script type="text/javascript" src="js/savings.js"></script>
<?php 
$name = $_POST['name'];
$quant = $_POST['qnt'];
$measure = $_POST['msr'];
?>
<script type="text/javascript">
    var name_ = "<?php echo $name ?>"; 
    var quantity = "<?php echo $quant ?>";
    var measure = "<?php echo $measure?>";
    if(!name_){
        alert("Та заавал ҮНДСЭН хуудасны ҮҮСГЭЛТ хэсгээр нэвтрэх ёстой!!!");
        window.location.assign("login.php");
    }
</script>
</html>
