<!-- Color, pic and header-->
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <link href="../css/flags.css" rel="stylesheet">

    <title>Day 3 | Golf 2016</title>

</head>
<style>
    body
    {
        background:url(../img/backgrounds/JIS_blue.png) repeat;
    }
    .cell {
        border: solid 3px lightgray;
        padding: 5px;
        vertical-align: middle;
        text-align: center;
    }
    .unstyled{
      border-top: none;
      border-left: none;
      border-right: none;
      border-bottom: none;
    }
    .col-lg-12 {
      padding-top: 50px;
    }
</style>
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
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color:white;padding-bottom:14px">
        <br>
        <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding-left:50px;">
                    <h1 class="page-header">Day 3 Schedule <small>(9:00 AM Tee Time for everybody)</small></h1>
                </div>
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
                    <div class="col-lg-12" style="text-align: center">
                      <h3>Team 1 vs Team 2</h3>
                      <div class="table-responsive">
                          <table style="width: 100%; font-size: 1.2em;" class="text-center">
                              <tr>
                                  <td class="cell">Flight #</td>
                                  <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A5"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B5"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G6"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H5" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H6"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A7"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A8"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B7"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B8"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C8"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D8"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E8" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F8" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G8"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H7" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H8"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A9"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A10"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B9"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B10"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C9"style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C10"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D9" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D10"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E9" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E10" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F9" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F10" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G9" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G10"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H9" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H10"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>
                          </table>
                      </div>
                    </div>
                    <div class="col-lg-12" style="text-align: center">
                      <h3>Team 3 vs Team 4</h3>
                      <div class="table-responsive">
                          <table style="width: 100%; font-size: 1.2em;" class="text-center">
                              <tr>
                                  <td class="cell">Flight #</td>
                                  <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A13"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B13"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G14"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H13" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H14"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A15"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A16"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B15"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B16"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C16"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D16"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E16" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F16" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G16"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H15" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H16"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A17"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A18"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B17"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B18"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C17"style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C18"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D17" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D18"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E17" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E18" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F17" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F18" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G17" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G18"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H17" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H18"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>
                          </table>
                      </div>
                    </div>
                    <div class="col-lg-12" style="text-align: center">
                      <h3>Team 5 vs Team 6</h3>
                      <div class="table-responsive">
                          <table style="width: 100%; font-size: 1.2em;" class="text-center">
                              <tr>
                                  <td class="cell">Flight #</td>
                                  <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                                  <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                  <td class="cell cell-innings"><strong>First Name</strong></td>
                                  <td class="cell cell-innings"><strong>Last Name</strong></td>
                              </tr>
                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A21"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B21"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G22"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H21" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H22"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A23"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A24"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B23"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B24"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C24"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D24"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E24" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F24" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G24"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H23" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H24"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>

                              <tr>
                                  <td class="cell cell-image">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="A25"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="A26"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="B25"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="B26"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="C25"style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="C26"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="D25" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="D26"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="E25" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="E26" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="F25" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="F26" ></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings">
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="G25" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="G26"></td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td class="cell cell-innings" >
                                    <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                      <tr>
                                        <td class="cell unstyled" id="H25" style="border-bottom: 1px dashed;"></td>
                                      </tr>
                                      <tr>
                                        <td class="cell unstyled" id="H26"></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>
                          </table>
                      </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Girls">
                  <div class="col-lg-12" style="text-align: center">
                    <h3>Team 1 vs Team 2</h3>
                    <div class="table-responsive">
                        <table style="width: 100%; font-size: 1.2em;" class="text-center">
                            <tr>
                                <td class="cell">Flight #</td>
                                <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                            </tr>
                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A31"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A31"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B31"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G32"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H31" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H32"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A33"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A34"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B33"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B34"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C34"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D34"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E34" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F34" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G34"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H33" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H34"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A35"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A36"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="35"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B36"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C35"style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C36"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D35" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D36"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E35" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E36" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F35" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F36" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G35" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G36"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H35" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H36"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                  </div>
                  <div class="col-lg-12" style="text-align: center">
                    <h3>Team 3 vs Team 4</h3>
                    <div class="table-responsive">
                        <table style="width: 100%; font-size: 1.2em;" class="text-center">
                            <tr>
                                <td class="cell">Flight #</td>
                                <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                            </tr>
                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A39"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B39"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G40"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H39" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H40"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A41"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A42"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B41"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B42"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C42"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D42"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E42" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F42" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G42"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H41" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H42"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A43"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A44"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B43"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B44"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C43"style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C44"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D43" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D44"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E43" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E44" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F43" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F44" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G43" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G44"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H43" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H44"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                  </div>
                  <div class="col-lg-12" style="text-align: center">
                    <h3>Team 5 vs Team 6</h3>
                    <div class="table-responsive">
                        <table style="width: 100%; font-size: 1.2em;" class="text-center">
                            <tr>
                                <td class="cell">Flight #</td>
                                <td class="cell cell-innings"><strong>Starting Hole #</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 1</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                                <td class="cell cell-innings"><strong>Golfer 2</strong></td>
                                <td class="cell cell-innings"><strong>First Name</strong></td>
                                <td class="cell cell-innings"><strong>Last Name</strong></td>
                            </tr>
                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A47"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B47"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive"style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G48"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H47" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H48"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A49"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A50"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B49"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B50"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C50"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D50"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E50" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F50" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G50"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H49" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H50"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="cell cell-image">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="A51"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="A51"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="B51"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="B52"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="C51"style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="C52"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="D51" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="D52"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="E51" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="E52" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="F51" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="F52" ></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings">
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="G51" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="G52"></td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="cell cell-innings" >
                                  <table class="table-responsive" style="width: 100%; font-size: 1.2em;" class="text-center">
                                    <tr>
                                      <td class="cell unstyled" id="H51" style="border-bottom: 1px dashed;"></td>
                                    </tr>
                                    <tr>
                                      <td class="cell unstyled" id="H52"></td>
                                    </tr>
                                  </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    <script src="https://spreadsheets.google.com/feeds/cells/1WbKtxXi113DeKitBPMaIVcwwBZRRIUAmiPMHZ5fPSxw/3/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>
    <?php include '../includes/footer.html' ?>

</body>
</html>
