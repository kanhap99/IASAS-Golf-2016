<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'includes/head.html' ?>

    <title>Schedule | IASAS Golf 2016</title>

</head>
<style>
    body {
        background:url(img/backgrounds/JIS_blue.png) repeat;
    }
    td, th {
        text-align: center;
        padding-left:35px;
        padding-top:10px;
        padding-bottom:10px
    }
</style>
<body>

    <?php include 'includes/nav.html' ?>

    <div class="container" style="background-color: white">

      <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-left:50px;">
                  <h1 class="page-header">Schedule</h1>
              </div>
      </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12; text-center">
            <br>
            <a href="http://time.is/Jakarta" id="time_is_link" rel="nofollow" style="font-size:24px;color:black;background:rgba(0, 0, 0, 0)"><strong>Date and Time in Jakarta:</strong></a>
            <span id="Jakarta_z41c" style="font-size:24px;color:black;background:rgba(0, 0, 0, 0)"></span>
            <script src="http://widget.time.is/en.js"></script>
            <script>
                time_is_widget.init({Jakarta_z41c:{template:"<br/>DATE<br/>TIME", time_format:"12hours:minutes:seconds AMPM", date_format:"dayname, dnum monthname, year"}});
            </script>
        </div>

    </div><!-- /.container -->

    <div class="container" style="background-color: white">
      Schedule comes here
    </div>

    <?php include 'includes/footer.html' ?>

</body>
</html>
