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
    
    mysql_close();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                width:400px;
                padding:10px;
                border:5px solid white;
                margin:10px;
                border-radius:15px;
                background: white;
                box-shadow: 0px 0px 15px #888888;
            }
            .centerdiv
            {
                width:400px;
                height:200px;
                padding:10px;
                margin:150px auto 0 auto;
            }
        </style>
    </head>
    <body>
    
        <div class="centerdiv">
            <div class="row">
                <div class="span3"></div>
                <div class="span2 " id="loginbox">
                    <form class="form-horizontal" method="post" action="register-ny.php">
                        <center>
                            <h3 class="text-error"><strong>ERROR</strong></h3>
                            <br>
                            <h2>
                                กรุณาเลือกบริษัทให้ถูกต้อง
                            </h2>
                            <br><br>
                            
                            <br>
                            
                            <INPUT Type="button" VALUE="Back" class="btn" onClick="history.go(-1);return true;">
                        </center>
                      </form>
                 </div>
            </div>
        </div>
        
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
