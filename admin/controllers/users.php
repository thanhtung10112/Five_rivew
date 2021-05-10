<?php
require_once "models/md_users.php"; //nạp model để có các hàm tương tác db 
$act = "index"; //chức năng mặc định
$message = "";
if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request

switch ($act) {
  case "index":
    /* Chức năng hiện danh sách record trong table
        1. Gọi hàm trong model lấy tất các các record từ db */
    $clientList = getAllClients();
    /* 2. Nạp view hiện danh sách các record vừa lấy */
    $view = "views/ql_nguoidung.php";
    require_once "views/layout.php";
    break;
  case "admin":
    $adminList = getAllAdmins();
    $view = "views/danh_sach_admin.php";
    require_once "views/layout.php";
    break;

  case "edit-admin":
    $id = $_GET['id'];
    $admin = getUsersByID($id);

    $view = "views/profile.php";
    require_once "views/layout.php";
    break;

  case "quenpass":
    //Tạo random mật khẩu mới
    require_once "views/forgot-password.php";
    break;

  case "doipass":
    //Tạo random mật khẩu mới
    if(isset($_POST['btnDoiPass'])) {
      $email = $_POST['email'];
      $mat_khau_cu = $_POST['mat_khau_cu'];
      $mat_khau_moi = $_POST['mat_khau_moi'];
      $xac_nhan_mat_khau_moi = $_POST['xac_nhan_mat_khau_moi'];
      $result = checkDangNhap($email, $mat_khau_cu);
      echo $result;
      if($mat_khau_moi == $xac_nhan_mat_khau_moi) {
        if($result > 0) {
          updatePass($email, $mat_khau_moi);
        }
        header("location: log_in.php");
      }
    }
    require_once "views/change-password.php";
    break;

  case "guipass":
      $newPass = md5(rand(0, 99));
      //Gọi hàm cập nhật mật khẩu mới
      $email = $_POST['email'];
      $username = $_POST['email'];
      if ($email == "") {
        echo "
            <script> alert('Bạn chưa điền email') </script>
        ";
        // header("location: ?act=quenpass");
      }

      updatePass($email, $newPass);

      //Gửi mật khẩu mới qua mail 
      require "PHPMailer-master/src/PHPMailer.php";
      require "PHPMailer-master/src/SMTP.php";
      $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
      try {
        $mail->SMTPDebug = 2;  // Enable verbose debug output
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'kenbi.njr@gmail.com';  // SMTP username
        $mail->Password = 'kenbijunior2015';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('kenbi.njr@gmail.com', 'TranQuocHuy');
        $mail->addAddress($email, $username); //mail và tên người nhận       
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Lấy lại mật khẩu';
        // $linkKH ="<a href='#'>Nhắp vào đây</a>";
        // ".$_SERVER['HTTP_HOST'].SITE_URL."/?act=kichhoat&id=%d&rd=%s
        // $linkKH = sprintf($linkKH, $idUser, $randomKey);
        $mail->Body = "<h4>Xin chào $username!</h4> <span style='font-size:20px'> Đây là mật khẩu mới của bạn </span> <h2>$newPass</h2>";
        $mail->send();
        echo 'Tài khoản đã lưu db và đã gửi thư kích hoạt';
      } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
      }

    break;

  case "addnew":
    /* Chức năng nạp view thêm record, 
       1.Nạp form,form này phải có method="post",action của form trỏ lên act insert */
    $view = "views/themuser.html";
    require_once "views/layout.php";
    break;

  case "edit":
    /* Chức năng hiện form edit 1 record
      1. Tiếp nhận biến id của record cần chỉnh (ma_hh, ma_loai,...) */
    $ma_user = $_GET['ma_user'];
    /* 2. Kiểm tra hợp lệ giá trị id */
    settype($ma_user, "int");
    /* 3. Gọi hàm lấy record cần chỉnh (1 record) */
    $row = getUsersByID($ma_user);
    /* 4. Nạp form chỉnh, trong form hiện thông tin của record,  */
    $view = "views/users-edit.php";
    require_once "views/layout.php";
    break;
    /* 5. Form này cũng phải có method là Post, action trỏ lên act update
       */

  case "insert":
    /* Đây là chức năng tiếp nhận dữ liệu từ form addnew (method POST)
       1. Tiếp nhận các giá trị từ form addnew */
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $mat_khau = $_POST['mat_khau'];
    $vai_tro = $_POST['vai_tro'];

    /* 2. Kiểm tra hợp lệ các giá trị nhận được */
    $ho_ten = trim(strip_tags($ho_ten));
    $email = trim(strip_tags($email));
    $mat_khau = trim(strip_tags($mat_khau));
    settype($vai_tro, "int");

    /* 3. Gọi hàm trong model chèn vào db */
    addNewUser($ho_ten, $email, $mat_khau, $vai_tro);

    /* 4. Tạo thông báo */
    $message = "Thêm user thành công";

    /*5. Chuyển hướng đến trang cần thiết 
       */
    header("location:?ctrl=users&act=edit-admin&id=1&message=$message");
    break;

  case "update":
    /* Đây là chức năng tiếp nhận dữ liệu từ form edit (method POST)
        1. Tiếp nhận các giá trị từ form edit */
    if (isset($_POST['btnUpdate'])) {
      $ma_user = $_POST['ma_user'];
      $ho_ten = $_POST['ho_ten'];
      $email = $_POST['email'];
      $mat_khau = $_POST['mat_khau'];

      /* 2. Kiểm tra hợp lệ các giá trị nhận được */
      $ho_ten = trim(strip_tags($ho_ten));
      $email = trim(strip_tags($email));
      $mat_khau = trim(strip_tags($mat_khau));
      settype($vai_tro, "int");

      /* 3. Gọi hàm cập nhật vào db */
      updateUser($ma_user, $ho_ten, $email, $mat_khau);
      /* 4. Tạo thông báo */
      $message = "Cập nhật thành công";
      /* 5. Chuyển hướng đến trang cần thiết */
      header("location:?ctrl=users&act=edit-admin&id=1&message=$message");
    }
    break;

  case "delete":
    // Chức năng xóa record 
    // 1. Tiếp nhận biến id của record cần xóa
    $ma_user = $_GET['ma_user'];
    // Ép kiểu
    settype($ma_user, "int");
    /* 2. Gọi hàm xóa */
    deleteUser($ma_user);
    /* 3. Tạo thông báo */
    $message = "Đã xóa thành công";
    echo $message;
    /* 4. Chuyển đến trang cần thiết */
    header("location:?ctrl=users&act=index&message=$message");
    break;
}
