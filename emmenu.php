<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <label class="brand" ><a href="index.php">eRECRUIT</a></label>
                    <ul class="nav">
                        <li><a href="emhome.php"><i class="icon-home"></i>&nbsp;หน้าหลัก</a></li>
                        <li><a href="emsearch.php"><i class="icon-search"></i>&nbsp;ค้นหา</a></li>
                        <li><a href="emreport_menu.php"><i class="icon-tasks"></i>&nbsp;รายงาน</a></li>
                        <li>
                            <form class="navbar-form" method="post" action="emsearch2.php">
                                <div class="input-append pull-right">
                                    <input type="text" name="id" class="span2" placeholder="Search">
                                    &nbsp;&nbsp;
                                    <button type="submit" class="btn">ค้นหาด่วน</button>
                                </div>
                            </form>
                        </li>
                        <li><a href="#"><i class="icon-user"></i>&nbsp;ยินดีต้อนรับ&nbsp;<?php echo $user['username'];?></a></li>
                        <li></li>
                        <li><a href="emlogout.php">ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>