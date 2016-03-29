<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'includes/head.html' ?>
    <meta property="og:url" content="http://iasas.jisedu.or.id/softball/index.php">

    <title>IASAS Golf 2016</title>

</head>

<body>

    <?php include 'includes/nav.html' ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/front-fountain.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-fountain.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-fountain.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-fountain.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">

            <div class="col-md-12">
                <img class="img-responsive" src="/golf/img/golfLogo.JPG"/>
            </div>
        </div>
        <!-- /.row -->

    <?php include 'includes/footer.html' ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
