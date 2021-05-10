<?php 
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("location: log_in.php");
    }
    define('ARR_CONTROLLER', ["home", "reviews", "schools", "users", "comments", "cam_xuc", "chi_tiet_cam_xuc", "thong_bao", "lich_su"]);
    $ctrl = "home";
    // Nếu người dùng nhập vào địa chỉ url thì sẽ lưu tên địa chỉ vào biến $ctrl
    if(isset($_GET['ctrl']) == true) $ctrl = $_GET['ctrl'];
    //Kiểm tra tên địa chỉ có tồn tại trong mảng ARR_CONTROLLER hay không, nếu không thì thông báo Ko tồn tại địa chỉ
    if(in_array($ctrl, ARR_CONTROLLER) == false) die("Không tồn tại địa chỉ");
    // Lưu địa chỉ vào biến $pathfile để truy cập vào thư mục controllers/$ctrl.php 
    $pathfile = "controllers/$ctrl.php";
    // Kiểm tra nếu tồn tại file đó trong thư mục controller thì nhúng file $pathfile vào file index.php
    if(file_exists($pathfile) == true) require_once $pathfile;
    else echo "Không tồn tại file $ctrl trong thư mục controller";
?>