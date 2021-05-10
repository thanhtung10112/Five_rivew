<?php
  require_once "models/md_schools.php"; //nạp model để có các hàm tương tác db 
  $act = "index";//chức năng mặc định
  $message = "";
  if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request

  switch ($act) {
    case "index":
       /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
        $schoolsList = getAllSchools();
       /* 2. Nạp view hiện danh sách các record vừa lấy */
       $view = "views/ql_truonghoc.php";
       require_once "views/layout.php";
      break;

    case "addnew":
      /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
        $view = "views/schools-add.php";
        require_once "views/layout.php";
        break;

    case "edit":
      /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
      $ma_schools = $_GET['ma_schools'];
      /* 2. Kiểm tra hợp lệ giá trị id */
      settype($ma_schools,"int");
      /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
      $row = getSchoolsByID($ma_schools);
      /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
      $view = "views/schools-edit.php";
      require_once "views/layout.php";
      break;
      /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

    case "insert":           
      /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
        $ten_school = $_POST['ten_school'];
        $he = $_POST['he'];
        $so_luot_review = $_POST['so_luot_review'];
        $nam_thanh_lap = $_POST['nam_thanh_lap'];
        $hinh_anh = $_POST['hinh_anh'];
        $dia_chi = $_POST['dia_chi'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ten_school = trim(strip_tags($ten_school));
        $he = trim(strip_tags($he));
        $nam_thanh_lap = trim(strip_tags($nam_thanh_lap));
        $hinh_anh = trim(strip_tags($hinh_anh));
        $dia_chi = trim(strip_tags($dia_chi));
        settype($so_luot_review, "int");

       /* 3. Gọi hàm trong model chèn vào db */
        addNewSchools($ten_school, $he, $so_luot_review, $nam_thanh_lap, $hinh_anh, $dia_chi);

       /* 4. Tạo thông báo */
        $message = "Thêm trường thành công";  
       /*5. Chuyển hướng đến trang cần thiết 
       */
        header("location:?ctrl=schools&act=index&message=$message");
        break; 

    case "update":
        /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
        $ma_school = $_POST['ten_school'];
        $ten_school = $_POST['ten_school'];
        $he = $_POST['he'];
        $so_luot_review = $_POST['so_luot_review'];
        $nam_thanh_lap = $_POST['nam_thanh_lap'];
        $hinh_anh = $_POST['hinh_anh'];
        $dia_chi = $_POST['dia_chi'];

       /* 2. Kiểm tra hợp lệ các giá trị nhận được */
        $ten_school = trim(strip_tags($ten_school));
        $he = trim(strip_tags($he));
        $nam_thanh_lap = trim(strip_tags($nam_thanh_lap));
        $hinh_anh = trim(strip_tags($hinh_anh));
        $dia_chi = trim(strip_tags($dia_chi));
        settype($so_luot_review, "int");
        settype($ma_school, "int");

      /* 3. Gọi hàm cập nhật vào db */
      updateSchools($ma_school, $ten_school, $he, $so_luot_review, $nam_thanh_lap, $hinh_anh, $dia_chi);

      /* 4. Tạo thông báo */
      $message = "Cập nhật thành công"; 
      /* 5. Chuyển hướng đến trang cần thiết */
      header("location:?ctrl=schools&act=index&message=$message");
      break;

    case "delete":
      // Chức năng xóa record 
      // 1. Tiếp nhận biến id của record cần xóa
      $ma_schools = $_GET['ma_schools'];
      // Ép kiểu
      settype($ma_schools,"int");
      /* 2. Gọi hàm xóa */
      deleteSchools($ma_schools);
      /* 3. Tạo thông báo */
      $message = "Đã xóa thành công";
      echo $message;
      /* 4. Chuyển đến trang cần thiết */
      header("location:?ctrl=schools&act=index&message=$message");
    break;
  }
?>
