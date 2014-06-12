<!DOCTYPE html>
<?php
    require_once "config.inc.php";
    require_once "nocache.inc.php";
    require_once "datahelper.inc.php";
    
    mysql_close();
?>
<html>
    <head>
        <title>NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/autocomplete.js"></script>
        <link rel="stylesheet" href="css/autocomplete.css"  type="text/css"/>
        
    </head>
    <body>
        <style>
             body {
                background-image:url('img/bg-login.jpg');
                background-repeat:repeat;
                background-attachment:fixed;
                }
        </style>
        <?php require_once "emmenu.html";?>
        <br><br><br>
        <div class="container" id="border">
            <form id="signup" class="form-inline" method="post" action="register_i.php">
                <input type="hidden" name="corp" value="NY" >
            <div>
                <center>
                <img src="img/nylogo.gif" width="80">
                &nbsp;&nbsp;
                <img src="img/nytxt.gif" width="300">
                </center>
            </div>
            <br>
            <div class="form-inline">
                วันที่สมัคร&nbsp;<input class="input-small uneditable-input" type="text" name="rdate" value="<?php echo date('Y-m-d'); ?>"/>
                ตำแหน่ง&nbsp;1.&nbsp;<input type="text" name="position1" autofocus>
                2.&nbsp;<input type="text" name="position2">
            </div>
            <br>
            <div class="well">
                <legend>ข้อมูลส่วนตัว</legend>
                <div class="form-inline">    
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นาย" checked> นาย
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นางสาว" > นางสาว
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="นาง" > นาง
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixth" value="0" > อื่นๆ
                        </label>
                        <input type="text" name="prefix_thbox" class="input-small">&nbsp;
                        ชื่อ&nbsp;<input class="span2" type="text" name="fname" required>&nbsp;&nbsp;
                        นามสกุล&nbsp;<input class="span2" type="text" name="lname" required>&nbsp;&nbsp;
                        ชื่อเล่น&nbsp;<input class="span2" type="text" name="nname">
                    </div>
                        <br>
                    <div class="inline">
                        
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Mr." checked> Mr.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Ms." > Ms.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="Mrs." > Mrs.
                        </label>
                        <label class="radio">
                            <input type="radio" name="prefixen" value="0" > etc.
                        </label>
                        <input type="text" name="prefix_enbox" class="input-small">&nbsp;
                        Firstname&nbsp;<input class="span2" type="text" name="fname_en">&nbsp;&nbsp;
                        Lastname&nbsp;<input class="span2" type="text" name="lname_en">&nbsp;&nbsp;
                        Nickname&nbsp;<input class="input-small" type="text" name="nname_en">

                    </div>
                        <br>
                    <div class="inline">
                        
                        เพศ&nbsp;&nbsp;&nbsp;<select name="sex" class="span2">
                                                <option value="1" selected>ชาย</option>
                                                <option value="2" >หญิง</option>
                                            </select>&nbsp;&nbsp;
                        อายุ&nbsp;<input class="span1" id="prependedInput1" type="text" name="age">&nbsp;ปี&nbsp;&nbsp;
                        วัน/เดือน/ปี&nbsp;เกิด&nbsp;<input class="span2" id="prependedInput1" type="date" name="bdate" required>&nbsp;&nbsp;
                        สถานที่เกิด&nbsp;<input name="show_arti_topic" type="text" id="show_arti_topic" size="50" />
                                      <input name="h_arti_id" type="hidden" id="h_arti_id" value="" />
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        น้ำหนัก&nbsp;<input class="input-small" id="prependedInput1" type="text" name="weight">&nbsp;ก.ก.&nbsp;&nbsp;
                        ส่วนสูง&nbsp;<input class="input-small" id="prependedInput1" type="text" name="height">&nbsp;ซ.ม.&nbsp;&nbsp;
                        กรุ๊ปเลือด&nbsp;<select class="input-mini" name="blood">
                                        <option value="o">O</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="ab">AB</option>
                                    </select>&nbsp;&nbsp;
                        ศาสนา&nbsp;<input class="input-small" id="prependedInput1" type="text" name="religion" >&nbsp;&nbsp;
                        เชื้อชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="national" required>&nbsp;&nbsp;
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สัญชาติ&nbsp;<input class="input-small" id="prependedInput1" type="text" name="nationality" required>&nbsp;&nbsp;
                        สถานะ&nbsp;
                        <label class="radio">
                            <input type="radio" name="status" value="1" checked> โสด
                        </label>
                        <label class="radio">
                            <input type="radio" name="status" value="2" > สมรส
                        </label>&nbsp;&nbsp;
                        E-Mail&nbsp;<input class="input" id="prependedInput1" type="text" name="email">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        สถานะทางการทหาร
                        <label class="radio">
                            <input type="radio" name="sold_st" value="1" checked>จะถูกเกณฑ์ทหารปี พ.ศ.<input class="input-mini" type="text" name="sold_y">&nbsp;&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="sold_st" value="2" >เคยถูกเกณ์ทหาร&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="sold_st" value="3" >ได้รับการยกเว้นเพราะ&nbsp;<input class="input" type="text" name="sold_st_txt">
                        </label>
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        โรคประจำตัว
                        <label class="radio">
                            <input type="radio" name="disease" value="1" checked>ไม่มี&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="disease" value="2" >มี&nbsp;<input class="input-small" type="text" name="disease_txt">&nbsp; 
                        </label>
                        แพ้ยา&nbsp;<input class="input" type="text" name="med">&nbsp;&nbsp;
                        หมายเหตุ&nbsp;<input class="input" type="text" name="med_star">
                        
                    </div>
                        <br>
                    <div class="inline">
                        
                        ปฏิบัติงานต่างจังหวัด&nbsp;
                        <label class="radio">
                            <input type="radio" name="other_prov" value="1" checked>ได้&nbsp;
                        </label>
                        <label class="radio">
                            <input type="radio" name="other_prov" value="2" >ไม่ได้&nbsp; 
                        </label>
                        
                    </div>
                    
            </div>
            <div class="well">
                <legend>เอกสารประจำตัว</legend>
                <div class="inline">
                        
                    เลขที่บัตรประชาชน&nbsp;<input class="input" type="number" name="per_id" required>&nbsp;&nbsp; 
                        ออกให้&nbsp;ณ&nbsp;อำเภอ&nbsp;<input class="input-small" type="text" name="per_id_amphur" required>&nbsp;&nbsp;
                        จังหวัด&nbsp;<input name="show_arti_topic2" type="text" id="show_arti_topic2" class="input-medium" required/>
                                   <input name="h_arti_id2" type="hidden" id="h_arti_id2" value="" />
                        
                </div>
                <br>
                <div class="inline">
                        
                        วันที่ออกบัตร&nbsp;<input class="input" type="date" name="per_mfd" required>&nbsp;&nbsp;
                        วันที่หมดอายุ&nbsp;<input class="input" type="date" name="per_exp" required>&nbsp;&nbsp;
                        
                </div>
                
            </div>
            <div class="well">
                    <legend>ที่อยู่</legend>
                    <div class="inline">
                        
                        <strong>ที่อยู่ปัจจุบัน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="add_num">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="add_moo">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="add_soi">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="add_road">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="add_tumbon">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="add_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<input name="show_arti_topic3" type="text" id="show_arti_topic3" class="input-medium" />
                                   <input name="h_arti_id3" type="hidden" id="h_arti_id3" value="" />
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="add_post">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="add_tel">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="add_mobi">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="checkbox" value="Y" name="add_copy" onClick="cform(this.form)" id="chk"> ตามที่อยู่ปัจจุบัน
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>ที่อยู่ตามทะเบียนบ้าน</strong>&nbsp;
                        เลขที่&nbsp;<input class="input-mini" type="text" name="add2_num">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="add2_moo">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="add2_soi">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="add2_road">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="add2_tumbon">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="add2_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<input name="show_arti_topic4" type="text" id="show_arti_topic4" class="input-medium" />
                                   <input name="h_arti_id4" type="hidden" id="h_arti_id4" value="" />
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="add2_post">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="add2_tel">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="add2_mobi">&nbsp;&nbsp;
                        
                    </div>
                    <div class="inline">
                        
                        
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติการศึกษา</legend>
                    <table width='900' class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center">ลำดับ</td>
                            <td style="text-align: center">วุฒิการศึกษา</td>
                            <td style="text-align: center">สถาบันการศึกษา</td>
                            <td style="text-align: center">ปีที่จบ</td>
                            <td style="text-align: center">GPA</td>
                            <td style="text-align: center"">คณะ</td>
                            <td style="text-align: center">สาขาวิชา</td>
                        </tr>
                        <tr>
                            <td><input class="span1" type="text" name="edu_num[]"></td>
                            <td><input class="input-mini" type="text" name="edu_eb[]"></td>
                            <td><input class="input" type="text" name="edu_name[]"></td>
                            <td><input class="span1" type="year" name="edu_year[]"></td>
                            <td><input class="span1" type="text" name="edu_gpa[]"></td>
                            <td><input class="span2" type="text" name="edu_fac[]"></td>
                            <td><input class="span2" type="text" name="edu_maj[]"></td>
                        </tr>
                        <tr>
                            <td><input class="span1" type="text" name="edu_num[]"></td>
                            <td><input class="input-mini" type="text" name="edu_eb[]"></td>
                            <td><input class="input" type="text" name="edu_name[]"></td>
                            <td><input class="span1" type="text" name="edu_year[]"></td>
                            <td><input class="span1" type="text" name="edu_gpa[]"></td>
                            <td><input class="span2" type="text" name="edu_fac[]"></td>
                            <td><input class="span2" type="text" name="edu_maj[]"></td>
                        </tr>
                        <tr>
                            <td><input class="span1" type="text" name="edu_num[]"></td>
                            <td><input class="input-mini" type="text" name="edu_eb[]"></td>
                            <td><input class="input" type="text" name="edu_name[]"></td>
                            <td><input class="span1" type="text" name="edu_year[]"></td>
                            <td><input class="span1" type="text" name="edu_gpa[]"></td>
                            <td><input class="span2" type="text" name="edu_fac[]"></td>
                            <td><input class="span2" type="text" name="edu_maj[]"></td>
                        </tr>
                    </table>
            </div>
            <div class="well">
                    <legend>ประวัติการทำงาน</legend>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="work_name[]">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="work_start[]">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="work_stop[]">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="work_position[]">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="work_class[]">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="work_cause[]">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="work_salary[]">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="work_contact[]">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="work_tel[]">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="work_star[]">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="work_name[]">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="work_start[]">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="work_stop[]">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="work_position[]">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="work_class[]">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="work_cause[]">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="work_salary[]">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="work_contact[]">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="work_tel[]">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="work_star[]">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        **อาชีพอิสระ/อาชีพเสริม&nbsp;<input class="input" type="text" name="work2_txt">&nbsp;&nbsp;
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="work2_position">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="span2" type="text" name="work2_name">&nbsp;&nbsp;
                        รายได้&nbsp;<input class="input" type="text" name="work2_salary">&nbsp;&nbsp;
                        ผู้ติดต่อได้&nbsp;<input class="input" type="tel" name="work2_contact">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="work2_star">&nbsp;&nbsp;
                        
                    </div>
                    <hr>
                    <p><strong>*บริษัทในเครือของบริษัทนิยมพานิช จำกัด ประกอบด้วย สหพานิช,นิยมพานิชลำปาง,มิตรสินด่วน,วินเวฟ,ร้านตัวแทน</strong>&nbsp;<i class="icon-hand-down"></i></p>
                    <br>
                    <div class="inline">
                        
                        บริษัท&nbsp;<input class="input-large" type="text" name="work3_name">&nbsp;&nbsp;
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="work3_start">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="work3_stop">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="work3_position">&nbsp;&nbsp;
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="work3_class">&nbsp;&nbsp;
                        สาเหตุที่ออก&nbsp;<input class="input" type="text" name="work3_cause">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        เงินเดือนออกเมื่อ&nbsp;<input class="span2" type="date" name="work3_salary">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="work3_contact">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="work3_tel">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        หมายเหตุ&nbsp;<input class="input-xxlarge" type="text" name="work3_star">&nbsp;&nbsp;
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติการฝึกงาน</legend>
                    <div class="inline">
                        
                        วันที่เริ่ม&nbsp;<input class="input" type="date" name="twork_start">&nbsp;&nbsp;
                        วันที่ออก&nbsp;<input class="input" type="date" name="twork_stop">&nbsp;&nbsp;
                        บริษัท/ห้าง/ร้าน&nbsp;<input class="input-large" type="text" name="twork_name">&nbsp;&nbsp;

                    </div>
                    <br>
                    <div class="inline">
                        
                        ลักษณะงาน&nbsp;<input class="input" type="text" name="twork_class">&nbsp;&nbsp;
                        ประเภทธุรกิจ&nbsp;<input class="input" type="text" name="twork_cate">&nbsp;&nbsp;
                        ตำแหน่ง&nbsp;<input class="input" type="text" name="twork_position">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่ตั้ง&nbsp;<input class="input" type="text" name="twork_add">&nbsp;&nbsp;
                        ผู้ที่ติดต่อได้&nbsp;<input class="input" type="text" name="twork_contact">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="tel" name="twork_tel">&nbsp;&nbsp;
                        
                    </div>
            
            </div>
            <div class="well">
                    <legend>ความสามารถ</legend>
                    <div class="inline">
                        
                        <strong>พิมพ์ดีด</strong>&nbsp;
                        <label class="radio">
                            <input type="radio" name="exp_typ" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="exp_typ" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        ไทย&nbsp;<input class="span1" type="text" name="exp_typ_thai">&nbsp;คำ/นาที&nbsp;&nbsp;
                        อังกฤษ&nbsp;<input class="span1" type="text" name="exp_typ_eng">&nbsp;คำ/นาที&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>ความสามารถในการขับขี่</strong>&nbsp;
                        รถจักรยานยนต์
                        <label class="radio">
                            <input type="radio" name="exp_drive_m" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="exp_drive_m" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        ใบอนุญาติขับขี่
                        <label class="radio">
                            <input type="radio" name="exp_lic_m" value="1" checked> มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="exp_lic_m" value="2" > ไม่มี
                        </label>&nbsp;&nbsp;
                        เลขที่&nbsp;<input class="input" type="text" name="exp_lic_m_num">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;
                        รถยนต์
                        <label class="radio">
                            <input type="radio" name="exp_drive_c" value="1" checked> ได้
                        </label>
                        <label class="radio">
                            <input type="radio" name="exp_drive_c" value="2" > ไม่ได้
                        </label>&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ใบอนุญาติขับขี่
                        <label class="radio">
                            <input type="radio" name="exp_lic_c" value="1" checked> มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="exp_lic_c" value="2" > ไม่มี
                        </label>&nbsp;&nbsp;
                        เลขที่&nbsp;<input class="input" type="text" name="exp_lic_c_num">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <table>
                        <tr>
                            <td style="text-align: right" width='225'>คอมพิวเตอร์โปรแกรม&nbsp;&nbsp;&nbsp;</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="exp_com1"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="exp_com2"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="exp_com3"></td>
                        </tr>
                        <tr>
                            <td style="text-align: right" width='225'>เครื่องใช้สำนักงาน&nbsp;&nbsp;&nbsp;</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="exp_off1"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="exp_off2"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="exp_off3"></td>
                        </tr>
                        <tr>
                            <td style="text-align: right" width='225'>กีฬาที่ชอบ&nbsp;&nbsp;&nbsp;</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="exp_sport1"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="exp_sport2"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="exp_sport3"></td>
                        </tr>
                        <tr>
                            <td style="text-align: right" width='225'>อื่นๆ&nbsp;&nbsp;&nbsp;</td>
                            <td style="text-align: left" width='225'>1.&nbsp;<input class="span2" type="text" name="exp_oth1"></td>
                            <td style="text-align: left" width='225'>2.&nbsp;<input class="span2" type="text" name="exp_oth2"></td>
                            <td style="text-align: left" width='225'>3.&nbsp;<input class="span2" type="text" name="exp_oth3"></td>
                        </tr>
                    </table>
                    <hr>
                    <strong>ความสามารถทางด้านภาษา</strong>&nbsp;
                    <br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center" width='180' rowspan="2">ภาษา</td>
                            <td style="text-align: center" width='200' colspan="3">ฟัง</td>
                            <td style="text-align: center" width='200' colspan="3">พูด</td>
                            <td style="text-align: center" width='200' colspan="3">อ่าน</td>
                            <td style="text-align: center" width='200' colspan="3">เขียน</td>
                        </tr>
                        <tr class="info">
                            
                            <td style="text-align: center" width='50'>ดี</td>
                            <td style="text-align: center" width='50'>กลาง</td>
                            <td style="text-align: center" width='50'>พอใช้</td>
                            <td style="text-align: center" width='50'>ดี</td>
                            <td style="text-align: center" width='50'>กลาง</td>
                            <td style="text-align: center" width='50'>พอใช้</td>
                            <td style="text-align: center" width='50'>ดี</td>
                            <td style="text-align: center" width='50'>กลาง</td>
                            <td style="text-align: center" width='50'>พอใช้</td>
                            <td style="text-align: center" width='50'>ดี</td>
                            <td style="text-align: center" width='50'>กลาง</td>
                            <td style="text-align: center" width='50'>พอใช้</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="input" type="text" name="exp_lang_1"></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_1" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_1" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_1" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_1" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_1" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_1" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_1" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_1" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_1" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_1" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_1" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_1" value="1" ></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="input" type="text" name="exp_lang_2"></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_2" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_2" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_2" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_2" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_2" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_2" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_2" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_2" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_2" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_2" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_2" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_2" value="1" ></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="input" type="text" name="exp_lang_3"></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_3" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_3" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_l_3" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_3" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_3" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_s_3" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_3" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_3" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_r_3" value="1" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_3" value="3" ></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_3" value="2" checked></td>
                            <td style="text-align: center"><input type="radio" name="exp_lang_w_3" value="1" ></td>
                        </tr>
                    </table>
                    
            </div>
            <div class="well">
                    <legend>การฝึกอบรม</legend>
                    <table class="table table-bordered">
                        <tr class="info">
                            <td style="text-align: center" width='600' rowspan="2">หลักสูตร</td>
                            <td style="text-align: center" width='300' colspan="4">จำนวน</td>
                        </tr>
                        <tr class="info">
                            <td style="text-align: center" width='75'>ชั่วโมง</td>
                            <td style="text-align: center" width='75'>วัน</td>
                            <td style="text-align: center" width='75'>เดือน</td>
                            <td style="text-align: center" width='75'>ปี</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="trn_name[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_h[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_d[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_m[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_y[]"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="trn_name[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_h[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_d[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_m[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_y[]"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span6" type="text" name="trn_name[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_h[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_d[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_m[]"></td>
                            <td style="text-align: center"><input class="input-mini" type="text" name="trn_y[]"></td>
                        </tr>
                    </table>
            </div>
            <div class="well">
                    <legend>ข้อมูลคู่สมรส</legend>
                    <div class="inline">
                        
                        <label class="radio">
                            <input type="radio" name="cou_st" value="1" checked>ไม่มีคู่สมรส&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="cou_st" value="3">หย่า&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="cou_st" value="4">แยกกันอยู่&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="cou_st" value="2">สมรสจดทะเบียน&nbsp; 
                        </label>
                        เลขที่&nbsp;<input type="text" name="cou_num">&nbsp;&nbsp;
                        ปี พ.ศ.<input type="text" name="cou_y">&nbsp;&nbsp;
                        
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รายได้คู่สมรส&nbsp;
                        <label class="radio">
                            <input type="radio" name="cou_salary" value="1">มี&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="cou_salary" value="2" checked>ไม่มี&nbsp; 
                        </label>&nbsp; &nbsp; 
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ชื่อ-สกุลสามี/ภรรยา&nbsp;<input class="span3" id="prependedInput1" type="text" name="cou_name">&nbsp;&nbsp; 
                        วัน/เดือน/ปี&nbsp;เกิด&nbsp;<input class="span2" id="prependedInput1" type="date" name="cou_b">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่เลขที่&nbsp;<input class="input-mini" type="text" name="cou_add">&nbsp;&nbsp;
                        หมู่&nbsp;<input class="input-small" type="text" name="cou_moo">&nbsp;&nbsp;
                        ซอย&nbsp;<input class="input-small" type="text" name="cou_soi">&nbsp;&nbsp;
                        ถนน&nbsp;<input class="input" type="text" name="cou_road">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ตำบล/แขวง&nbsp;<input class="input" type="text" name="cou_tumbon">&nbsp;&nbsp;
                        อำเภอ/เขต&nbsp;<input class="input" type="text" name="cou_amphur">&nbsp;&nbsp;
                        จังหวัด&nbsp;<input name="show_arti_topic5" type="text" id="show_arti_topic5" class="input-medium" />
                                   <input name="h_arti_id5" type="hidden" id="h_arti_id5" value="" />
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        รหัสไปรษณีย์&nbsp;<input class="input" type="text" name="cou_post">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="input" type="text" name="cou_tel">&nbsp;&nbsp;
                        มือถือ&nbsp;<input class="input" type="text" name="cou_mobi">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        อาชีพ/ตำแหน่ง&nbsp;<input class="input" type="text" name="cou_work">&nbsp;&nbsp;
                        สถานที่ทำงาน&nbsp;<input class="input" type="text" name="cou_off">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        จำนวนบุตร&nbsp;<input class="input-mini" type="number" name="cou_baby_num" min="0">&nbsp;คน&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="cou_baby" value="1">กำลังศึกษา&nbsp; 
                        </label>
                        <label class="radio">
                            <input type="radio" name="cou_baby" value="2" checked>ไม่ศึกษา&nbsp; 
                        </label>&nbsp; &nbsp; 
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ประวัติครอบครัว</legend>
                    <div class="inline">
                        
                        ชื่อ-สกุล&nbsp;บิดา&nbsp;<input class="input" id="prependedInput1" type="text" name="fam_fa_name">&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="fam_fa_st" value="1">ถึงแก่กรรม
                        </label>
                        <label class="radio">
                            <input type="radio" name="fam_fa_st" value="2" checked>มีชีวิตอยู่&nbsp; 
                        </label>&nbsp; &nbsp; 
                        อายุ&nbsp;<input class="span1" type="text" name="fam_fa_age">&nbsp;ปี&nbsp;&nbsp;
                        อาชีพ&nbsp;<input class="span2" type="text" name="fam_fa_work">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่&nbsp;<input class="input-xxlarge" type="text" name="fam_fa_add">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="span2" type="text" name="fam_fa_tel">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ชื่อ-สกุล&nbsp;มารดา&nbsp;<input class="input" id="prependedInput1" type="text" name="fam_ma_name">&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="fam_ma_st" value="1">ถึงแก่กรรม
                        </label>
                        <label class="radio">
                            <input type="radio" name="fam_ma_st" value="2" checked>มีชีวิตอยู่&nbsp; 
                        </label>&nbsp; &nbsp; 
                        อายุ&nbsp;<input class="span1" type="text" name="fam_ma_age">&nbsp;ปี&nbsp;&nbsp;
                        อาชีพ&nbsp;<input class="span2" type="text" name="fam_ma_work">&nbsp;&nbsp;
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ที่อยู่&nbsp;<input class="input-xxlarge" type="text" name="fam_ma_add">&nbsp;&nbsp;
                        โทรศัพท์&nbsp;<input class="span2" type="text" name="fam_ma_tel">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        ข้าพเจ้ามีพี่น้องร่วมบิดามารดา&nbsp;<input class="span1" type="text" name="fam_ma_bro">&nbsp;คน&nbsp;&nbsp;
                        ข้าพเจ้าเป็นบุตรคนที่&nbsp;<input class="span1" type="text" name="fam_num">
                        
                    </div>
                    <br>
                    <table width="900" border="0" class="table table-bordered">
                        <tr class="info">
                            <td width="40" style="text-align: center">ลำดับ</td>
                            <td width="200" style="text-align: center">ชื่อ-สกุล</td>
                            <td width="50" style="text-align: center">อายุ</td>
                            <td width="100" style="text-align: center">อาชีพ/ตำแหน่ง</td>
                            <td width="100" style="text-align: center">สถานที่ทำงาน</td>
                        </tr>
                        <tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="fam_tb_num[]"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="fam_tb_name[]"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="fam_tb_age[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_work[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_workadd[]"></td>
                        </tr>
                        <tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="fam_tb_num[]"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="fam_tb_name[]"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="fam_tb_age[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_work[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_workadd[]"></td>
                        </tr><tr>
                            <td width="40" style="text-align: center"><input class="span1" type="text" name="fam_tb_num[]"></td>
                            <td width="200" style="text-align: center"><input class="span3" type="text" name="fam_tb_name[]"></td>
                            <td width="50" style="text-align: center"><input class="span1" type="text" name="fam_tb_age[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_work[]"></td>
                            <td width="100" style="text-align: center"><input class="span3" type="text" name="fam_tb_workadd[]"></td>
                        </tr>
                    </table>
                    
            </div>
            <div class="well">
                
                    <legend>บุคคลอ้างอิง หรือผู้ที่สามารถติดต่อได้</legend>
                    <table width="900" border="0" class="table table-bordered">
                        <tr class="info">
                            <td width="40" style="text-align: center">ลำดับ</td>
                            <td width="50" style="text-align: center">ความสัมพันธ์</td>
                            <td width="200" style="text-align: center">ชื่อ-สกุล</td>
                            <td width="50" style="text-align: center">อายุ</td>
                            <td width="100" style="text-align: center">อาชีพ/ตำแหน่ง</td>
                            <td width="100" style="text-align: center">เบอร์โทร</td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_num[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_relation[]"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="ref_name[]"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_age[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_work[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_tel[]"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_num[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_relation[]"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="ref_name[]"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_age[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_work[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_tel[]"></td>
                        </tr><tr>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_num[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_relation[]"></td>
                            <td style="text-align: center"><input class="span3" type="text" name="ref_name[]"></td>
                            <td style="text-align: center"><input class="span1" type="text" name="ref_age[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_work[]"></td>
                            <td style="text-align: center"><input class="span2" type="text" name="ref_tel[]"></td>
                        </tr>
                        
                    </table>
                    
            </div>
            <div class="well">
                    <legend>ความสนใจเกี่ยวกับงานของบริษัท</legend>
                    <div class="inline">
                        
                        1.&nbsp;หากบริษัท นิยมพานิชย์ จำกัดพิจารณารับท่านเข้าทำงาน ท่านจะสามารถเริ่มงานได้เร็วที่สุดเมื่อใด&nbsp;&nbsp;<input class="span2" type="date" name="start_work">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        2.&nbsp;ท่านประสงค์จะทำงานกับบริษัท นิยมพานิชย์ จำกัดที่&nbsp;&nbsp;
                        <label class="radio">
                            <input type="radio" name="branch" value="1" checked>สำนักงานใหญ่
                        </label>
                        <label class="radio">
                            <input type="radio" name="branch" value="2">สาขา&nbsp;<input class="span2" type="text" name="branch_txt">
                        </label>
                        <label class="radio">
                            <input type="radio" name="branch" value="3">ที่ใดก็ได้
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        3.&nbsp;ท่านยินดีให้ทางบริษัท นิยมพานิชย์ จำกัด ส่งใบสมัครของท่านไปให้บริษัทฯ ในเครือเลือกในตำแหน่งที่ท่านสมัคร&nbsp;
                        <label class="radio">
                            <input type="radio" name="branch_send" value="1" checked>ยินดี
                        </label>
                        <label class="radio">
                            <input type="radio" name="branch_send" value="2">ไม่ยินดี
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        4.&nbsp;ท่านสมัครงานไว้กับที่ใดบ้าง&nbsp;<input class="span9" type="text" name="work_oth">
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        5.&nbsp;ท่านมีแผนที่จะศึกษาต่อหรือไม่&nbsp;
                        <label class="radio">
                            <input type="radio" name="study" value="1" checked>ไม่มี
                        </label>
                        <label class="radio">
                            <input type="radio" name="study" value="1">มี
                        </label>&nbsp;&nbsp;
                        เมื่อไหร่&nbsp;<input class="span2" type="text" name="study_when">&nbsp;
                        สถาบัน&nbsp;<input class="span2" type="text" name="study_name">&nbsp;
                        สาขาวิชา&nbsp;<input class="span2" type="text" name="study_maj">
                        
                    </div>
                    
            </div>
            <div class="well">
                    <legend>ท่านทราบตำแหน่งงานว่างได้อย่างไร</legend>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="hidden" name="chk_1" value="x">
                            <input type="checkbox" name="chk_1"> หนังสือพิมพ์&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="hidden" name="chk_2" value="x">
                            <input type="checkbox" name="chk_2"> วิทยุ&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="hidden" name="chk_3" value="x">
                            <input type="checkbox" name="chk_3"> ป้ายประกาศในบริษัท&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="hidden" name="chk_4" value="x">
                            <input type="checkbox" name="chk_4"> Internet&nbsp;&nbsp;&nbsp;
                        </label>
                        <label class="checkbox">
                            <input type="hidden" name="chk_5" value="x">
                            <input type="checkbox" name="chk_5"> สำนักงานจัดหางานจังหวัด&nbsp;<input name="show_arti_topic6" type="text" id="show_arti_topic6" class="input-medium" />
                                                                                        <input name="h_arti_id6" type="hidden" id="h_arti_id6" value="" />
                        </label>
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="hidden" name="chk_6" value="x">
                            <input type="checkbox" name="chk_6"> รับสมัคร/ประกาศจากสถาบันการศึกษา&nbsp;
                            <input class="span4" type="text" name="chk_6_name">&nbsp;
                        </label>
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="hidden" name="chk_7" value="x">
                            <input type="checkbox" name="chk_7"> พนักงานบริษัทฯแนะนำ&nbsp;
                            ชื่อ&nbsp;<input class="span3" type="text" name="chk_7_name">
                            มีความสัมพันธ์ในฐานะ&nbsp;<input class="span2" type="text" name="chk_7_relation">
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;แผนก&nbsp;<input class="span2" type="text" name="chk_7_part">
                        ตำแหน่ง&nbsp;<input class="span2" type="text" name="chk_7_position">
                        โทร&nbsp;<input class="span2" type="text" name="chk_7_tel">
                        
                    </div>
                    <hr>
                    <div class="inline">
                        
                        <label class="checkbox">
                            <input type="hidden" name="chk_8" value="x">
                            <input type="checkbox" name="chk_8" > บุคคลภายนอกแนะนำ&nbsp;
                            ชื่อ&nbsp;<input class="span3" type="text" name="chk_8_name">
                            มีความสัมพันธ์ในฐานะ&nbsp;<input class="span2" type="text" name="chk_8_relation">
                        </label>
                        
                    </div>
                    <br>
                    <div class="inline">
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่/สถานที่ทำงาน&nbsp;<input class="span6" type="text" name="chk_8_add">&nbsp;
                        โทร&nbsp;<input class="span2" type="tel" name="chk_8_tel">
                        
                    </div>
                    
            </div>
            
            <div class="inline">
                        
                <h4 class="text-center text-error"><strong>ข้าพเจ้าขอรับรองว่า&nbsp;ข้อความข้างต้นถูกต้อง&nbsp;และเป็นความจริงทุกประการ&nbsp;หากข้าพเจ้าให้ข้อความเป็นเท็จ&nbsp;
                        <br><br>ข้าพเจ้ายินยอมให้บริษัท&nbsp;นิยมพานิช&nbsp;จำกัด&nbsp;เลิกจ้างทันที&nbsp;โดยไม่ต้องจ่ายค่าชดเชยใดๆ&nbsp;ทั้งสิ้น</strong></h4>
            
            </div>
            <br>
            <div class="text-center">
                        
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-info" data-loading-text="กรุณารอ..." onclick="return confirm('ยืนยันข้อมูลทั้งหมดถูกต้อง !!!')">&nbsp;&nbsp;
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                
            </div>
            </form>
        </div>
        <br>
        
        <br><br>
        <div class="text-center">
                        
            NIYOMPANICH CO., LTD.
                
        </div>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/typeahead.js"></script>
        <script type="text/javascript">
            function make_autocom(autoObj,showObj){
            var mkAutoObj=autoObj;
            var mkSerValObj=showObj;
            new Autocomplete(mkAutoObj, function() {
            this.setValue = function(id) {     
            document.getElementById(mkSerValObj).value = id;
            }
            if ( this.isModified )
            this.setValue("");
            if ( this.value.length < 1 && this.isNotClick )
            return ;   
            return "province.php?q="+encodeURIComponent(this.value);
            });
            }  
            // การใช้งาน
            // make_autocom(" id ของ input ตัวที่ต้องการกำหนด "," id ของ input ตัวที่ต้องการรับค่า");
            make_autocom("show_arti_topic","h_arti_id");
            make_autocom("show_arti_topic2","h_arti_id2");
            make_autocom("show_arti_topic3","h_arti_id3");
            make_autocom("show_arti_topic4","h_arti_id4");
            make_autocom("show_arti_topic5","h_arti_id5");
            make_autocom("show_arti_topic6","h_arti_id6");
        </script> 
        <script language="javascript" type="text/javascript">
            function cform(form) {
                    if(form["chk"].checked) {
                            form["add2_num"].value = form["add_num"].value;
                            form["add2_moo"].value = form["add_moo"].value;
                            form["add2_soi"].value = form["add_soi"].value;
                            form["add2_road"].value = form["add_road"].value;
                            form["add2_tumbon"].value = form["add_tumbon"].value;
                            form["add2_amphur"].value = form["add_amphur"].value;
                            form["show_arti_topic4"].value = form["show_arti_topic3"].value;
                            form["add2_post"].value = form["add_post"].value;
                            form["add2_tel"].value = form["add_tel"].value;
                            form["add2_mobi"].value = form["add_mobi"].value;
                        }
                    else {
                            form["add2_num"].value = "";
                            form["add2_moo"].value = "";
                            form["add2_soi"].value = "";
                            form["add2_road"].value = "";
                            form["add2_tumbon"].value = "";
                            form["add2_amphur"].value = "";
                            form["show_arti_topic4"].value = "";
                            form["add2_post"].value = "";
                            form["add2_tel"].value = "";
                            form["add2_mobi"].value = "";
                    }
            }

        </script>
    </body>
</html>