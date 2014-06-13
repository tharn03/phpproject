<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $month=$_POST['month'];
    $year=$_POST['year'];
    $corp=$_POST['corp'];
    $report=$_POST['report'];
    $ytoday=date("Y");
    
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
            $result1 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_1 = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_2 = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_3 = mysql_num_rows($result3);

            $result4 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_4 = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_5 = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_6 = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_7 = mysql_num_rows($result7);
            
            $result8 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_8 = mysql_num_rows($result8);
            
            $result9 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_9 = mysql_num_rows($result9);
            
            $result10 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_10 = mysql_num_rows($result10);
            
            $result11 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_11 = mysql_num_rows($result11);
            
            $result12 = mysql_query("SELECT * FROM person_info WHERE YEAR(date)='$year'");
            $count_12 = mysql_num_rows($result12);
        }
        else{
            $result1 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_1 = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_2 = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_3 = mysql_num_rows($result3);

            $result4 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_4 = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_5 = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_6 = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_7 = mysql_num_rows($result7);
            
            $result8 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_8 = mysql_num_rows($result8);
            
            $result9 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_9 = mysql_num_rows($result9);
            
            $result10 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_10 = mysql_num_rows($result10);
            
            $result11 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_11 = mysql_num_rows($result11);
            
            $result12 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND YEAR(date)='$year'");
            $count_12 = mysql_num_rows($result12);
        }
    }

    mysql_close();
?>