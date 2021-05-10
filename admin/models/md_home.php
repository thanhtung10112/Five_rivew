<?php 
require_once('../system/database.php');
//Thống kê tổng xe
function getTongReviews() {
    $sql = "SELECT COUNT(*) FROM reviews";
    return rowCount($sql);
}

//Thống kê tổng trường
function getTongSchools() {
    $sql = "SELECT COUNT(*) FROM schools";
    return rowCount($sql);
}

//Thống kê tổng user
function getTongUsers() {
    $sql = "SELECT COUNT(*) FROM users";
    return rowCount($sql);
}

function getAllReviews() {
    $sql = "SELECT * FROM reviews";
    return query($sql);
}
?>