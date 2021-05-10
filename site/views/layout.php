<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FiveReview</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/menu.css">
	<link rel="stylesheet" href="../assets/css/emoij.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-4.5.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free-5.14.0-web/css/all.min.css">
	<script type="text/javascript" src="../assets/vendor/jquery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../assets/vendor/bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/srcipt.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            /* Lấy giá trị đầu vào khi có thay đổi */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("views/backend-search.php", {
                    term: inputVal
                }).done(function(data) {
                    // Hiển thị dữ liệu trả về trong trình duyệt
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        // Thiết lập giá trị đầu vào khi click vào result
        $(document).on("click", ".result p", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>
<style>
	.box-user {
		display: none;
		position:absolute; 
		top:70px; 
		left:0px;
		background-color: #3B3B98;
		padding: 10px 0 0 0;
		border-radius: 5px;
		border: 1px solid gray;
		transition: 2s;
	}
	.box-user li {
		padding: 5px;
	}
	.box-user li a{
		color: white;
	}
	#li-box-user {
		margin-right: 0;	
		width: 120px;
		min-height: 10px;
	}
	#li-box-user img {
		width: 30%;
		height: 100%;
		border-radius: 50%;
	}
	#li-box-user:hover ul{
		display: block;
	}
</style>
</head>

<body>
	<header id="header" class="">
		<div class="home">
			<div class="mogo-menu">

				<div class="container-xl">
					<nav class="navbar navbar-expand-lg navbar-dark p-0">
						<a class="navbar-brand logo emphasized-phrase" href="index.php">
							<img src="../assets/images/logo.jpg" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mogo-menu" aria-controls="navbar-mogo-menu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbar-mogo-menu">
							<ul class="navbar-nav menu-item ml-auto">
								<li class="nav-item">
									<a class="nav-link active" href="index.php">Trang chủ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="?ctrl=home&act=giai-dap">Giải đáp thắc mắc - yêu cầu xóa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="?ctrl=home&act=dieu-khoan">Điều khoản sử dụng</a>
								</li>
								<li class="nav-item" style="min-width: 50px; position:relative;">
										<?php 
										if( isset($_SESSION['admin']) ) {
											echo "
											<div id='li-box-user'> 
												<a>
													<img src='../assets/images/img_avatar.png'>
													<ul class='box-user'>
														<li><a href='?ctrl=home&act=xemhoso&id=".$_COOKIE['ma_user']."'>Xem hồ sơ</a></li>
														<li><a href='?ctrl=home&act=doipass'>Đổi mật khẩu</a></li>
														<li><a href='?ctrl=home&act=dangxuat'>Đăng xuất</a></li>
													</ul>
												</a>
											</div>
											";
										} else {
											echo "<a class='nav-link' href='?ctrl=home&act=dangnhap'>Đăng nhập / Đăng ký</a>";
										} 
										?> 
								</li>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>

		</div>
	</header>
	<!-- /header -->

	<?php require_once $view; ?>

	<!-- FOOTER -->
	<footer class="footers mt-4">
		<div class="boxs">
			<a class="back-to-top" href="javascript:void()"><i class="fas fa-chevron-up"></i></a>
		</div>

		<div class="container-xl ">
			<!--  <div class="level-left">
                <a class="fo" href="">Giải đáp thắc mắc |</a>
                <a class="fo" href="">Xóa riview |</a>
                <a class="fo" href="">Yêu cầu thêm công ty |</a>
                <a class="fo" href="">Điều khoản sử dụng</a>
            </div> -->
			<div class="row ">
				<div class="col-xs-12">
					<div class="container">
						<div class="row mt-4 mb-4">
							<div class="col-md-3 col-sm-3 col-xs-4 list">
								<div class="footerLink">
									<h5 class="color">Danh mục</h5>
									<ul class="list-unstyled">
										<li><a class="text-white" href="#"></a></li>
										<li><a class="text-white" href="#page1">Mới cập nhật</a></li>
										<li><a class="text-white" href="#page2">Top review</a></li>
										<li><a class="text-white" href="#page3">Trường nhiều review tốt</a></li>
										<li><a class="text-white" href="#page4">Trường nhiều review xấu</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-4 list">
								<div class="footerLink">
									<h5 class="color">Liên kết </h5>
									<ul class="list-unstyled">
										<li><a class="text-white" href="?ctrl=home&act=dieu-khoan">Điều khoản sử dụng</a></li>
										<li><a class="text-white" href="?ctrl=home&act=giai-dap">Giải đáp thắc mắc</a></li>
										<li><a class="text-white" href="chinh-sach-thanh-toan.html">Yêu cầu xóa</a></li>
										<li><a class="text-white" href="chinh-sach-giao-hang.html">Thêm trường học</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-4 list">
								<div class="footerLink">
									<h5 class="color">Liên hệ với chúng tôi </h5>
									<ul class="list-unstyled">
										<li class="text-white">Phone: 0999.888.777</li>
										<li><a class="text-white" href="mailto:thanhtung10112@gmail.com">Mail: thanhtung10112@gmail.com</a></li>
									</ul>
									<ul class="list-inline">
										<li><a href="https://www.facebook.com/HocLapTrinhWebTaiNha.ThayLoc"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
										<li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
										<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12 list">
								<div class="newsletter clearfix">
									<h5 class="color">Bản tin</h5>
									<p class="text-white">Nhập Email của bạn để chúng tôi cung cấp thông tin nhanh nhất cho bạn về những sản phẩm mới!!</p>
									<form class="mt-3" action="" method="POST">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Nhập email của bạn.." name="email">
											<button type="submit" class="btn btn-primary send pull-right">Gửi</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>