<!-- Color, pic and header-->
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <link href="../css/flags.css" rel="stylesheet">

    <title>Day 2 | Golf 2016</title>

</head>
<style>
    body
    {
        background:url(../img/backgrounds/JIS_blue.png) repeat;
    }
    .cell {
        width: 10%;
        border: solid 2px lightgray;
        padding: 1px;
        font-size: 1em;
        text-align: center;
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
                    <h1 class="page-header">Day 2 Schedule <small>(9:00 AM Tee Time for everybody)</small></h1>
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
                  <div class="col-lg-12">
                     <div class="table-responsive" id="Boys-Results">
                         <table style="width: 100%;" class="text-center">
                             <tr>
                                <td class="cell cell-totals"><strong>Flight #</strong></td>
                                <td class="cell cell-totals"><strong>Start Hole #</strong></td>
                                <td class="cell cell-totals"><strong>Golfer 1</strong></td>
                                 <td class="cell cell-totals"><strong>Golfer 2</strong></td>
                                 <td class="cell cell-totals"><strong>Golfer 3</strong></td>
                                 <td class="cell cell-totals"><strong>Golfer 4</strong></td>
                             </tr>
                             <tr>
                                 <td class="cell cell-default" id="A4"></td>
                                 <td class="cell cell-default" id="B4"></td>
                                 <td class="cell cell-default" id="C4"></td>
                                 <td class="cell cell-default" id="D4"></td>
                                 <td class="cell cell-default" id="E4"></td>
                                 <td class="cell cell-default" id="F4"></td>
                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A5"></td>
                               <td class="cell cell-default" id="B5"></td>
                               <td class="cell cell-default" id="C5"></td>
                               <td class="cell cell-default" id="D5"></td>
                               <td class="cell cell-default" id="E5"></td>
                               <td class="cell cell-default" id="F5"></td>

                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A6"></td>
                               <td class="cell cell-default" id="B6"></td>
                               <td class="cell cell-default" id="C6"></td>
                               <td class="cell cell-default" id="D6"></td>
                               <td class="cell cell-default" id="E6"></td>
                               <td class="cell cell-default" id="F6"></td>

                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A7"></td>
                               <td class="cell cell-default" id="B7"></td>
                               <td class="cell cell-default" id="C7"></td>
                               <td class="cell cell-default" id="D7"></td>
                               <td class="cell cell-default" id="E7"></td>
                               <td class="cell cell-default" id="F7"></td>

                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A8"></td>
                               <td class="cell cell-default" id="B8"></td>
                               <td class="cell cell-default" id="C8"></td>
                               <td class="cell cell-default" id="D8"></td>
                               <td class="cell cell-default" id="E8"></td>
                               <td class="cell cell-default" id="F8"></td>

                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A9"></td>
                               <td class="cell cell-default" id="B9"></td>
                               <td class="cell cell-default" id="C9"></td>
                               <td class="cell cell-default" id="D9"></td>
                               <td class="cell cell-default" id="E9"></td>
                               <td class="cell cell-default" id="F9"></td>

                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A10"></td>
                               <td class="cell cell-default" id="B10"></td>
                               <td class="cell cell-default" id="C10"></td>
                               <td class="cell cell-default" id="D10"></td>
                               <td class="cell cell-default" id="E10"></td>
                               <td class="cell cell-default" id="F10"></td>
                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A11"></td>
                               <td class="cell cell-default" id="B11"></td>
                               <td class="cell cell-default" id="C11"></td>
                               <td class="cell cell-default" id="D11"></td>
                               <td class="cell cell-default" id="E11"></td>
                               <td class="cell cell-default" id="F11"></td>
                             </tr>
                             <tr>
                               <td class="cell cell-default" id="A12"></td>
                               <td class="cell cell-default" id="B12"></td>
                               <td class="cell cell-default" id="C12"></td>
                               <td class="cell cell-default" id="D12"></td>
                               <td class="cell cell-default" id="E12"></td>
                               <td class="cell cell-default" id="F12"></td>
                             </tr>
                         </table>
                     </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="Girls">
                  <div class="col-lg-12">
                     <div class="table-responsive" id="Girls-Results">
                       <table style="width: 100%;" class="text-center">
                           <tr>
                              <td class="cell cell-totals"><strong>Flight #</strong></td>
                              <td class="cell cell-totals"><strong>Start Hole #</strong></td>
                              <td class="cell cell-totals"><strong>Golfer 1</strong></td>
                               <td class="cell cell-totals"><strong>Golfer 2</strong></td>
                               <td class="cell cell-totals"><strong>Golfer 3</strong></td>
                               <td class="cell cell-totals"><strong>Golfer 4</strong></td>
                           </tr>
                           <tr>
                               <td class="cell cell-default" id="A16"></td>
                               <td class="cell cell-default" id="B16"></td>
                               <td class="cell cell-default" id="C16"></td>
                               <td class="cell cell-default" id="D16"></td>
                               <td class="cell cell-default" id="E16"></td>
                               <td class="cell cell-default" id="F16"></td>
                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A17"></td>
                             <td class="cell cell-default" id="B17"></td>
                             <td class="cell cell-default" id="C17"></td>
                             <td class="cell cell-default" id="D17"></td>
                             <td class="cell cell-default" id="E17"></td>
                             <td class="cell cell-default" id="F17"></td>

                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A18"></td>
                             <td class="cell cell-default" id="B18"></td>
                             <td class="cell cell-default" id="C18"></td>
                             <td class="cell cell-default" id="D18"></td>
                             <td class="cell cell-default" id="E18"></td>
                             <td class="cell cell-default" id="F18"></td>

                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A19"></td>
                             <td class="cell cell-default" id="B19"></td>
                             <td class="cell cell-default" id="C19"></td>
                             <td class="cell cell-default" id="D19"></td>
                             <td class="cell cell-default" id="E19"></td>
                             <td class="cell cell-default" id="F19"></td>

                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A20"></td>
                             <td class="cell cell-default" id="B20"></td>
                             <td class="cell cell-default" id="C20"></td>
                             <td class="cell cell-default" id="D20"></td>
                             <td class="cell cell-default" id="E20"></td>
                             <td class="cell cell-default" id="F20"></td>

                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A21"></td>
                             <td class="cell cell-default" id="B21"></td>
                             <td class="cell cell-default" id="C21"></td>
                             <td class="cell cell-default" id="D21"></td>
                             <td class="cell cell-default" id="E21"></td>
                             <td class="cell cell-default" id="F21"></td>

                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A22"></td>
                             <td class="cell cell-default" id="B22"></td>
                             <td class="cell cell-default" id="C22"></td>
                             <td class="cell cell-default" id="D22"></td>
                             <td class="cell cell-default" id="E22"></td>
                             <td class="cell cell-default" id="F22"></td>
                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A23"></td>
                             <td class="cell cell-default" id="B23"></td>
                             <td class="cell cell-default" id="C23"></td>
                             <td class="cell cell-default" id="D23"></td>
                             <td class="cell cell-default" id="E23"></td>
                             <td class="cell cell-default" id="F23"></td>
                           </tr>
                           <tr>
                             <td class="cell cell-default" id="A24"></td>
                             <td class="cell cell-default" id="B24"></td>
                             <td class="cell cell-default" id="C24"></td>
                             <td class="cell cell-default" id="D24"></td>
                             <td class="cell cell-default" id="E24"></td>
                             <td class="cell cell-default" id="F24"></td>
                           </tr>
                       </table>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
    <script src="https://spreadsheets.google.com/feeds/cells/1WbKtxXi113DeKitBPMaIVcwwBZRRIUAmiPMHZ5fPSxw/2/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>

    <?php include '../includes/footer.html' ?>

</body>
</html>
