<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">

        <title>Qrim - @yield('title')</title>
    </head>
    <body style="background:#99ff99">
        
        <nav id="nav" class="navbar-fixed-top navbar-inverse" style="opacity:0.9;">
            <div class="container-fluid row">
                <div class="navbar-header col-sm-2 col-xs-2 col-md-2 col-lg-2">
                    <a class="navbar-brand" href="#">Qrim</a>
                </div>
                <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6"></div>
                <div class=" col-sm-4 col-xs-4 col-md-4 col-lg-4">
                    <ul class="nav navbar-nav navbar-right row">
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                        <li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div style="padding-top:50px; padding-bottom:50px">
            @yield('content')
        </div>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/jquery/jquery.js"></script>
    </body>
</html>