<?php
    session_start(); //ฟังก์ชั่นเริ่มใช้งาน session
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    

    if($_SESSION["userid"]=="")
    {	
        header("location:index2.php");
    }
    else{
        $sqlquery = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['userid']."'");
        $user = mysql_fetch_assoc($sqlquery);
        
    }
    
?>
<!DOCTYPE html>
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $id = $_POST['id'];
    
    $result = mysql_query("SELECT * FROM person_info WHERE idperson_info like '%$id%' OR position1 like '%$id%' OR corp like '%$id%' OR position2 like '%$id%' OR fname like '%$id%' OR lname like '%$id%' OR per_id like '%$id%'");
    $count = mysql_num_rows($result);
    /**/
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
        <?php require_once "emmenu.php";?>
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
                    <legend>ผลการค้นหา พบ <?php echo $count; ?> รายการ</legend>
                    <table width='900' class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center">ลำดับ</td>
                            <td style="text-align: center">เลขที่ใบสมัคร</td>
                            <td style="text-align: center">บริษัท</td>
                            <td style="text-align: center">ตำแหน่ง</td>
                            <td style="text-align: center">ชื่อ-สกุล</td>
                            <td style="text-align: center">เลขประชาชน</td>
                            <td style="text-align: center">รายละเอียด</td>
                        </tr>
                        
                        <?php $i='1';?>
                        <?php while($searchresult = mysql_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $searchresult['idperson_info']; ?></td>
                            <td><?php echo $searchresult['corp']; ?></td>
                            <td><?php echo $searchresult['position1']; ?> , <?php echo $searchresult['position2']; ?></td>
                            <td><?php echo $searchresult['fname']; ?>&nbsp;<?php echo $searchresult['lname']; ?></td>
                            <td><?php echo $searchresult['per_id']; ?></td>
                            <td><a href="emedit.php?id=<?php echo $searchresult['idperson_info']; ?>">รายละเอียด</a></td>
                        </tr>
                        <?php  $i++; } ?>
                     </table>
            </div>
        </div>