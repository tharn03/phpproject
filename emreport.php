<!DOCTYPE html>
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $month=$_POST['month'];
    $year=$_POST['year'];
    $corp=$_POST['corp'];
    
    if($report=='1'){
        if($corp=='ALL'){
            header("location:emreport_error.php");
        }
        else{
            $result1 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%' AND MONTH(date)='$month'");
            $count_ny = mysql_num_rows($result1);

            $result2 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result2);

            $result3 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result3);

            $result1 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result1);

            $result4 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result4);

            $result5 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result5);

            $result6 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result6);

            $result7 = mysql_query("SELECT * FROM person_info WHERE corp like '%$corp%'");
            $count_ny = mysql_num_rows($result7);
        }
    }
    else{
        
    }

    
    /**/
    mysql_close();
?>