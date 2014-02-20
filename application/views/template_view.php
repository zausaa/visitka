<?php
    header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation -->
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/main"><?=$project_name?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/main">Главная</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">О сайте</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Подключаем контент -->
        <?php include 'application/views/'.$content_view; ?>
    </div>
    <!-- Container-end -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <p class="copiright">© 2014 Danil Valiulin</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="../../js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>