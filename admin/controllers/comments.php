<?php
  require_once "models/md_comments.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request

  switch ($act) {
    case "index":
       /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
        $ds = getAllComments();
       /* 2. Nạp view hiện danh sách các record vừa lấy */
       $view = "views/comments-index.php";
       require_once "views/layout.php";
      break;

    case "addnew":
      /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
        $view = "views/comments-add.php";
        require_once "views/layout.php";
        break;

    case "edit":
      /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
      $ma_comment = $_GET['ma_comment'];
      /* 2. Kiểm tra hợp lệ giá trị id */
      settype($ma_comment,"int");
      /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
      $row = getCommentByID($ma_comment);
      /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
      $view = "views/comments-edit.php";
      require_once "views/layout.php";
      break;
      /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

    case "insert":           
      /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
        $ho_ten = $_POST['ho_ten'];
        $noi_dung_cmt = $_POST['noi_dung_cmt'];
        $ngay_cmt = $_POST['ngay_cmt'];
        $ma_review = $_POST['ma_review'];
        $ma_user = $_POST['ma_user'];
        $an_hien = $_POST['an_hien'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ho_ten = trim(strip_tags($ho_ten));
        $noi_dung_cmt = trim(strip_tags($noi_dung_cmt));
        $ngay_cmt = trim(strip_tags($ngay_cmt));
        settype($ma_review, "int");
        settype($ma_user, "int");
        settype($an_hien, "int");

       /* 3. Gọi hàm trong model chèn vào db */
        addNewComment($ho_ten, $noi_dung_cmt, $ngay_cmt, $ma_review, $ma_user, $an_hien);

       /* 4. Tạo thông báo */
        $message = "Thêm comment thành công";  

       /*5. Chuyển hướng đến trang cần thiết 
       */
        header("location:?ctrl=comments&act=index&message=$message");
        break; 

    case "update":
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
        $ma_comment = $_POST['ma_comment'];
        $ho_ten = $_POST['ho_ten'];
        $noi_dung_cmt = $_POST['noi_dung_cmt'];
        $ngay_cmt = $_POST['ngay_cmt'];
        $ma_review = $_POST['ma_review'];
        $ma_user = $_POST['ma_user'];
        $an_hien = $_POST['an_hien'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ho_ten = trim(strip_tags($ho_ten));
        $noi_dung_cmt = trim(strip_tags($noi_dung_cmt));
        $ngay_cmt = trim(strip_tags($ngay_cmt));
        settype($ma_review, "int");
        settype($ma_user, "int");
        settype($an_hien, "int");

        /* 3. Gọi hàm cập nhật vào db */
        updateComment($ma_comment, $ho_ten, $noi_dung_cmt, $ngay_cmt, $ma_review, $ma_user, $an_hien);
        /* 4. Tạo thông báo */
        $message = "Cập nhật thành công"; 
        /* 5. Chuyển hướng đến trang cần thiết */
        header("location:?ctrl=comments&act=index&message=$message");
        break;

    case "delete":
      // Chức năng xóa record 
      // 1. Tiếp nhận biến id của record cần xóa
      $ma_comment = $_GET['ma_comment'];
      // Ép kiểu
      settype($ma_comment,"int");
      /* 2. Gọi hàm xóa */
      deleteComment($ma_comment);
      /* 3. Tạo thông báo */
      $message = "Đã xóa thành công";
      echo $message;
      /* 4. Chuyển đến trang cần thiết */
      header("location:?ctrl=comments&act=index&message=$message");
    break;
  }
?>
