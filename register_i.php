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
                ,add2_num,add2_moo,add2_soi,add2_road,add2_tumbon,add2_amphur,add2_prov,add2_post,add2_tel,add2_mobi,person_info_idperson_info) VALUES (
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
                   }
              }
    
    //Insert into work_info #1
          
          foreach($_POST['work_name'] AS $i => $text1) {
               if($_POST['work_name'][$i]==""){
                   break;
               }
               else{
                    mysql_query("INSERT INTO work_info (work_name,work_start,work_stop,work_position,work_class,work_cause,work_salary
                        ,work_contact,work_tel,work_star,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['work_name'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_start'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_stop'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_position'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_class'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_cause'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_salary'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_contact'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_tel'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_star'][$i]))."'
                        ,'$idperson_info'
                        )
                        ");
               }
          }
          
    //Insert into work_info #2
          
          mysql_query("INSERT INTO work_info (work2_txt,work2_position,work2_name,work2_salary,work2_contact,work2_star
              ,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['work2_txt']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work2_position']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work2_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work2_salary']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work2_contact']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work2_star']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into work_info #3
          
          mysql_query("INSERT INTO work_info (work3_name,work3_start,work3_stop,work3_position,work3_class,work3_cause,work3_salary
                        ,work3_contact,work3_tel,work3_star,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['work3_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_start']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_stop']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_position']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_class']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_cause']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_salary']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_contact']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_tel']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work3_star']))."'
                        ,'$idperson_info'
                        )
                        ");

    //,'".mysql_real_escape_string(unmq($_POST['date']))."'
    mysql_close();
    ?>