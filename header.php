<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <link rel="icon" href="img/SVG/5.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$description?>"/>
    <meta name="keywords" content="<?=$keywords?>"/>
    <!-- Bootstrap style-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/dropshadowboxes.css" rel="stylesheet">
    <!--gallery style-->
    <link href="gallery/blueimp-gallery.min.css" rel="stylesheet">
    <link href="gallery/gallery.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span>Нова</span>-Оселя</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Главная</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Наши услуги▼</a>
                    <ul class="dropdown-menu">
                        <li><a href="work_ceiling">Натяжные потолки</a></li>
                        <li><a href="work_fasad">Утепление фасада</a></li>
                        <li><a href="work_repair">Ремонт</a></li>
                        <li><a href="work_design">Дизайн интерьера</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Фотогалерея▼</a>
                    <ul class="dropdown-menu">
                        <li><a href="gallery_ceiling">Натяжные потолки</a></li>
                        <li><a href="gallery_fasad">Утепление фасада</a></li>
                        <li><a href="gallery_design">Дизайн интерьера</a></li>
                    </ul>
                </li>
                <li><a href="article.php">Статьи</a></li>
                <li><a href="contact">О нас</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>