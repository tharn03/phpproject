<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/autocomplete.js"></script>
        <link rel="stylesheet" href="css/autocomplete.css"  type="text/css"/>
        <script type="text/javascript">
            function FillAdd(f) {
            if(f.add_copy.checked == true) {
            f.add_num.value = f.add2_num.value;
            f.add_moo.value = f.add2_moo.value;
            f.add_soi.value = f.add2_soi.value;
            f.add_road.value = f.add2_road.value;
            f.add_tumbon.value = f.add2_tumbon.value;
            f.add_amphur.value = f.add2_amphur.value;
            f.show_arti_topic3.value = f.show_arti_topic4.value;
            f.add_post.value = f.add2_post.value;
            f.add_tel.value = f.add2_tel.value;
            f.add_mobi.value = f.add2_mobi.value;
            
              }
            }
        </script>
    </head>
    <body>
        
        <form id="signup" class="form-inline" method="post" action="testsubmit.php">
            <input type="text" name="sec" /> <input type="date" name="date" />
            <p>Input แบบ dynamic Array (ไม่ระบุ id ของ array)</p>
            <p><input type="text" name="text1[]" /><input type="text" name="text2[]" /><input type="text" name="text3[]" /></p>
            <p><input type="text" name="text1[]" /><input type="text" name="text2[]" /><input type="text" name="text3[]" /></p>
            <p><input type="text" name="text1[]" /><input type="text" name="text2[]" /><input type="text" name="text3[]" /></p>
            <p><input type="text" name="text1[]" /><input type="text" name="text2[]" /><input type="text" name="text3[]" /></p>
            
        จังหวัดที่เกิด&nbsp;<input name="show_arti_topic" type="text" id="show_arti_topic" size="50" />
                      <input name="h_arti_id" type="hidden" id="h_arti_id" value="" />
                      <input type="submit" value="OK">
        
                      
        
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
                            <input type="checkbox" value="Y" name="add_copy" onclick="FillAdd(this.form)"> ตามที่อยู่ปัจจุบัน
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
        </form>
                      
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
        </script>
        
    </body>
</html>