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
    $idperson = mysql_query("SELECT idperson_info FROM person_info WHERE per_id='$perid'");
    $idperson_ar=mysql_fetch_assoc($idperson);
    $idperson_info=$idperson_ar['idperson_info'];
    
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
     
    //Insert into app_info
          
          mysql_query("INSERT INTO app_info (twork_start,twork_stop,twork_name,twork_class,twork_cate,twork_position,twork_add
              ,twork_contact,twork_tel,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['twork_start']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_stop']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_class']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_cate']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_position']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_add']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_contact']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['twork_tel']))."'
                        ,'$idperson_info'
                        )
                        ");

    //Insert into skill_info
          
          mysql_query("INSERT INTO skill_info (exp_typ,exp_typ_thai,exp_typ_eng,exp_drive_m,exp_lic_m,exp_lic_m_num,exp_drive_c
              ,exp_lic_c,exp_lic_c_num,exp_com1,exp_com2,exp_com3,exp_off1,exp_off2,exp_off3,exp_sport1,exp_sport2,exp_sport3
              ,exp_oth1,exp_oth2,exp_oth3,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['exp_typ']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_typ_thai']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_typ_eng']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_drive_m']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lic_m']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lic_m_num']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_drive_c']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lic_c']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lic_c_num']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_com1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_com2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_com3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_off1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_off2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_off3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_sport1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_sport2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_sport3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_oth1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_oth2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_oth3']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into lang_info
          
          mysql_query("INSERT INTO lang_info (
              exp_lang_1,exp_lang_l_1,exp_lang_s_1,exp_lang_r_1,exp_lang_w_1
              ,exp_lang_2,exp_lang_l_2,exp_lang_s_2,exp_lang_r_2,exp_lang_w_2
              ,exp_lang_3,exp_lang_l_3,exp_lang_s_3,exp_lang_r_3,exp_lang_w_3
              ,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['exp_lang_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_l_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_s_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_r_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_w_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_l_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_s_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_r_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_w_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_l_3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_s_3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_r_3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['exp_lang_w_3']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into training_info
          
          foreach($_POST['trn_name'] AS $i => $text1) {
               if($_POST['trn_name'][$i]==""){
                   break;
               }
               else{
                    mysql_query("INSERT INTO training_info (trn_name,trn_h,trn_d,trn_m,trn_y,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['trn_name'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['trn_h'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['trn_d'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['trn_m'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['trn_y'][$i]))."'
                        ,'$idperson_info'
                        )
                        ");
               }
          }
          
    //Insert into couple_info
          
          mysql_query("INSERT INTO couple_info (cou_st,cou_num,cou_y,cou_salary,cou_name,cou_b,cou_add,cou_moo,cou_soi,cou_road
              ,cou_tumbon,cou_amphur,cou_prov,cou_post,cou_tel,cou_mobi,cou_work,cou_off,cou_baby_num,cou_baby,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['cou_st']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_num']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_y']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_salary']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_b']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_add']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_moo']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_soi']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_road']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_tumbon']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_amphur']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic5']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_post']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_tel']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_mobi']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_work']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_off']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_baby_num']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['cou_baby']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into fam_info
          
          mysql_query("INSERT INTO fam_info (fam_fa_name,fam_fa_st,fam_fa_age,fam_fa_work,fam_fa_add,fam_fa_tel,fam_ma_name
              ,fam_ma_st,fam_ma_age,fam_ma_work,fam_ma_add,fam_ma_tel,fam_ma_bro,fam_num,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['fam_fa_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_fa_st']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_fa_age']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_fa_work']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_fa_add']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_fa_tel']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_st']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_age']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_work']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_add']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_tel']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_ma_bro']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_num']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into fam_bro_info
          
          foreach($_POST['fam_tb_num'] AS $i => $text1) {
               if($_POST['fam_tb_num'][$i]==""){
                   break;
               }
               else{
                    mysql_query("INSERT INTO fam_bro_info (fam_tb_num,fam_tb_name,fam_tb_age,fam_tb_work
                        ,fam_tb_workadd,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['fam_tb_num'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_tb_name'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_tb_age'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_tb_work'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['fam_tb_workadd'][$i]))."'
                        ,'$idperson_info'
                        )
                        ");
               }
          }
          
    //Insert into ref_info
          
          foreach($_POST['ref_num'] AS $i => $text1) {
               if($_POST['ref_num'][$i]==""){
                   break;
               }
               else{
                    mysql_query("INSERT INTO ref_info (ref_num,ref_relation,ref_name,ref_age
                        ,ref_work,ref_tel,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['ref_num'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['ref_relation'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['ref_name'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['ref_age'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['ref_work'][$i]))."'
                        ,'".mysql_real_escape_string(unmq($_POST['ref_tel'][$i]))."'
                        ,'$idperson_info'
                        )
                        ");
               }
          }
          
    //Insert into interest_info
          
          mysql_query("INSERT INTO interest_info (start_work,branch,branch_txt,branch_send,work_oth,study,study_when
              ,study_name,study_maj,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['start_work']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['branch']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['branch_txt']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['branch_send']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['work_oth']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['study']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['study_when']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['study_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['study_maj']))."'
                        ,'$idperson_info'
                        )
                        ");
          
    //Insert into question_info
          
          mysql_query("INSERT INTO question_info (chk_1,chk_2,chk_3,chk_4,chk_5,chk_5_prov,chk_6,chk_6_name,chk_7,chk_7_name
              ,chk_7_relation,chk_7_part,chk_7_position,chk_7_tel,chk_8,chk_8_name,chk_8_relation,chk_8_add,chk_8_tel
              ,person_info_idperson_info) VALUES (
                        '".mysql_real_escape_string(unmq($_POST['chk_1']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_2']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_3']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_4']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_5']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['show_arti_topic6']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_6']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_6_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7_relation']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7_part']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7_position']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_7_tel']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_8']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_8_name']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_8_relation']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_8_add']))."'
                        ,'".mysql_real_escape_string(unmq($_POST['chk_8_tel']))."'
                        
                        ,'$idperson_info'
                        )
                        ");
          
    //,'".mysql_real_escape_string(unmq($_POST['date']))."'
    mysql_close();
    
    header("location:thank.php");
    ?>