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

        <div class="centerdiv">
            <div class="row">
                <div class="span3"></div>
                <div class="span2 " id="loginbox">
                    <div>
                        <img src="img/nylogo.gif" width="80">
                        &nbsp;&nbsp;
                        <img src="img/nytxt.gif" width="300">
                    </div>
                    <br>
                    <form class="form-horizontal" method="post" action="emhome.php">
                        <div class="control-group">
                          <label class="control-label" for="inputEmail">Username</label>
                          <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Username">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="inputPassword">Password</label>
                          <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn btn-primary">เข้าระบบ</button>
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
