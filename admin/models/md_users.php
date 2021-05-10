<?php 

    // 1. Nạp file database.php chứa lệnh kết nối db và các lệnh thực thi sql 
    require_once('../system/database.php');

    // 2. Định nghĩa hàm
    function getAllUsers() {
        $sql = "select * from users";
        return query($sql);
    }

    function getAllAdmins() {
        $sql = "select * from users where vai_tro=0";
        return query($sql);
    }

    function getAllClients() {
        $sql = "select * from users where vai_tro=1";
        return query($sql);
    }
    
    // Định nghĩa hàm add new
    function addNewUser($ho_ten, $email, $mat_khau, $vai_tro) {
        $sql="insert into users (ho_ten, email, mat_khau, vai_tro) 
              values('$ho_ten','$email','$mat_khau', '$vai_tro')";
        execute($sql);
    }       

    // Định nghĩa hàm lấy 1 loại hàng theo ID
    function getUsersByID($ma_user) {
        $sql = "select * from users where ma_user='$ma_user'";
        return queryOne($sql);
    }

    // Định nghĩa hàm update loại hàng
    function updateUser($ma_user, $ho_ten, $email, $mat_khau) {
        try {
            $sql = "update users SET ma_user='$ma_user', ho_ten='$ho_ten', email='$email', mat_khau='$mat_khau' WHERE ma_user='$ma_user'";
            execute($sql);
        } catch (Exception $e) {
            print_r($e->errorInfo);
            exit();
        }
    }

    // Định nghĩa hàm xóa 1 loại hàng
    function deleteUser($ma_user) {
        $sql = "delete from users where ma_user='$ma_user'";
        // Gọi hàm execute() từ file database.php trong folder system
        execute($sql);
    }

    //Hàm update password
    function updatePass($email, $newPass) {
        $sql = "UPDATE users SET mat_khau = '$newPass' WHERE email='$email'";
        execute($sql);
    }

    function checkDangNhap($email, $mat_khau) {
        $sql = "select * from users where email='$email' and mat_khau = '$mat_khau'";
        $result = query($sql);
        return $result->rowCount();
    }
?>