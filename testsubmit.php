<?php

    header("Content-type:text/html; charset=UTF-8"); 
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: post-check=0, pre-check=0", false); 

    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    echo $_POST['show_arti_topic'].'<br>';
    echo $_POST['h_arti_id'].'<br>';
    echo $_POST['date'].'<br>';
    mysql_query("INSERT INTO test (date) VALUES '".mysql_real_escape_string(unmq($_POST['date']))."'");
    
    foreach($_POST['text1'] AS $i => $text1) {
               if($_POST['text1'][$i]==""){
                   echo "+++END FOREACH+++";
                   break;
               }
               else{
                    mysql_query("INSERT INTO test (text1,text2,text3,SEC_ID,date) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['text1'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['text2'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['text3'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['sec']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['date']))."'
                        )
                        ");
                    echo "value of text1[$i]=".$_POST['text1'][$i];
                    echo " value of text2[$i]=".$_POST['text2'][$i];
                    echo " value of text3[$i]=".$_POST['text3'][$i]."<br><br>";
                    echo 'Line'.' Insert To DB Done!!!';
               }
          }
    
    

?>