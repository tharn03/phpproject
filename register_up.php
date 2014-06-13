<!DOCTYPE html>
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
                <div class="span2" id="loginbox">
                    <form class="form-horizontal" method="post" action="register-ny.php">
                        <center>
                            <h3><strong>หมายเลขใบสมัครของท่านคือ</strong></h3>
                            <br>
                            <hr>
                            <h2><?php echo $idperson_info;?></h2>
                            <hr>
                            <br>
                            <h5 class="text-center text-error"><strong>***กรุณาจดหมายเลขใบสมัครของท่านไว้***</strong></h5>
                            <br>
                            <a href="index.php" class="btn btn-primary">กลับหน้าหลัก</a>
                        </center>
                      </form>
                 </div>
            </div>
        </div>
        
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
