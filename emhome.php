<!DOCTYPE html>
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $result = mysql_query("SELECT * FROM person_info");
    $count = mysql_num_rows($result);
    
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
                    <legend>รายชื่อใบสมัครงานทั้งหมด <?php echo $count; ?> รายการ</legend>
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
                        <?php $i='1';?>
                        <?php while($searchresult = mysql_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $searchresult['idperson_info']; ?></td>
                            <td><?php echo $searchresult['corp']; ?></td>
                            <td><?php echo $searchresult['position1']; ?></td>
                            <td><?php echo $searchresult['fname']; ?>&nbsp;<?php echo $searchresult['lname']; ?></td>
                            <td><?php echo $searchresult['per_id']; ?></td>
                            <td><a href="emedit.php?id=<?php echo $searchresult['idperson_info']; ?>">รายละเอียด</a></td>
                        </tr>
                        <?php  $i++; } ?>
                     </table>
            </div>
        </div>