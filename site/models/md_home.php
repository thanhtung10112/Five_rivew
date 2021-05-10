<?php 
require_once "../system/database.php";

// Hàm cập nhật mật khẩu mới khi người dùng quên mật khẩu
function updatePass($email, $newPass) {
    $sql = "UPDATE nguoi_dung SET mat_khau='$newPass' WHERE email='$email'";
    execute($sql);
}

function getAllSchools() {  
    $sql = "SELECT * FROM schools";
    return query($sql);
}

function getAllreviews() {
    $sql="SELECT * from reviews ORDER BY ngay_review Desc";
    return query($sql);
}

function gettruongByID($ma_school) {  
    $sql = "SELECT * FROM schools WHERE ma_school='$ma_school'";
    return queryOne($sql);
}

// Lấy tổng rating từ review by mã school
function getTongRatingByMaSchool($ma_school) {
    $sql = "SELECT AVG(Rating) FROM reviews WHERE ma_school='$ma_school'";
    return query($sql);
}

//Lấy tất cả review của mã trường
function getAllReviewsByIDSchools($ma_school) {
    $sql = "SELECT * FROM reviews where ma_school='$ma_school' ORDER BY ngay_review DESC";
    return query($sql);
}


//Kiểm tra đăng nhập
function checkUserTonTai($email) {
    $sql = "select * from users where email='$email'";
    $result = query($sql);
    return $result->rowCount();
}

function addNewReviews($ho_ten, $chuc_vu, $noi_dung, $rating, $ngay_review, $ma_user, $ma_school, $an_hien) {
    $sql="insert into reviews (ho_ten, chuc_vu, noi_dung, rating, ngay_review, ma_user, ma_school, an_hien) 
          values('$ho_ten','$chuc_vu','$noi_dung', '$rating', now(), '$ma_user', '$ma_school', '1')";
    execute($sql);
    $sql_drop = "ALTER TABLE reviews DROP FOREIGN KEY FK_PersonOrder";
    $sql_school = "SELECT * FROM schools WHERE ma_school='$ma_school'";
    $school = queryOne($sql_school);
    $school_rating = $school['school_rating'];
    $review_rating = $rating;
    $avg_school_rating = ($school_rating + $review_rating)/2;
    $sql_update_school_rating = "UPDATE schools SET school_rating = '$avg_school_rating' WHERE ma_school='$ma_school'";
    execute($sql_update_school_rating);
    $sql_update_school_so_luot_review = "UPDATE schools SET so_luot_review = so_luot_review+1 WHERE ma_school='$ma_school'";
    execute($sql_update_school_so_luot_review);
}

function insertComment($noi_dung_comment, $ho_ten, $ma_reviews, $ma_user, $ma_school) {
    $sql="insert into comments (ho_ten, noi_dung_comment, ngay_comment, ma_review, ma_user, ma_school, an_hien) 
          values('$ho_ten','$noi_dung_comment', now(), '$ma_reviews', '$ma_user', '$ma_school', '1')";
    execute($sql);
}

function getCmtByReview($ma_reviews) {
    $sql = "SELECT * FROM comments WHERE ma_review='$ma_reviews'";
    return query($sql);
}

function getSchoolsBy($filter) {
    switch ($filter) {
        case 'drama':
            $sql = "SELECT * FROM schools, reviews
            WHERE schools.ma_school=reviews.ma_school AND so_luot_review > 0 ORDER BY so_luot_review DESC";
            break;
        case 'top':
            $sql = "SELECT * FROM schools, reviews
                    WHERE schools.ma_school=reviews.ma_school and rating > 3 GROUP BY schools.ma_school ORDER BY rating DESC";
            break;
        case 'bua':
            $sql = "SELECT * FROM schools, reviews
                    WHERE schools.ma_school=reviews.ma_school AND rating < 2 GROUP BY schools.ma_school ORDER BY rating";
            break;
        default:
            break;
    }
    
    return query($sql);
}

function getTenTruongByID($ma_school) {
    $sql = "SELECT ten_school FROM schools WHERE ma_school='$ma_school'";
    return queryOne($sql);
}

function ratingReview($rating, $ma_school) {
    $sql = "SELECT COUNT(*) FROM reviews where ma_school='$ma_school' && rating='$rating'";
    return rowCount($sql);
}

function luuThongTinDangKy($ho_ten, $p2, $e) {
    $sql = "INSERT INTO users (ho_ten, email, mat_khau, trang_thai, trang_thai_online, vai_tro) 
    VALUES ('$ho_ten', '$e', '$p2', 0, 1, 1)";
    execute($sql);
}

function getUsersByID($ma_user) {
    $sql = "select * from users where ma_user='$ma_user'";
    return queryOne($sql);
}

function getHoTenByID($ma_user) {
    $sql = "SELECT * FROM users WHERE ma_user='$ma_user'";
    return queryOne($sql);
}
?>