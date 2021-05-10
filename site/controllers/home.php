<?php
session_start();
require_once "models/md_home.php"; //Nạp models để có các hàm tương tác vs database

// Sử dụng 1 biến (đặt tên là $act) để nhận biết chức năng mà người dùng đang request. 
// Biến $act gồm các giá trị: chitiet(dùng để hiện chi tiết hàng hóa), cat(dùng để phân trang),
// timkiem(dùng để hiện kết quả tìm kiếm), index(trang chủ).
$act = "index"; //Chức năng mặc định 
if (isset($_GET["act"]) == true) $act = $_GET["act"]; // Tiếp nhận chức năng user request

switch ($act) {
    case "index": // Chức năng hiện trang chủ
        //1. Nạp view hiện trên trang chủ
        // $listnew = getSanPhamMoi();
        $ds = getAllSchools();
        $review = getAllreviews();
        $nhieuDramaList = getSchoolsBy('drama');
        $topTruongList = getSchoolsBy('top');
        $truongBuaList = getSchoolsBy('bua');
        $view = "views/home.php";
        require_once "views/layout.php";
        break;
    case "dieu-khoan":
        $view = "views/Dieu-khoan-su-dung.html";
        require_once "views/layout.php";
        break;

    case "giai-dap":
        $view = "views/giai-dap-thac-mac.html";
        require_once "views/layout.php";
        break;


    case "cat":
        if (!$_POST['page']) die("0");

        $page = (int)$_POST['page'];

        if ($page == 1) {
            $ds = getAllSchools();
            require_once "views/danh_sach_truong.php";
            // require_once "views/layout.php";
            // echo "asd";
        } else if ($page == 2) {
            $ds = getSchoolsBy('drama');
            require_once "views/danh_sach_truong.php";
        } else if ($page == 3) {
            $ds = getSchoolsBy('top');
            require_once "views/danh_sach_truong.php";
        } else {
            $ds = getSchoolsBy('bua');
            require_once "views/danh_sach_truong.php";
        }
        break;

    case "chitiet": // Chức năng hiển thị chi tiết hàng hóa
        //1. Tiếp nhận biến ma_hh chứa giá trị hàng hóa cần hiện
        $ma_school = 0;
        if (isset($_GET['ma_school']) == true) $ma_school = $_GET['ma_school'];
        //2. Kiểm tra hợp lệ giá trị vừa nhận đc
        settype($ma_school, "int");
        $row = gettruongByID($ma_school);
        $review = getAllreviews();
        $reviewByMaSchools = getAllReviewsByIDSchools($ma_school);
        $nam_sao = ratingReview(5, $ma_school);
        $bon_sao = ratingReview(4, $ma_school);
        $ba_sao = ratingReview(3, $ma_school);
        $hai_sao = ratingReview(2, $ma_school);
        $mot_sao = ratingReview(1, $ma_school);
        $tong_sao = $nam_sao + $bon_sao + $ba_sao + $hai_sao + $mot_sao;
        $ho_ten = getHoTenByID($_COOKIE['ma_user']);
        
        //4. Nạp view hiện record vừa lấy
        $view = "views/chitiet.php";
        require_once "views/layout.php";
        break;

    case "insertReview":
        $ho_ten = $_POST['ho_ten'];
        $chuc_vu = $_POST['chuc_vu'];
        $noi_dung = $_POST['noi_dung'];
        $rating = $_POST['star'];
        $ngay_review = $_POST['ngay_view'];
        $ma_user = 0;
        if(isset($_POST['ma_user'])) $ma_user = $_POST['ma_user'];
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
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        /*5. Chuyển hướng đến trang cần thiết  */
        break;


    case "dangBinhLuan":
        $noi_dung_comment = $_POST['noi_dung_comment'];
        $ho_ten = $_POST['ho_ten'];
        $ma_reviews = $_POST['ma_reviews'];
        $ma_user = $_POST['ma_user'];
        $ma_school = $_POST['ma_school'];
        insertComment($noi_dung_comment, $ho_ten, $ma_reviews, $ma_user, $ma_school);

        header("location: ".$_SERVER['HTTP_REFERER']);
        break;

    case "timkiem": // Chức năng hiện danh sách record theo từ khóa tìm kiếm 
        //1. Tiếp nhận biến tu_khoa cần tìm 
        $tu_khoa = $_POST['tu_khoa'];
        //2. Tiếp nhận biến page_num chứa trang thứ cần hiện
        //3. Kiểm tra hợp lệ giá trị của biến tu_khoa và page_num
        $tu_khoa = trim(strip_tags($_POST['tu_khoa']));
        //4. Gọi hàm getHanghoaByTuKhoa trong model lấy danh sách các record từ db 
        $ds = getHangHoaByTuKhoa($tu_khoa);
        //5. Nạp view hiện record vừa lấy
        $view = "views/ketquatim.php";
        require_once "layout.php";
        //6. Hiện link phân trang */    

    case "xemhoso":
        $id = $_GET['id'];
        $admin = getUsersByID($id);
        $view = "views/profile.php";
        require_once "views/layout.php";
        break;

    case "dangnhap":
        session_start();
        if (isset($_POST['btnDangNhap'])) {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $remember = $_POST['remember'];
            $sql = "select * from users where email='$email' and mat_khau='$mat_khau'";

            $result = queryOne($sql);
            $ma_user = $result['ma_user'];
            if ($result > 0) {
                if ($remember == "yes") {
                    setcookie('email', $email, time() + 600000);
                    setcookie('mat_khau', $mat_khau, time() + 600000);
                } else {
                    setcookie('email', $email, time() - 600000);
                    setcookie('mat_khau', $mat_khau, time() - 600000);
                }
                $_SESSION['admin-ma_user'] = $ma_user;
                $sqlUpdate = "update users set trang_thai_online=1 WHERE ma_user='$ma_user'";
                execute($sqlUpdate);
                $_SESSION['admin'] = $email;
                setcookie('ma_user', $ma_user, time() + 600000);

                header('location: index.php');
            } else {
                echo '<script> alert("Sai tài khoản hoặc mật khẩu") </script>';
            }
        }
        require_once "views/login.php";
        break;

    case "dangxuat":
        session_start();
        if(isset($_SESSION['admin'])) {
        $ma_user = $_SESSION['admin-ma_user'];
        $sqlUpdate = "update users set trang_thai_online=0 WHERE ma_user='$ma_user'";
        execute($sqlUpdate);
        unset($_SESSION['admin-ma_user']);
        unset($_SESSION['admin']);
        header('location: ?ctrl=home&act=dangnhap');
    }
        break;

    case "quenpass":
        //Nhúng view điền email và yêu cầu lấy lại mật khẩu
        $view = "views/quenpass.php";
        require_once "layout.php";
        break;

    case "guipass":
        //Tạo random mật khẩu mới
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

    case "doipass":
        if (isset($_POST['btnDoiPass'])) {

            //Tiếp nhận các giá trị từ form submit dổi pass
            $username = $_POST['email'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $mat_khau_moi = $_POST['mat_khau_moi'];
            $xac_nhan_mat_khau_moi = $_POST['xac_nhan_mat_khau_moi'];

            //Gọi hàm kiểm tra tài khoản đúng
            $num = checkDangNhap($email, $mat_khau);

            //Nếu hàm checkDangNhap true(>0) và xác nhận mật khẩu mới trùng khớp thì gọi hàm updatePass
            if ($num > 0 && $mat_khau_moi == $xac_nhan_mat_khau_moi) {
                //Gọi hàm updatePass
                $update = updatePass($username, $mat_khau_moi);
                if ($update) {
                    $thongbao = "<br> Đổi mật khẩu thành công <i class='fa fa-check-circle'></i> </br>";
                    $_SESSION['thongbao'] = $thongbao;
                    header("location:?act=dangnhap");
                } else {
                    echo '<script type="text/javascript">
                                swal({
                                    title: "Failed!",
                                    text: "Đổi mật khẩu không thành công! Vui lòng kiểm tra lại.",
                                    type: "error",
                                    timer: 2000,
                                    showConfirmButton: true
                                    }, function(){
                                        window.location.href = "index.php";
                                });
                            </script>';
                }
            } else {
                echo '<script type="text/javascript">
                            swal({
                                title: "Failed!",
                                text: "Đổi mật khẩu không thành công! Vui lòng kiểm tra lại.",
                                type: "error",
                                timer: 2000,
                                showConfirmButton: true
                                }, function(){
                            });
                        </script>';
            }
        }
        $view = "views/doipass.php";
        require_once "layout.php";
        break;

    case "dangky":
        //nạp view chứa form đăng ký, action của form sẽ trỏ đến chức năng dangky_
        $view = "views/dangky.php";
        require_once "layout.php";
        break;
    case "dangky_":
        //Tiếp nhận thông tin được submit từ form đăng ký
        $ho_ten = $_POST['ho_ten'];
        $e = $_POST['email'];
        $p1 = $_POST['mat_khau'];
        $p2 = $_POST['xac_nhan_mat_khau'];
        //Kiểm tra hợp lệ giá trị vừa nhận
        $thongbao = "";
        $thanhcong = true;
        if ($ho_ten == "") {
            echo '<script> alert("Họ tên chưa nhập") </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        } else if (strlen($e) < 2) {
            echo '<script> Họ tên quá ngắn </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        } else if (checkUserTonTai($e) == true) {
            echo '<script> alert("Email này đã được đăng ký") </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        }
        if (strlen($p1) < 3) {
            echo '<script> alert("Mật khẩu quá ngắn") </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        } else if ($p1 != $p2) {
            echo '<script> alert("Mật khẩu không trùng khớp") </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        }
        if ($e == "") {
            echo '<script> alert("Email chưa nhập") </script>';
            $thanhcong = false;
            // echo $thongbao;
            // die();
        } else if (filter_var($e, FILTER_VALIDATE_EMAIL) == FALSE) {
            echo '<script> alert("Email không đúng định dạng") </script>';
            $thanhcong = false;
            //  echo $thongbao;
            // die();
        } 
        if ($thanhcong == false) {
            exit();
        }
        echo "Thành công";
        //Gọi hàng lưu vào db
        if ($thanhcong == true) {
            luuThongTinDangKy($ho_ten, $p2, $e);
            setcookie('email', $email, time() + 600000);
            setcookie('mat_khau', $mat_khau, time() + 600000);
            setcookie('ma_user', $ma_user, time() + 600000);
            $_SESSION['admin'] = $e;
            $sqlUpdate = "update users set trang_thai_online=1 WHERE ma_user='$ma_user'";
            execute($sqlUpdate);
            header("location:" . SITE_URL);
        }
        //Định nghĩa hàm lưu vào db
        //Gửi mail kích hoạt tài khoản
        // require "PHPMailer-master/src/PHPMailer.php";
        // require "PHPMailer-master/src/SMTP.php";
        // $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
        // try {
        //     $mail->SMTPDebug = 2;  // Enable verbose debug output
        //     $mail->isSMTP();
        //     $mail->CharSet  = "utf-8";
        //     $mail->Host = 'smtp.gmail.com';  //SMTP servers
        //     $mail->SMTPAuth = true; // Enable authentication
        //     $mail->Username = 'kenbi.njr@gmail.com';  // SMTP username
        //     $mail->Password = 'kenbijunior2015';   // SMTP password
        //     $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        //     $mail->Port = 465;  // port to connect to                
        //     $mail->setFrom('kenbi.njr@gmail.com', 'TranQuocHuy');
        //     $mail->addAddress($e, $u); //mail và tên người nhận       
        //     $mail->isHTML(true);  // Set email format to HTML
        //     $mail->Subject = 'Kích hoạt tài khoản';
        //     $linkKH = "<a href='#'>Nhắp vào đây</a>";
        //     // ".$_SERVER['HTTP_HOST'].SITE_URL."/?act=kichhoat&id=%d&rd=%s
        //     $linkKH = sprintf($linkKH, $idUser, $randomKey);
        //     $mail->Body = "<h4>Chào mừng thành viên mới $u</h4>Kích hoạt tài khoản: " . $linkKH;
        //     $mail->send();
        //     echo 'Tài khoản đã lưu db và đã gửi thư kích hoạt';
        // } catch (Exception $e) {
        //     echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
        // }

        break;
    case "kiemtrauser":
        //Tiếp nhận username
        //Kiểm tra hợp lệ giá trị mới tiếp nhận
        if (isset($_GET['username']))  $username = trim(strip_tags($_GET['username']));
        else $username = "";
        if ($username == "") echo "<span class='badge badge-danger'>Username không có</span>";
        else if (checkUserTonTai($username)) echo "<span class='badge badge-danger'>Username đã có</span>";
        else  echo "<span class='badge badge-success'>Bạn có thể dùng username này</span>";
        break;
        //Gọi hàm kiểm tra user tồn tại trong db
        //trả về kết qủa kiểm tra
        break;
}
