<!-- khai báo hàm kết nối db, thực thi sql -->
<?php 
    require_once "../system/config.php";
    function getConnection() {
        $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $conn = new PDO('mysql:host='.HOST_DB.';dbname='.NAME_DB, USER_DB, PASS_DB, $opt);
        return $conn;
    }

    // Hàm thực thi câu lệnh select và trả về kết quả
    function query($sql) {
        $conn = getConnection();
        $result = $conn->query($sql);
        return $result;
    }

    // Hàm thực câu lệnh sql và trả về kết quả 1 mảng là dòng đầu tiên
    function queryOne($sql) {
        $conn = getConnection();
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // Hàm thực thi lệnh inset, update, delete kiểu exec
    function execute($sql) {
        $conn = getConnection();
        $result = $conn->exec($sql);
        return $result;
    }

    // Đếm tổng số dòng
    function rowCount($sql) {
        $conn = getConnection();
        $result = $conn->query($sql);
        return $result->fetchColumn();
    }
?>