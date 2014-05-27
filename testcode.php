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