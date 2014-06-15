<?php
    session_start(); //ฟังก์ชั่นเริ่มใช้งาน session
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $sqlquery = mysql_query("SELECT * FROM member WHERE UserID = '".$_SESSION['userid']."'");
    $user = mysql_fetch_assoc($sqlquery);
    
    if(!$user){
        header("location:emlogin.php");
    }
    else{
        header("location:emhome.php");
    }
    mysql_close();
?>
