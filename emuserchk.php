<?php 
session_start(); //ฟังก์ชั่นเริ่มใช้งาน session
require_once "config.inc.php";
require_once "nocache.inc.php";
require_once "datahelper.inc.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sqlquery=mysql_query("SELECT * FROM member WHERE (username = '$username') AND (password = '$password')");
$user = mysql_fetch_assoc($sqlquery);
$row=mysql_num_rows($sqlquery);

if($user['status']=="ADMIN")
{	
    $_SESSION["userid"] = $user['UserID'];
    $_SESSION["status"] = $user['status'];
    header("location:emhome.php");
}
else if($user['status']=="USER")
{	
    $_SESSION["userid"] = $user['UserID'];
    $_SESSION["status"] = $user['status'];
    header("location:emhome.php");
}
else
{
    header("location:index2.php");
}
?>