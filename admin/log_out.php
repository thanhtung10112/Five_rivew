<?php
    require_once "../system/database.php";
    session_start();
    if(isset($_SESSION['admin'])) {
        $ma_user = $_SESSION['admin-ma_user'];
        $sqlUpdate = "update users set trang_thai_online=0 WHERE ma_user='$ma_user'";
        execute($sqlUpdate);
        unset($_SESSION['admin-ma_user']);
        unset($_SESSION['admin']);
        header('location: log_in.php');
    }
