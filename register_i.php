<?php

    header("Content-type:text/html; charset=UTF-8"); 
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: post-check=0, pre-check=0", false); 

    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    
    //Insert into person_info

   mysql_query(
            "INSERT INTO person_info (corp,date,position1,position2,prefixth,prefix_thbox,fname,lname,nname,prefixen,prefix_enbox,fname_en,lname_en,nname_en,sex,age,bdate,
                person_b_place,weight,height,blood,religion,national,nationality,status,email,sold_st,sold_y,sold_st_txt,
                disease,disease_txt,med,med_star,other_prov,per_id,per_id_amphur,per_id_prov,per_mfd,per_exp) VALUES (
            '".mysql_real_escape_string(unmq($_POST['corp']))."'
            ,'".mysql_real_escape_string(unmq($_POST['rdate']))."'
            ,'".mysql_real_escape_string(unmq($_POST['position1']))."'
            ,'".mysql_real_escape_string(unmq($_POST['position2']))."'
            ,'".mysql_real_escape_string(unmq($_POST['prefixth']))."'
            ,'".mysql_real_escape_string(unmq($_POST['prefix_thbox']))."'
            ,'".mysql_real_escape_string(unmq($_POST['fname']))."'
            ,'".mysql_real_escape_string(unmq($_POST['lname']))."'
            ,'".mysql_real_escape_string(unmq($_POST['nname']))."'
            ,'".mysql_real_escape_string(unmq($_POST['prefixen']))."'
            ,'".mysql_real_escape_string(unmq($_POST['prefix_enbox']))."'
            ,'".mysql_real_escape_string(unmq($_POST['fname_en']))."'
            ,'".mysql_real_escape_string(unmq($_POST['lname_en']))."'
            ,'".mysql_real_escape_string(unmq($_POST['nname_en']))."'
            ,'".mysql_real_escape_string(unmq($_POST['sex']))."'
            ,'".mysql_real_escape_string(unmq($_POST['age']))."'
            ,'".mysql_real_escape_string(unmq($_POST['bdate']))."'
            ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic']))."'
            ,'".mysql_real_escape_string(unmq($_POST['weight']))."'
            ,'".mysql_real_escape_string(unmq($_POST['height']))."'
            ,'".mysql_real_escape_string(unmq($_POST['blood']))."'
            ,'".mysql_real_escape_string(unmq($_POST['religion']))."'
            ,'".mysql_real_escape_string(unmq($_POST['national']))."'
            ,'".mysql_real_escape_string(unmq($_POST['nationality']))."'
            ,'".mysql_real_escape_string(unmq($_POST['status']))."'
            ,'".mysql_real_escape_string(unmq($_POST['email']))."'
            ,'".mysql_real_escape_string(unmq($_POST['sold_st']))."'
            ,'".mysql_real_escape_string(unmq($_POST['sold_y']))."'
            ,'".mysql_real_escape_string(unmq($_POST['sold_st_txt']))."'
            ,'".mysql_real_escape_string(unmq($_POST['disease']))."'
            ,'".mysql_real_escape_string(unmq($_POST['disease_txt']))."'
            ,'".mysql_real_escape_string(unmq($_POST['med']))."'
            ,'".mysql_real_escape_string(unmq($_POST['med_star']))."'
            ,'".mysql_real_escape_string(unmq($_POST['other_prov']))."'
            ,'".mysql_real_escape_string(unmq($_POST['per_id']))."'
            ,'".mysql_real_escape_string(unmq($_POST['per_id_amphur']))."'
            ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic2']))."'
            ,'".mysql_real_escape_string(unmq($_POST['per_mfd']))."'
            ,'".mysql_real_escape_string(unmq($_POST['per_exp']))."'
            
            )
            ");
    
    $perid=$_POST['per_id'];
    echo $perid."---";
    $idperson = mysql_query("SELECT idperson_info FROM person_info WHERE per_id='$perid'");
    $idperson_ar=mysql_fetch_assoc($idperson);
    $idperson_info=$idperson_ar['idperson_info'];
    echo $idperson_info;
    
    //Insert into add_info

    mysql_query(
            "INSERT INTO add_info (add_num,add_moo,add_soi,add_road,add_tumbon,add_amphur,add_prov,add_post,add_tel,add_mobi
                ,add_copy,add2_num,add2_moo,add2_soi,add2_road,add2_tumbon,add2_amphur,add2_prov,add2_post,add2_tel,add2_mobi,person_info_idperson_info) VALUES (
            '".mysql_real_escape_string(unmq($_POST['add_num']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_moo']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_soi']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_road']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_tumbon']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_amphur']))."'
            ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic3']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_post']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_tel']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_mobi']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add_copy']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_num']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_moo']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_soi']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_road']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_tumbon']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_amphur']))."'
            ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic4']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_post']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_tel']))."'
            ,'".mysql_real_escape_string(unmq($_POST['add2_mobi']))."'
            ,'$idperson_info'
            )
            ");
    
    //Insert into edu_info
    
    foreach($_POST['edu_num'] AS $i => $text1) {
               if($_POST['edu_num'][$i]==""){
                   echo "+++END FOREACH+++";
                   break;
               }
               else{
                    mysql_query("INSERT INTO edu_info (edu_num,edu_eb,edu_name,edu_year,edu_gpa,edu_fac,edu_maj,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['edu_num'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_eb'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_name'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_year'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_gpa'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_fac'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['edu_maj'][$i]))."'
                        ,'$idperson_info'
                        )
                        ");
                    echo "value of edu_num[$i]=".$_POST['edu_num'][$i];
                    echo " value of edu_eb[$i]=".$_POST['edu_eb'][$i];
                    echo " value of edu_name[$i]=".$_POST['edu_name'][$i]."<br><br>";
                    echo 'Line'.' Insert To DB Done!!!';
               }
          }
    
    //Insert into work_info
    
    //,'".mysql_real_escape_string(unmq($_POST['date']))."'
    mysql_close();
    ?>