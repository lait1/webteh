<?php
if ($_POST) { 

$url = htmlspecialchars($_POST["url"]); 
$content = htmlspecialchars($_POST["content"]);

	$str = file_get_contents($url);
	preg_match_all('#<p>(.+?)'.$content.'(.+?)</p>#su', $str, $res);
	var_dump($res);
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Simple text</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="top-header">
            <div class="container">
                <div class="visible-xs pull-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                </div>
                <adress class="top-header__address pull-right"><i class="fa fa-map-marker"></i><span>г. Пермь, Улица, Дом</span></adress>
                <div class="top-header__phone dropdown pull-right">
                    <div type="button" data-toggle="dropdown"><i class="fa fa-phone"></i><span>+7(902) 832-97-27</span></div>
                    <ul class="dropdown-menu dropdown_phone">
                        <li class="text-center">+7(902) 832-97-27</li>
                    </ul>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header hidden-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/webteh">Главная</a></li>
                        <li><a href="add_post.php">Блог</a></li>
                        <li><a href="inner.html">Контакты</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div class="first-screen">
            <div class="container">
                <div class="first-screen__inner text-center">
                <?php 
                walk($res);
                function walk($el) {
				    foreach ($el as $k => $v) {
				        if (is_array($v)) {
				            walk($v);
				        } else {
				        	echo '<div class="content_block">';
				            echo '<div class="form-cjontrol">'.$v."</div></div>";
				        }

				    }
				}
						// for($i = 1; $i <= count($res); $i++) {
						// 	echo  '<div class="content_block"><div class="form-control">'.$res[$i].'</div></div>';
						// }
                     ?>
                </div>
            </div>
        </div>
       
      
        <div class="bottom-form">
            <div class="container">
               <form action="parser.php" id="trial-classic-form" class="send_mail_form" method="post">
                   <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group"><label class="control-label" for="title-form">Название сайта</label><input name="url" id="title-form" type="text" class="form-control"></div>
                             <div class="form-group"><label for="content">Что найти</label><input name="content" id="content" type="text" class="form-control"></input></div>
                        </div>
                        <div class="col-sm-12 text-center"><button type="submit" class="btn btn-1">Найти</button></div>
                    </div>
                    <input name="flag" id="flag-form" type="hidden" class="form-control" value="0">
               </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="pull-left"></div>
                <div class="pull-right"></div>
            </div>
        </footer>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="send_mail_js.js"></script>
        <script src="libs/waterwheel-carousel/jquery.waterwheelCarousel.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>