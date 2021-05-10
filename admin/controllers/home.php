<?php 
    require_once "models/md_home.php";
    $tongReview = getTongReviews();
    $tongSchool = getTongSchools();
    $tongUser = getTongUsers();
    $reviewList = getAllReviews();
    
    $view = "views/index.php";
    require_once "views/layout.php";
?>