<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/lib/getmdl-select.min.css/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="../assets/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="../assets/css/application.min.css">
    <!-- endinject -->

</head>

<body>
    <?php
    require_once "../system/database.php";
    session_start();
    if (isset($_POST['btnDangNhap'])) {
        $site = $_POST['site'];
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $remember = $_POST['remember'];
        $sql = "select * from users where email='$email' and mat_khau='$mat_khau'";
        
        $result = queryOne($sql);
        $ma_user = $result['ma_user'];
        if ($result > 0) {
            if($remember == "yes") {
                setcookie('email', $email, time() + 600000);
                setcookie('mat_khau', $mat_khau, time() + 600000);
            }
            else {
                setcookie('email', $email, time() - 600000);
                setcookie('mat_khau', $mat_khau, time() - 600000);
            }
            $_SESSION['admin-ma_user'] = $ma_user;
            $sqlUpdate = "update users set trang_thai_online=1 WHERE ma_user='$ma_user'";
            execute($sqlUpdate);
            $_SESSION['admin'] = $email;
            setcookie('ma_user', $ma_user, time() + 600000);
            if($site = "yes") {
                header('location: index.php');
            }
            else {
            header('location:index.php');
            }
        } else {
            echo '<script> alert("Sai tài khoản hoặc mật khẩu") </script>';
        }
    }
    ?>
    <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">FIVE REVIEW</span>
                        </div>
                        <form id="formlogin" action="#" method="post">
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <span class="login-name text-color--white">Đăng nhập</span>
                                <span class="login-secondary-text text-color--smoke">Nhập các trường để đăng nhập vào FIVEREVIEW</span>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input name="email" value="<?=$_COOKIE['email']?>" class="mdl-textfield__input" type="text" id="e-mail">
                                    <label class="mdl-textfield__label" for="e-mail">Email</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label full-size">
                                    <input name="mat_khau" value="<?=$_COOKIE['mat_khau']?>" class="mdl-textfield__input" type="password" id="password">
                                    <label class="mdl-textfield__label" for="password">Mật khẩu</label>
                                </div>
                                <input id="remember" type="checkbox" name="remember" value="yes">
                                <label for="remember">Nhớ tài khoản</label> <br>
                                <a href="forgot_password.php">Quên mật khẩu?</a> 
                            </div>
                            <input type="submit" name="btnDangNhap" value="Đăng nhập" class="mdl-button mdl-cell--12-col  mdl-js-button mdl-button--raised color--light-blue">
                            </input>        
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </main>
    </div>

    <!-- inject:js -->
    <script src="../assets/js/d3.min.js"></script>
    <script src="../assets/js/getmdl-select.min.js"></script>
    <script src="../assets/js/material.min.js"></script>
    <!-- <script src="js/nv.d3.min.js"></script>
<script src="js/layout/layout.min.js"></script>
<script src="js/scroll/scroll.min.js"></script>
<script src="js/widgets/charts/discreteBarChart.min.js"></script>
<script src="js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="js/widgets/charts/stackedBarChart.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script> -->
    <!-- endinject -->

</body>

</html>
