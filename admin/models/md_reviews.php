<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllReviews() {
        $sql = "select * from reviews";
        return query($sql);
    }

    // Get tổng lượt like by ID review
    function getTongLuotThichByIDReview($ma_reviews) {
        $sql = "SELECT COUNT(*) FROM chi_tiet_cam_xuc INNER JOIN reviews ON chi_tiet_cam_xuc.ma_review = reviews.ma_reviews WHERE ma_reviews='$ma_reviews'";
        return rowCount($sql);
    }

    // Get tổng lượt comment by ID review
    function getTongLuotBinhLuanByIDReview($ma_reviews) {
        $sql = "SELECT COUNT(*) FROM comments INNER JOIN reviews ON comments.ma_review = reviews.ma_reviews WHERE ma_reviews='$ma_reviews'";
        return rowCount($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewReviews($ho_ten, $chuc_vu, $noi_dung, $rating, $ngay_review, $ma_user, $ma_school, $an_hien) {
        $sql="insert into reviews (ho_ten, chuc_vu, noi_dung, rating, ngay_review, ma_user, ma_school, an_hien) 
              values('$ho_ten','$chuc_vu','$noi_dung', '$rating', '$ngay_review', '$ma_user', '$ma_school', '$an_hien')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getReviewsByID($ma_reviews) {
        $sql = "select * from reviews where ma_reviews='$ma_reviews'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateReviews($ma_reviews, $ho_ten, $chuc_vu, $noi_dung, $rating, $ngay_review, $ma_user, $ma_school, $an_hien) {
        try {
            $sql = "update reviews SET ma_reviews='$ma_reviews', ho_ten='$ho_ten', chuc_vu='$chuc_vu' noi_dung='$noi_dung', 
            rating='$rating', ngay_review='$ngay_review', ma_user='$ma_user', ma_school='$ma_school', an_hien='$an_hien'
                    WHERE ma_reviews='$ma_reviews'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteReviews($ma_reviews) {
        $sql = "delete from reviews where ma_reviews='$ma_reviews'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>