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
    <?php require_once "emmenu.html";?>
    <?php 
            if($month=='01'){
                $monthname='มกราคม';
            }
            else if($month=='02'){
                $monthname='กุมภาพันธ์';
            }
            else if($month=='03'){
                $monthname='มีนาคม';
            }
            else if($month=='04'){
                $monthname='เมษายน';
            }
            else if($month=='05'){
                $monthname='พฤษภาคม';
            }
            else if($month=='06'){
                $monthname='มิถุนายน';
            }
            else if($month=='07'){
                $monthname='กรกฎาคม';
            }
            else if($month=='08'){
                $monthname='สิงหาคม';
            }
            else if($month=='09'){
                $monthname='กันยายน';
            }
            else if($month=='10'){
                $monthname='ตุลาคม';
            }
            else if($month=='11'){
                $monthname='พฤศจิกายน';
            }
            else if($month=='12'){
                $monthname='ธันวาคม';
            }
            
        ?>
        <div class="centerdiv">
            <div class="row">
                <div id="loginbox">
                        <center>
                            <h3>รายงานประจำเดือน <?php echo $monthname;?> </h3>
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
                        text: 'ตารางเปรียบเทียบจำนวนผู้สมัครงานรายเดือน'
                    },
                    subtitle: {
                        text: 'ของ บริษัท นิยมพานิช จำกัด และบริษัทในเครือ'
                    },
                    xAxis: {
                        categories: [
                            'นิยมพานิช',
                            'โตโยต้าเชียงใหม่',
                            'วินเวฟ',
                            'แมทริกซ์ ออโตโมบิล',
                            'แมทริกซ์ อินเตอร์เนชั่นแนล',
                            'นอร์ทเวฟ',
                            'มิตรสินด่วน'

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
                        data: [count[0],count[1],count[2],count[3],count[4],count[5],count[6]]

                    },]
                });
            });
    

        </script>
    </body>
</html>

