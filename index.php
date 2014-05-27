<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="js/autocomplete.js"></script>
        <link rel="stylesheet" href="css/autocomplete.css"  type="text/css"/>
        <title></title>
    </head>
    <body>
        <form id="form1" name="form1" method="post" action="show.php">
            <input name="show_arti_topic" type="text" id="show_arti_topic" size="50" />
            <input name="h_arti_id" type="hidden" id="h_arti_id" value="" />
            <br>
            <input type="submit" value="Submit">
        </form>
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
