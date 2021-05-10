<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" a name="description" content="My Admin is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" cont Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- validate form -->
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div> -->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="index.html"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="open-close hidden-xs hidden-lg waves-effect waves-light">
                        <i class="ti-arrow-circle-left ti-menu"></i>
                    </a>
                    <a href="http://localhost:99/five-review/site/index.php" target="_blank">Đến trang web <span class="glyphicon glyphicon-share-alt"></span></a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="ti-search"></i></a>
                    </form>
                </li>
                <a class="profile-pic" href="#"> <img src="../assets/images/images.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?=$_SESSION['admin']?></b> </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse ">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="ti-search"></i> </button>
                        </span>
                    </div>
                </li>
                <li>
                    <a href="?ctrl=home" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i>
                        Thống kê</a>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:;">
                        <i class="ti-user fa-fw"></i>
                        <span>Quản lí admin</span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a href="?ctrl=users&act=edit-admin&id=<?=$_COOKIE['ma_user']?>">Sửa tài khoản</a></li>
                        <li class="active"><a href="?ctrl=users&act=admin">Xem tài khoản</a></li>
                        <li class="active"><a href="log_out.php">Đăng xuất</a></li>
                        <li class="active"><a href="?ctrl=users&act=doipass">Đổi mật khẩu</a></li>
                    </ul>
                </li>
                <li>
                <li>
                    <a href="?ctrl=reviews" class="waves-effect"><i class="ti-comment-alt"></i> Quản lí review </a>
                </li>
                <li>
                    <a href="?ctrl=schools" class="waves-effect"><i class="ti-home"></i> Quản lí trường học</a>
                </li>
                <li>
                    <a href="?ctrl=users" class="waves-effect"><i class="ti-face-smile"></i> Quản lí người dùng</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Xin chào <?=$_SESSION['admin']?></h4>
                    <ol class="breadcrumb text-danger">
                        <li><a href="#">Five Review</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <?php require_once $view; ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <footer class="footer text-center"> 2020 &copy; Copyright Five Review </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="../assets/js/jquery.nicescroll.js"></script>
    <!--Morris JavaScript -->
    <script src="../assets/bower_components/raphael/raphael-min.js"></script>
    <script src="../assets/bower_components/morrisjs/morris.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../assets/js/myadmin.js"></script>
    <script src="../assets/js/dashboard1.js"></script>
</body>

</html>