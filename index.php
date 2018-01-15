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
                    <div class="h1">Еремеев<br>Александр Вадимович</div>
                    <div class="h4">системный администратор</div>
                    <ul class="styled-list text-left">
                        <li><i class="fa fa-check"></i> Установка операционных систем Windows</li>
                        <li><i class="fa fa-check"></i> Удаление вирусов</li>
                        <li><i class="fa fa-check"></i> Чистка компьютера</li>
                    </ul>
                    <div class="first-screen__btn"><a href="#trial-classic-form" class="btn btn-lg btn-1">Оставить заявку</a></div>
                </div>
            </div>
        </div>
        <div class="back-city text-center">
            <div class="container">
                <div class="h3">мои клиенты доверяют мне</div>
                <div class="row mini-benefits">
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="h1">2</div>
                            <p>года успешной работы</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="mini-benefit__img bs-1"></div>
                            <p>без вредных привычек</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="h1">20+</div>
                            <p>установленных операционок</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="mini-benefit__img bs-2"></div>
                            <p>полный пакет документов</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="mini-benefit__img bs-3"></div>
                            <p>Комплексный подход</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-2 mini-benefit">
                        <div class="text-center">
                            <div class="mini-benefit__img bs-4"></div>
                            <p>Работа под ключ</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>  
        <div class="second-block text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="styled-block">
                            <div class="styled-block__icon sb-1"><span></span></div>
                            <div class="styled-block__title">Установка Windows XP</div>
                            <div class="styled-block__btn"><a href="#trial-classic-form" class="btn btn-lg">Выбрать</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="styled-block">
                            <div class="styled-block__icon sb-2"><span></span></div>
                            <div class="styled-block__title"> Установка Windows 7</div>
                            <div class="styled-block__btn"><a href="#trial-classic-form" class="btn btn-lg">Выбрать</a></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="styled-block">
                            <div class="styled-block__icon sb-3"><span></span></div>
                            <div class="styled-block__title">Установка Windows 10</div>
                            <div class="styled-block__btn"><a href="#trial-classic-form" class="btn btn-lg">Выбрать</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bottom-form">
            <div class="container">
               <form action="action.php" id="trial-classic-form" class="send_mail_form" method="post">
                   <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group"><label class="control-label" for="name-form">Представтесь, пожалуйста</label><input name="name" id="name-form" type="text" class="form-control"></div>
                            <div class="form-group"><label class="control-label" for="phone-form">Укажите ваш телефон</label><input name="phone" id="phone-form" type="text" class="form-control"></div>
                            <div class="form-group"><label class="control-label" for="email-form">Ваш электронный адрес</label><input name="email" id="email-form" type="text" class="form-control"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="dop-info">Укажите дополнительную информацию</label><textarea name="message" id="dop-info" cols="30" rows="10" class="form-control"></textarea></div>
                        </div>
                        <div class="col-sm-12 text-center"><button type="submit" class="btn btn-1">Связаться со мной</button></div>
                    </div>
                    <input name="flag" id="flag-form" type="hidden" class="form-control" value="1">
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