<?php
$host = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "resume_info_db";
mysql_connect($host,$dbuser,$dbpassword) or die ("ติดต่อ host ไม่ได้");
mysql_select_db($dbname) or die ("ติดต่อฐานข้อมูลไม่ได้");
mysql_query("SET NAMES utf8;");
mysql_query("SET character_set_results=UTF8");
mysql_query("SET character_set_client=UTF8");
mysql_query("SET character_set_connection=UTF8");

/*$conf = array();
$conf['db'] = array();
$conf['db']['host'] = 'localhost'; // host ของนักศึกษา
$conf['db']['dbuser'] = 'root'; // username เข้าฐานข้อมูล
$conf['db']['dbpassword'] = 'dekzaa'; // password เข้าฐานข้อมูล
$conf['db']['dbname'] = "project"; // ชื่อฐานข้อมูลที่นักศึกษาตั้ง*/
?>