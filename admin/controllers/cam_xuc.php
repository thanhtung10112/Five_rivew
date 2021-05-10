<?php
  require_once "models/md_cam_xuc.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request

  switch ($act) {
    case "index":
       /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
        $ds = getAllCamXuc();
       /* 2. Nạp view hiện danh sách các record vừa lấy */
       $view = "views/cam_xuc-index.php";
       require_once "views/layout.php";
      break;

    case "addnew":
      /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
        $view = "views/cam_xuc-add.php";
        require_once "views/layout.php";
        break;

    case "edit":
      /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
      $ma_cam_xuc = $_GET['ma_cam_xuc'];
      /* 2. Kiểm tra hợp lệ giá trị id */
      settype($ma_cam_xuc,"int");
      /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
      $row = getCamXucByID($ma_cam_xuc);
      /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
      $view = "views/cam_xuc-edit.php";
      require_once "views/layout.php";
      break;
      /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

    case "insert":           
      /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
        $ten_cam_xuc = $_POST['ten_cam_xuc'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ten_cam_xuc = trim(strip_tags($ten_cam_xuc));
        settype($ma_cam_xuc, "int");

       /* 3. Gọi hàm trong model chèn vào db */
        addNewCamXuc($ten_cam_xuc);

       /* 4. Tạo thông báo */
        $message = "Thêm cảm xúc thành công";  
       /*5. Chuyển hướng đến trang cần thiết 
       */
      header("location:?ctrl=cam_xuc&act=index&message=$message");
        break; 

    case "update":
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
        $ma_cam_xuc = $_POST['ma_cam_xuc'];
        $ten_cam_xuc = $_POST['ten_cam_xuc'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ten_cam_xuc = trim(strip_tags($ten_cam_xuc));
        settype($ma_cam_xuc, "int");

        /* 3. Gọi hàm cập nhật vào db */
        updateCamXuc($ma_cam_xuc, $ten_cam_xuc);

        /* 4. Tạo thông báo */
        $message = "Cập nhật thành công"; 
        /* 5. Chuyển hướng đến trang cần thiết */
        header("location:?ctrl=cam_xuc&act=index&message=$message");
        break;

    case "delete":
      // Chức năng xóa record 
      // 1. Tiếp nhận biến id của record cần xóa
      $ma_cam_xuc = $_GET['ma_cam_xuc'];
      // Ép kiểu
      settype($ma_cam_xuc,"int");
      /* 2. Gọi hàm xóa */
      deleteCamXuc($ma_cam_xuc);
      /* 3. Tạo thông báo */
      $message = "Đã xóa thành công";
      echo $message;
      /* 4. Chuyển đến trang cần thiết */
      header("location:?ctrl=cam_xuc&act=index&message=$message");
    break;
  }
?>
