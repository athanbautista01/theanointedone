<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

        <title><?php echo $title; ?></title>
        <!--<title>The Anointed One</title>-->
        <?php include("database/connect.php")?>

        <!--Custom css-->
        <link href="css/tao.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">

        <!-- Font-Awesome Fonts -->
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="fonts/mont.css" rel="stylesheet" type="text/css">
        <link href="fonts/lato.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <a class="navbar-brand" href="index"><center><img class="img-responsive" width="110px" src="images/logo.png" /></center></a>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="index">HOME</a></li>
                            <li><a href="guide">ELECTION GUIDE</a></li>
                            <li><a href="survey">SURVEY</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="candidates">CANDIDATES</a></li>
                            <li><a href="about">ABOUT US</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">RESOURCES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="tv5">TV5 DataSets</a></li>
                                    <li><a href="gov">GOVERNMENT DataSets</a></li>
                                    <li><a href="can">CANDIDATES Platforms</a></li>
                                    <li class="divider"></li>
                                    <li><a href="other">Other Resources</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <br>
