<?php

    header("Content-type:text/html; charset=UTF-8"); 
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: post-check=0, pre-check=0", false); 

    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    
    //Insert into person_info

    $perid='123';
            //$_POST['per_id'];
    echo $perid."---";
    $idperson = mysql_query("SELECT idperson_info FROM person_info WHERE per_id='$perid'");
    $idperson_info=mysql_fetch_assoc($idperson);
    echo $idperson_info['idperson_info'];
    //,'".mysql_real_escape_string(unmq($_POST['date']))."'
    mysql_close();
    
    
    ?>