<!-- Color, pic and header-->
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <link href="../css/flags.css" rel="stylesheet">

    <title>Team ISM | Golf 2016</title>

</head>
<style>
    body
    {
        background:url(../img/backgrounds/ISM_green.png) repeat;
    }
</style>
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color:white;padding-bottom:14px">
        <br>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <p style="text-align:center"><img src="../img/schools/school_ISM_100px.png"></p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <h1 class="page-header">International School Manila <small>Bearcats</small></h1>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#Boys" data-toggle="tab"><strong>Boys</strong></a></li>
                    <li><a href="#Girls" data-toggle="tab"><strong>Girls</strong></a></li>
                </ul>
                <br>
            </div>
        </div>

        <div class="row">

            <div class="tab-content">
                <div class="tab-pane fade in active" id="Boys">
                  <p>Boys pic and info comes here</p>
                </div>
                <div class="tab-pane fade" id="Girls">
                  <p>Boys pic and info comes here</p>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <?php include '../includes/footer.html' ?>

</body>
</html>
