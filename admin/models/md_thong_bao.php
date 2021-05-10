<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllThongBao() {
        $sql = "select * from thong_bao";
        return query($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewThongBao($ma_user, $ma_review, $ma_hanh_dong, $thoi_gian) {
        $sql="insert into thong_bao (ma_user, ma_review, ma_hanh_dong, thoi_gian) 
              values('$ma_user','$ma_review','$ma_hanh_dong', '$thoi_gian')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getThongBaoByID($ma_thong_bao) {
        $sql = "select * from thong_bao where ma_thong_bao='$ma_thong_bao'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateThongBao($ma_thong_bao, $ma_user, $ma_review, $ma_hanh_dong, $thoi_gian) {
        try {
            $sql = "update thong_bao SET ma_thong_bao='$ma_thong_bao', ma_user='$ma_user', ma_review='$ma_review' 
                    ma_hanh_dong='$ma_hanh_dong', thoi_gian='$thoi_gian'
                    WHERE ma_thong_bao='$ma_thong_bao'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteThongBao($ma_thong_bao) {
        $sql = "delete from thong_bao where ma_thong_bao='$ma_thong_bao'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>