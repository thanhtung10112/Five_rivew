<?php
  require_once "models/md_reviews.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request

  switch ($act) {
    case "index":
       /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
        $reviewList = getAllReviews();
        
       /* 2. Nạp view hiện danh sách các record vừa lấy */
       $view = "views/ql_review.php";
       require_once "views/layout.php";
      break;

    case "addnew":
      /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
        $view = "views/reviews-add.php";
        require_once "views/layout.php";
        break;

    case "edit":
      /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
      $ma_reviews = $_GET['ma_reviews'];
      /* 2. Kiểm tra hợp lệ giá trị id */
      settype($ma_reviews,"int");
      /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
      $row = getReviewsByID($ma_reviews);
      /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
      $view = "views/reviews-edit.php";
      require_once "views/layout.php";
      break;
      /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

    case "insert":           
      /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
        $ho_ten = $_POST['ho_ten'];
        $chuc_vu = $_POST['chuc_vu'];
        $noi_dung = $_POST['noi_dung'];
        $rating = $_POST['rating'];
        $ngay_review = $_POST['ngay_view'];
        $ma_user = $_POST['ma_user'];
        $ma_school = $_POST['ma_school'];
        $an_hien = $_POST['an_hien'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ho_ten = trim(strip_tags($ho_ten));
        $chuc_vu = trim(strip_tags($chuc_vu));
        $noi_dung = trim(strip_tags($noi_dung));
        $ngay_review = trim(strip_tags($ngay_view));
        settype($rating, "int");
        settype($ma_user, "int");
        settype($ma_school, "int");
        settype($an_hien, "int");

       /* 3. Gọi hàm trong model chèn vào db */
        addNewReviews($ho_ten, $chuc_vu, $noi_dung, $rating, $ngay_review, $ma_user, $ma_school, $an_hien);

       /* 4. Tạo thông báo */
        $message = "Thêm review thành công";  
       /*5. Chuyển hướng đến trang cần thiết 
       */
      header("location:?ctrl=reviews&act=index&message=$message");
        break; 

    case "update":
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
        $ma_reviews = $_POST['ma_reviews'];
        $ho_ten = $_POST['ho_ten'];
        $chuc_vu = $_POST['chuc_vu'];
        $noi_dung = $_POST['noi_dung'];
        $rating = $_POST['rating'];
        $ngay_review = $_POST['ngay_view'];
        $ma_user = $_POST['ma_user'];
        $ma_school = $_POST['ma_school'];
        $an_hien = $_POST['an_hien'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ho_ten = trim(strip_tags($ho_ten));
        $chuc_vu = trim(strip_tags($chuc_vu));
        $noi_dung = trim(strip_tags($noi_dung));
        $ngay_review = trim(strip_tags($ngay_view));
        settype($rating, "int");
        settype($ma_user, "int");
        settype($ma_school, "int");
        settype($an_hien, "int");

      /* 3. Gọi hàm cập nhật vào db */
      updateReviews($ma_reviews, $ho_ten, $chuc_vu, $noi_dung, $rating, $ngay_review, $ma_user, $ma_school, $an_hien);

      /* 4. Tạo thông báo */
      $message = "Cập nhật thành công"; 
      /* 5. Chuyển hướng đến trang cần thiết */
      header("location:?ctrl=reviews&act=index&message=$message");
      break;

    case "delete":
      // Chức năng xóa record 
      // 1. Tiếp nhận biến id của record cần xóa
      $ma_reviews = $_GET['ma_reviews'];
      // Ép kiểu
      settype($ma_reviews,"int");
      /* 2. Gọi hàm xóa */
      deleteReviews($ma_reviews);
      /* 3. Tạo thông báo */
      $message = "Đã xóa thành công";
      echo $message;
      /* 4. Chuyển đến trang cần thiết */
      header("location:?ctrl=reviews&act=index&message=$message");
    break;
  }
?>
