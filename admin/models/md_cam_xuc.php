<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllCamXuc() {
        $sql = "select * from cam_xuc";
        return query($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewCamXuc($ten_cam_xuc) {
        $sql="insert into cam_xuc (ten_cam_xuc) 
              values('$ten_cam_xuc')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getCamXucByID($ma_cam_xuc) {
        $sql = "select * from cam_xuc where ma_cam_xuc='$ma_cam_xuc'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateCamXuc($ma_cam_xuc, $ten_cam_xuc) {
        try {
            $sql = "update cam_xuc SET ma_cam_xuc='$ma_cam_xuc', ten_cam_xuc='$ten_cam_xuc' WHERE ma_cam_xuc='$ma_cam_xuc'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteCamXuc($ma_cam_xuc) {
        $sql = "delete from cam_xuc where ma_cam_xuc='$ma_cam_xuc'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>