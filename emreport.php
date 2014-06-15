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
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $month=$_POST['month'];
    $year=$_POST['year'];
    $corp=$_POST['corp'];
    $report=$_POST['report'];
    $yearbu=$year+'543';
    
    if($report=='1'){
        if($corp=='ALL'){
            $result1 = mysql_query("SELECT * FROM person_info WHERE corp like '%NY%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE corp like '%TC%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE corp like '%WW%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result3);

            $result4 = mysql_query("SELECT * FROM person_info WHERE corp like '%MTA%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE corp like '%MTI%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE corp like '%NW%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE corp like '%MSD%' AND MONTH(date)='$month' AND YEAR(date)='$year'");
            $count[] = mysql_num_rows($result7);
            
            require_once 'emreport_m.php';
        }
        else{
            header("location:emreport_error.php");
        }
        
    }
    else{
        if($corp=='ALL'){
            $result1 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='01'");
            $count[] = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='02'");
            $count[] = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='03'");
            $count[] = mysql_num_rows($result3);

            $result4 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='04'");
            $count[] = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='05'");
            $count[] = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='06'");
            $count[] = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='07'");
            $count[] = mysql_num_rows($result7);
            
            $result8 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='08'");
            $count[] = mysql_num_rows($result8);
            
            $result9 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='09'");
            $count[] = mysql_num_rows($result9);
            
            $result10 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='10'");
            $count[] = mysql_num_rows($result10);
            
            $result11 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='11'");
            $count[] = mysql_num_rows($result11);
            
            $result12 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year' AND MONTH(date)='12'");
            $count[] = mysql_num_rows($result12);
            
            require_once 'emreport_y.php';
        }
        else{
            $result1 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='01'");
            $count[] = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='02'");
            $count[] = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='03'");
            $count[] = mysql_num_rows($result3);

            $result4 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='04'");
            $count[] = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='05'");
            $count[] = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='06'");
            $count[] = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='07'");
            $count[] = mysql_num_rows($result7);
            
            $result8 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='08'");
            $count[] = mysql_num_rows($result8);
            
            $result9 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='09'");
            $count[] = mysql_num_rows($result9);
            
            $result10 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='10'");
            $count[] = mysql_num_rows($result10);
            
            $result11 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='11'");
            $count[] = mysql_num_rows($result11);
            
            $result12 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year' AND MONTH(date)='12'");
            $count[] = mysql_num_rows($result12);
            
            require_once 'emreport_y.php';
        }
    }

    mysql_close();
?>