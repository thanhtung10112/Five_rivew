<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllComments() {
        $sql = "select * from comments";
        return query($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewComment($ho_ten, $noi_dung_cmt, $ngay_cmt, $ma_review, $ma_user, $an_hien) {
        $sql="insert into comments (ho_ten, noi_dung_cmt, ngay_cmt, ma_reviews, ma_user, an_hien) 
              values('$ho_ten','$noi_dung_cmt','$ngay_cmt', '$ma_review', '$ma_user', '$an_hien')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getCommentByID($ma_comment) {
        $sql = "select * from comments where ma_comment='$ma_comment'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateComment($ma_comment, $ho_ten, $noi_dung_cmt, $ngay_cmt, $ma_review, $ma_user, $an_hien) {
        try {
            $sql = "update comments SET ma_comment='$ma_comment', ho_ten='$ho_ten', noi_dung_cmt='$noi_dung_cmt' ngay_cmt='$ngay_cmt', 
                    ma_reviews='$ma_review', ma_user='$ma_user', an_hien='$an_hien'
                    WHERE ma_comment='$ma_comment'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteComment($ma_comment) {
        $sql = "delete from comments where ma_comment='$ma_comment'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }
?>