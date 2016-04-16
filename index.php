<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

        <title>The Anointed One</title>
        <?php include("database/connect.php")?>

        <!--Custom css-->
        <link href="css/tao.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">

        <!-- Font-Awesome Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="fonts/mont.css" rel="stylesheet" type="text/css">
        <link href="fonts/lato.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <a class="navbar-brand" href=""><center><img class="img-responsive" width="120px" src="images/logo.png" /></center></a>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ELECTION GUIDE</a></li>
                            <li><a href="#">SURVEY</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">CANDIDATES</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">RESOURCES <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </header>
            <br>
            <section><center>
                <h1>"HELPING PEOPLE TO CHOOSE THE NEXT LEADER"</h1>
                <img class="img-responsive img-thumbnail" src="images/home.jpg"></center>
                <br>
                <div class="col-lg-12">
                <div class="col-lg-12">
                </div>
            </section>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>