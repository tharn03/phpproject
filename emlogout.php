<?php
session_start();
session_destroy(); //เพื่อทำการปิดเว็บบราวเซอร์ และทำลายค่า user,cart ที่กำหนดไว้ทั้งหมด
header('location:index.php')

?>