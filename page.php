<?php
include '_matrix.php';
$id = intval($_GET['id']);
if ($id >= count($items)) header('location: index.php');
$item = $items[$id];

?>
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
        <header class="hero-image" role="banner" style="background-image: url(img/default-about.jpg);">

            <span class="menu-trigger animated fadeInDown">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>
            <?php include '_menu.php'; ?>
        </header>

        <main class="container">
            <div class="row">
                <div class="col-xs-12 single-content">


                    <span>&raquo; <a href="index.php">Home</a> &raquo; <a href="category.php?id=<?php echo $item['category']; ?>"><?php echo ucfirst($item['category']); ?></a></span>
                    <h1><?php echo $item['title'] ?></h1>

                    <p class="subtitle"><?php echo $item['subtitle'] ?></p>

                    <p>source: <a target="_blank" href="<?php echo $item['link']; ?>"><?php echo $item['link']; ?></a></p>

                    <p align="center"><img src="demos/<?php echo $item['image']; ?>"></p>


                </div><!-- main-content/col -->
            </div> <!--/row -->

        </main> <!-- /container -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/jquery.jpanelmenu.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/fastclick.min.js"></script>


        <script src="js/main.js"></script>
    </body>
</html>
