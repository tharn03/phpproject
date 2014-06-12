<!DOCTYPE html>
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    mysql_close();
?>
<html>
    <head>
        <title>NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/autocomplete.js"></script>
        <link rel="stylesheet" href="css/autocomplete.css"  type="text/css"/>
        
    </head>
    <body>
        <style>
             body {
                background-image:url('img/bg-login.jpg');
                background-repeat:repeat;
                background-attachment:fixed;
                }
        </style>
        <?php require_once "emmenu.html";?>
        <br><br><br>
        <div class="container" id="border">
            <div>
                <center>
                <img src="img/nylogo.gif" width="80">
                &nbsp;&nbsp;
                <img src="img/nytxt.gif" width="300">
                </center>
            </div>
            <br>
            <div class="well">
                    <legend>ผลการค้นหา พบ 3 รายการ</legend>
                    <table width='900' class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center">ลำดับ</td>
                            <td style="text-align: center">เลขที่ใบสมัคร</td>
                            <td style="text-align: center">บริษัท</td>
                            <td style="text-align: center">ตำแหน่ง</td>
                            <td style="text-align: center">ชื่อ-สกุล</td>
                            <td style="text-align: center"">เลขประชาชน</td>
                            <td style="text-align: center">รายละเอียด</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>176</td>
                            <td>NY</td>
                            <td>พนักงานรักษาความปลอดภัย</td>
                            <td>ทดสอบ9</td>
                            <td>1958382608964</td>
                            <td><a href='#'>รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>175</td>
                            <td>NW</td>
                            <td>พนักงานรักษาความปลอดภัย</td>
                            <td>ทดสอบ8</td>
                            <td>1958382608964</td>
                            <td><a href='#'>รายละเอียด</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>174</td>
                            <td>NY</td>
                            <td>พนักงานรักษาความปลอดภัย</td>
                            <td>ทดสอบ7</td>
                            <td>1958382608964</td>
                            <td><a href='#'>รายละเอียด</a></td>
                        </tr>
                        
                     </table>
            </div>
        </div>