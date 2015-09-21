<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>OLX | Apps</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
            <script src="/js/vendor/html5shiv.min.js"></script>
        <![endif]-->

        <script src="js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js"></script>
    </head>
    <body>
        <main class="container left-container">
            <div class="row">

                <?php include '_menu.php'; ?>

                <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-sidebar.jpg">

                    <span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                            <h1>OLX</h1>
                            <p>A set of features for Android.</a> </p>
                        </div>
                        <div class="secondary-info">
                        </div>
                    </div>
                </section><!-- end sidebar -->

                <section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                    <div class="sub-nav">
                        <a href="#" class="select-categories">Categories</a>
                    </div>

                    <div class="home-page-categories animated fadeIn ">
                        <div class="category row">
                            <?php include '_categories.php'; ?>
                        </div>
                    </div>
                </section><!-- main content -->

            </div> <!--/row -->

        </main> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/jquery.jpanelmenu.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/fastclick.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
