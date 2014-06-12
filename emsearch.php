<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>eRecruitment System - NiyomPanich Co.,Ltd.</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { background: url(img/bg-login.jpg); }
            .container { background: transparent; }
            #loginbox {
                width:400px;
                padding:10px;
                border:5px solid white;
                margin:10px;
                border-radius:15px;
                background: white;
                box-shadow: 0px 0px 15px #888888;
            }
            .centerdiv
            {
                width:400px;
                height:200px;
                padding:10px;
                margin:150px auto 0 auto;
            }
        </style>
    </head>
    <body>
        <?php require_once "emmenu.html";?>
        
        <div class="centerdiv">
            <div class="row">
                <div class="span3"></div>
                <div class="span2 " id="loginbox">
                    <div>
                        <center><h3>ระบบค้นหาใบสมัครงาน</h3></center>
                    </div>
                    <br>
                    <form class="form-horizontal" method="post" action="emsearchresult.php">
                        <div class="control-group">
                          <label class="control-label" for="inputEmail">เดือน</label>
                          <div class="controls">
                              <select name="month">
                                <option value="" selected>======</option>
                                <option value="1">มกราคม</option>
                                <option value="2">กุมภาพันธ์</option>
                                <option value="3">มีนาคม</option>
                                <option value="4">เมษายน</option>
                                <option value="5">พฤษภาคม</option>
                                <option value="6">มิถุนายน</option>
                                <option value="7">กรกฎาคม</option>
                                <option value="8">สิงหาคม</option>
                                <option value="9">กันยายน</option>
                                <option value="10">ตุลาคม</option>
                                <option value="11">พฤศจิกายน</option>
                                <option value="12">ธันวาคม</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" >ปี</label>
                          <div class="controls">
                              <select name="year">
                                <option value="">====</option>
                                <option value="2007">2550</option>
                                <option value="2008">2551</option>
                                <option value="2009">2552</option>
                                <option value="2010">2553</option>
                                <option value="2011">2554</option>
                                <option value="2012">2555</option>
                                <option value="2013">2556</option>
                                <option value="2014">2557</option>
                                <option value="2015">2558</option>
                                <option value="2016">2559</option>
                                <option value="2017">2560</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" >บริษัท</label>
                            <div class="controls">

                                  <select name="corp">
                                      <option value="">=======</option>
                                      <option value="NY">บริษัท นิยมพานิช จำกัด</option>
                                      <option value="TC">บริษัท โตโยต้าเชียงใหม่ จำกัด</option>
                                      <option value="WW">บริษัท วินเวฟ จำกัด</option>
                                      <option value="MTA">บริษัท แมทริกซ์ ออโตโมบิล จำกัด</option>
                                      <option value="MTI">บริษัท แมทริกซ์ อินเตอร์เนชั่นแนล จำกัด</option>
                                      <option value="NW">บริษัท นอร์ทเวฟ จำกัด</option>
                                      <option value="MSD">บริษัท มิตรสินด่วน จำกัด</option>
                                  </select>
                            </div>  
                        </div>
                        <br><br>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn btn-primary">ค้นหา</button>
                            &nbsp;&nbsp;
                            <button type="reset" class="btn btn">Reset</button>
                          </div>
                        </div>
                      </form>
                 </div>
                <div class="span4"></div>
            </div>
        </div>
        
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
