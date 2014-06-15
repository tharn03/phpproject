<?php

    header("Content-type:text/html; charset=UTF-8"); 
    header("Cache-Control: no-store, no-cache, must-revalidate"); 
    header("Cache-Control: post-check=0, pre-check=0", false); 

    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    $idperson_info = $_POST['idperson_info'];
    
    //Update into person_info

    mysql_query("UPDATE person_info SET "
            . "position1='".mysql_real_escape_string(unmq($_POST['position1']))."'"
            . ",position2='".mysql_real_escape_string(unmq($_POST['position2']))."'"
            . ",prefixth='".mysql_real_escape_string(unmq($_POST['prefixth']))."'"
            . ",prefix_thbox='".mysql_real_escape_string(unmq($_POST['prefix_thbox']))."'"
            . ",fname='".mysql_real_escape_string(unmq($_POST['fname']))."'"
            . ",lname='".mysql_real_escape_string(unmq($_POST['lname']))."'"
            . ",nname='".mysql_real_escape_string(unmq($_POST['nname']))."'"
            . ",prefixen='".mysql_real_escape_string(unmq($_POST['prefixen']))."'"
            . ",prefix_enbox='".mysql_real_escape_string(unmq($_POST['prefix_enbox']))."'"
            . ",fname_en='".mysql_real_escape_string(unmq($_POST['fname_en']))."'"
            . ",lname_en='".mysql_real_escape_string(unmq($_POST['lname_en']))."'"
            . ",nname_en='".mysql_real_escape_string(unmq($_POST['nname_en']))."'"
            . ",sex='".mysql_real_escape_string(unmq($_POST['sex']))."'"
            . ",age='".mysql_real_escape_string(unmq($_POST['age']))."'"
            . ",bdate='".mysql_real_escape_string(unmq($_POST['bdate']))."'"
            . ",person_b_place='".mysql_real_escape_string(unmq($_POST['show_arti_topic']))."'"
            . ",weight='".mysql_real_escape_string(unmq($_POST['weight']))."'"
            . ",height='".mysql_real_escape_string(unmq($_POST['height']))."'"
            . ",blood='".mysql_real_escape_string(unmq($_POST['blood']))."'"
            . ",religion='".mysql_real_escape_string(unmq($_POST['religion']))."'"
            . ",national='".mysql_real_escape_string(unmq($_POST['national']))."'"
            . ",nationality='".mysql_real_escape_string(unmq($_POST['nationality']))."'"
            . ",status='".mysql_real_escape_string(unmq($_POST['status']))."'"
            . ",email='".mysql_real_escape_string(unmq($_POST['email']))."'"
            . ",sold_st='".mysql_real_escape_string(unmq($_POST['sold_st']))."'"
            . ",sold_y='".mysql_real_escape_string(unmq($_POST['sold_y']))."'"
            . ",sold_st_txt='".mysql_real_escape_string(unmq($_POST['sold_st_txt']))."'"
            . ",disease='".mysql_real_escape_string(unmq($_POST['disease']))."'"
            . ",disease_txt='".mysql_real_escape_string(unmq($_POST['disease_txt']))."'"
            . ",med='".mysql_real_escape_string(unmq($_POST['med']))."'"
            . ",med_star='".mysql_real_escape_string(unmq($_POST['med_star']))."'"
            . ",other_prov='".mysql_real_escape_string(unmq($_POST['other_prov']))."'"
            . ",per_id='".mysql_real_escape_string(unmq($_POST['per_id']))."'"
            . ",per_id_amphur='".mysql_real_escape_string(unmq($_POST['per_id_amphur']))."'"
            . ",per_id_prov='".mysql_real_escape_string(unmq($_POST['show_arti_topic2']))."'"
            . ",per_mfd='".mysql_real_escape_string(unmq($_POST['per_mfd']))."'"
            . ",per_exp='".mysql_real_escape_string(unmq($_POST['per_exp']))."'"

            . "WHERE idperson_info='$idperson_info' ");

    
    //Update into add_info
    
    
    
    require_once 'emeditsuccess.php';
?>