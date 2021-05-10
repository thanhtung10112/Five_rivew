<?php
  require_once "models/md_thong_bao.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request

  switch ($act) {
    case "index":
       /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
        $ds = getAllThongBao();
       /* 2. Nạp view hiện danh sách các record vừa lấy */
       $view = "views/thong_bao-index.php";
       require_once "views/layout.php";
      break;

    case "addnew":
      /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
        $view = "views/thong_bao-add.php";
        require_once "views/layout.php";
        break;

    case "edit":
      /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
      $ma_thong_bao = $_GET['ma_thong_bao'];
      /* 2. Kiểm tra hợp lệ giá trị id */
      settype($ma_thong_bao,"int");
      /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
      $row = getThongBaoByID($ma_thong_bao);
      /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
      $view = "views/thong_bao-edit.php";
      require_once "views/layout.php";
      break;
      /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

    case "insert":           
      /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
        $ma_user = $_POST['ma_user'];
        $ma_review = $_POST['ma_review'];
        $ma_hanh_dong = $_POST['ma_hanh_dong'];
        $thoi_gian = $_POST['thoi_gian'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $thoi_gian = trim(strip_tags($thoi_gian));
        settype($ma_user, "int");
        settype($ma_review, "int");
        settype($ma_hanh_dong, "int");

       /* 3. Gọi hàm trong model chèn vào db */
        addNewThongBao($ma_user, $ma_review, $ma_hanh_dong, $thoi_gian);

       /* 4. Tạo thông báo */
        $message = "Thêm thông báo thành công";  
       /*5. Chuyển hướng đến trang cần thiết 
       */
        header("location:?ctrl=thong_bao&act=index&message=$message");
        break; 

    case "update":
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
        $ma_thong_bao = $_POST['ma_thong_bao'];
        $ma_user = $_POST['ma_user'];
        $ma_review = $_POST['ma_review'];
        $ma_hanh_dong = $_POST['ma_hanh_dong'];
        $thoi_gian = $_POST['thoi_gian'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $thoi_gian = trim(strip_tags($thoi_gian));
        settype($ma_user, "int");
        settype($ma_review, "int");
        settype($ma_hanh_dong, "int");

      /* 3. Gọi hàm cập nhật vào db */
      updateThongBao($ma_thong_bao, $ma_user, $ma_review, $ma_hanh_dong, $thoi_gian);

      /* 4. Tạo thông báo */
      $message = "Cập nhật thành công"; 
      /* 5. Chuyển hướng đến trang cần thiết */
      header("location:?ctrl=thong_bao&act=index&message=$message");
      break;

    case "delete":
      // Chức năng xóa record 
      // 1. Tiếp nhận biến id của record cần xóa
      $ma_thong_bao = $_GET['ma_thong_bao'];
      // Ép kiểu
      settype($ma_thong_bao,"int");
      /* 2. Gọi hàm xóa */
      deleteThongBao($ma_thong_bao);
      /* 3. Tạo thông báo */
      $message = "Đã xóa thành công";
      echo $message;
      /* 4. Chuyển đến trang cần thiết */
      header("location:?ctrl=thong_bao&act=index&message=$message");
    break;
  }
?>
