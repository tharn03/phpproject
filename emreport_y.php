<!DOCTYPE html>
<html>
    <head>
        <title>eRecruitment System - NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { background: url(img/bg-login.jpg); }
            .container { background: transparent; }
            #loginbox {
                width:700px;
                padding:10px;
                border:5px solid white;
                margin:30px auto 0 auto;
                border-radius:15px;
                background: white;
                box-shadow: 0px 0px 15px #888888;
            }
            .centerdiv
            {
                width:700px;
                height:50px;
                padding:10px;
                margin:30px auto 0 auto;
            }
        </style>
    </head>
    <body>
    <?php require_once "emmenu.php";?>
    <?php 
        if($corp=='ALL'){
            $corpname='ทุกบริษัทในเครือ';
        }
        else if($corp=='NY'){
            $corpname='บริษัท นิยมพานิช จำกัด';
        }
        else if($corp=='TC'){
            $corpname='บริษัท โตโยต้าเชียงใหม่ จำกัด';
        }
        else if($corp=='WW'){
            $corpname='บริษัท วินเวฟ จำกัด';
        }
        else if($corp=='MTA'){
            $corpname='บริษัท แมทริกซ์ ฮอนด้า ออโตโมบิล จำกัด';
        }
        else if($corp=='MTI'){
            $corpname='บริษัท แมทริกซ์ ฮอนด้า อินเตอร์เนชั่นแนล จำกัด';
        }
        else if($corp=='NW'){
            $corpname='บริษัท นอร์ทเวฟ จำกัด';
        }
        else if($corp=='MSD'){
            $corpname='บริษัท มิตรสินด่วน จำกัด';
        }
        
    ?>
        <div class="centerdiv">
            <div class="row">
                <div id="loginbox">
                        <center>
                            <h3>รายงานประจำปี <?php echo $yearbu;?> ของ <?php echo $corpname;?> </h3>
                            <br>
                            <div id="container" style="min-width: 500px; height: 450px; margin: 0 auto"></div>
                        </center>
                 </div>
            </div>
        </div>

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/highcharts.js"></script>
        <script src="js/modules/exporting.js"></script>
        <script language="javascript" type="text/javascript">
            var count = new Array(<?php echo implode(", ", $count);?>);
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'ตารางเปรียบเทียบจำนวนผู้สมัครงานรายปี'
                    },
                    subtitle: {
                        text: 'ของ บริษัท นิยมพานิช จำกัด และบริษัทในเครือ'
                    },
                    xAxis: {
                        categories: [
                            'มกราคม',
                            'กุมภาพันธ์',
                            'มีนาคม',
                            'เมษายน',
                            'พฤษภาคม',
                            'มิถุนายน',
                            'กรกฎาคม',
                            'สิงหาคม',
                            'กันยายน',
                            'ตุลาคม',
                            'พฤศจิกายน',
                            'ธันวาคม'

                        ]
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'จำนวนผู้สมัครงาน (คน)'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} คน</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'ผู้สมัครงาน',
                        data: [count[0],count[1],count[2],count[3],count[4],count[5],count[6],count[7],count[8],count[9],count[10],count[11]]

                    },]
                });
            });
    

        </script>
    </body>
</html>

