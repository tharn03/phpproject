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
                margin:20px auto auto auto;
            }
        </style>
    </head>
    <body>
    
        <div class="centerdiv">
            <div class="row">
                <div class="span2 " id="loginbox">
                    <div>
                        <img src="img/nylogo.gif" width="80">
                        &nbsp;&nbsp;
                        <img src="img/nytxt.gif" width="300">
                    </div>
                    <br>
                    <form class="form-horizontal" method="post" action="register-ny.php">
                        
                            <center>
                            <ul class="nav nav-tabs nav-stacked">
                                <li class="nav-header"><h4>กรอกข้อมูลผู้สมัครงาน</h4></li>
                                <li><a href="register-ny.php">บริษัท นิยมพานิช จำกัด</a></li>
                                <li><a href="register-tc.php">บริษัท โตโยต้า เชียงใหม่ จำกัด</a></li>
                                <li><a href="register-ww.php">บริษัท วินเวฟ จำกัด</a></li>
                                <li><a href="register-mta.php">บริษัท แมทริกซ์ ฮอนด้า ออโตโมบิล จำกัด</a></li>
                                <li><a href="register-mti.php">บริษัท แมทริกซ์ ฮอนด้า อินเตอร์เนชั่นแนล จำกัด</a></li>
                                <li><a href="register-nw.php">บริษัท นอร์ทเวฟ จำกัด</a></li>
                                <li><a href="register-msd.php">บริษัท มิตรสินด่วน จำกัด</a></li>
                                <hr>
                                <li class="nav-header"><h4>ส่วนของพนักงาน</h4></li>
                                <li><a class="btn" href="index2.php">เข้าระบบ</a></li>
                            </ul>
                            </center>
                        
                      </form>
                 </div>
            </div>
        </div>
        
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
