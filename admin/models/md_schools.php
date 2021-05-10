<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllSchools() {
        $sql = "select * from schools";
        return query($sql);
    }

    //Get tổng lượt reviews by ID trường
    function getTongLuotReviewByIDSchool($ma_school) {
        $sql = "SELECT COUNT(*) FROM schools INNER JOIN reviews ON schools.ma_school = reviews.ma_school WHERE schools.ma_school='$ma_school'";
        return rowCount($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewSchools($ten_school, $he, $so_luot_review, $nam_thanh_lap, $hinh_anh, $dia_chi) {
        $sql="insert into schools (ten_school, he, so_luot_review, nam_thanh_lap, hinh_anh, dia_chi) 
              values('$ten_school','$he','$so_luot_review', '$nam_thanh_lap', '$hinh_anh', '$dia_chi')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getSchoolsByID($ma_schools) {
        $sql = "select * from schools where ma_schools='$ma_schools'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateSchools($ma_school, $ten_school, $he, $so_luot_review, $nam_thanh_lap, $hinh_anh, $dia_chi) {
        try {
            $sql = "update schools SET ma_school='$ma_school', ten_school='$ten_school', he='$he' so_luot_review='$so_luot_review', 
                    nam_thanh_lap='$nam_thanh_lap', hinh_anh='$hinh_anh', dia_chi='$dia_chi'
                    WHERE ma_school='$ma_school'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteReviews($ma_schools) {
        $sql = "delete from schools where ma_schools='$ma_schools'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>