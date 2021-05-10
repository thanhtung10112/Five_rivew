<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllChiTietCamXuc() {
        $sql = "select * from chi_tiet_cam_xuc";
        return query($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewChiTietCamXuc($ma_user, $ma_review, $ma_cam_xuc, $ngay_cam_xuc) {
        $sql="insert into chi_tiet_cam_xuc (ma_user, ma_review, ma_cam_xuc, ngay_cam_xuc) 
              values('$ma_user','$ma_review','$ma_cam_xuc', '$ngay_cam_xuc')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getChiTietCamXucByID($id) {
        $sql = "select * from chi_tiet_cam_xuc where ma_ctcx='$id'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateChiTietCamXuc($ma_ctcx, $ma_user, $ma_review, $ma_cam_xuc, $ngay_cam_xuc) {
        try {
            $sql = "update chi_tiet_cam_xuc SET ma_ctcx='$ma_ctcx', ma_user='$ma_user', ma_review='$ma_review', ma_cam_xuc='$ma_cam_xuc', ngay_cam_xuc='$ngay_cam_xuc'  
            WHERE ma_ctcx='$ma_ctcx'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteChiTietCamXuc($ma_ctcx) {
        $sql = "delete from chi_tiet_cam_xuc where ma_ctcx='$ma_ctcx'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>