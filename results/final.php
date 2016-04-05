<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <title>Final Results | IASAS Softball 2015</title>

    <script type='text/javascript'>
        function displayContent(json) {
            var len = json.feed.entry.length;
            for (var i = 0; i<len; i++) {
                if (document.getElementById(json.feed.entry[i].title.$t) != null) {
                    document.getElementById(json.feed.entry[i].title.$t).innerHTML = json.feed.entry[i].content.$t;
                }
            }
        }
    </script>

</head>
<style>
    body {
        background:url(../img/backgrounds/JIS_blue.png) repeat;
    }
    .cell {
        border: solid 3px lightgray;
        padding: 5px;
        vertical-align: middle;
        text-align: center;
    }
    .cell-image {
        width: 15%;
    }
    .cell-total {
        width: 13%;
    }
    .cell-innings {
        width: 8%;
    }
    .img-responsive {
        margin: auto;
    }
    .header{
      font-weight: bold;
    }
</style>
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h1 class="page-header">Final Results</h1>
            </div>
        </div>
    </div><!-- /.container -->
    <div class="container" style="background:white">
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
                  <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 text-center">
                      <h3>Boys Team Final Results</h3>
                      <div class="table-responsive">
                        <table style="width: 100%;" class="text-center">
                          <tr>
                            <td class="cell" id="B4"></td>
                            <td class="cell" id="C4"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B5"></td>
                            <td class="cell" id="C5"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B6"></td>
                            <td class="cell" id="C6"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B7"></td>
                            <td class="cell" id="C7"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B8"></td>
                            <td class="cell" id="C8"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B9"></td>
                            <td class="cell" id="C9"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 text-center">
                      <h3>Boys Individual Final Results</h3>
                      <div class="table-responsive">
                        <table style="width: 100%;" class="text-center">
                          <tr>
                            <td class="cell header" id="E3"></td>
                            <td class="cell header" id="F3"></td>
                            <td class="cell header" id="G3"></td>
                            <td class="cell header" id="H3"></td>
                            <td class="cell header" id="I3"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E4"></td>
                            <td class="cell" id="F4"></td>
                            <td class="cell" id="G4"></td>
                            <td class="cell" id="H4"></td>
                            <td class="cell" id="I4"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E5"></td>
                            <td class="cell" id="F5"></td>
                            <td class="cell" id="G5"></td>
                            <td class="cell" id="H5"></td>
                            <td class="cell" id="I5"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E6"></td>
                            <td class="cell" id="F6"></td>
                            <td class="cell" id="G6"></td>
                            <td class="cell" id="H6"></td>
                            <td class="cell" id="I6"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E7"></td>
                            <td class="cell" id="F7"></td>
                            <td class="cell" id="G7"></td>
                            <td class="cell" id="H7"></td>
                            <td class="cell" id="I7"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E8"></td>
                            <td class="cell" id="F8"></td>
                            <td class="cell" id="G8"></td>
                            <td class="cell" id="H8"></td>
                            <td class="cell" id="I8"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E9"></td>
                            <td class="cell" id="F9"></td>
                            <td class="cell" id="G9"></td>
                            <td class="cell" id="H9"></td>
                            <td class="cell" id="I9"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="Girls">
                  <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 text-center">
                      <h3>Girls Team Final Results</h3>
                      <div class="table-responsive">
                        <table style="width: 100%;" class="text-center">
                          <tr>
                            <td class="cell" id="B13"></td>
                            <td class="cell" id="C13"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B14"></td>
                            <td class="cell" id="C14"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B15"></td>
                            <td class="cell" id="C15"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B16"></td>
                            <td class="cell" id="C16"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B17"></td>
                            <td class="cell" id="C17"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="B18"></td>
                            <td class="cell" id="C18"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 text-center">
                      <h3>Girls Individual Final Results</h3>
                      <div class="table-responsive">
                        <table style="width: 100%;" class="text-center">
                          <tr>
                            <td class="cell header" id="E12"></td>
                            <td class="cell header" id="F12"></td>
                            <td class="cell header" id="G12"></td>
                            <td class="cell header" id="H12"></td>
                            <td class="cell header" id="I12"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E13"></td>
                            <td class="cell" id="F13"></td>
                            <td class="cell" id="G13"></td>
                            <td class="cell" id="H13"></td>
                            <td class="cell" id="I13"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E14"></td>
                            <td class="cell" id="F14"></td>
                            <td class="cell" id="G14"></td>
                            <td class="cell" id="H14"></td>
                            <td class="cell" id="I14"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E15"></td>
                            <td class="cell" id="F15"></td>
                            <td class="cell" id="G15"></td>
                            <td class="cell" id="H15"></td>
                            <td class="cell" id="I15"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E16"></td>
                            <td class="cell" id="F16"></td>
                            <td class="cell" id="G16"></td>
                            <td class="cell" id="H16"></td>
                            <td class="cell" id="I16"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E17"></td>
                            <td class="cell" id="F17"></td>
                            <td class="cell" id="G17"></td>
                            <td class="cell" id="H17"></td>
                            <td class="cell" id="I17"></td>
                          </tr>
                          <tr>
                            <td class="cell" id="E18"></td>
                            <td class="cell" id="F18"></td>
                            <td class="cell" id="G18"></td>
                            <td class="cell" id="H18"></td>
                            <td class="cell" id="I18"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <?php include '../includes/footer.html' ?>

    <script src="https://spreadsheets.google.com/feeds/cells/1nqb4lT7lZ9ZlBJOFS9LLPsHFnlyVc3Eyy_P6LrmH7Sg/3/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>

</body>
</html>
