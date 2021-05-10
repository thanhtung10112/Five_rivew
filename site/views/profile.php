<div class="container-fluid p-5">
    <div class="row bg-title">
        <div class="col-lg-12">
            <h4 class="page-title">Quản lí tài khoản</h4>
            <ol class="breadcrumb">
                <li><a href="#">Five Review</a></li>
                <li class="active"> Sửa tài khoản</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="../assets/images/big/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="../assets/images/<?= $admin['avatar'] ?>" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">Tên tài khoản</h4>
                            <h5 class="text-white"><?= $admin['email'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>

                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>

                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-dribbble"></i></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <form action="?ctrl=users&act=update" method="post" class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ và tên</label>
                        <div class="col-md-12">
                            <input type="text" name="ho_ten" placeholder="<?= $admin['ho_ten'] ?>" value="<?= $admin['ho_ten'] ?>" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="<?= $admin['email'] ?>" value="<?= $admin['email'] ?>" class="form-control form-control-line" name="email" id="example-email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mật khẩu</label>
                        <div class="col-md-12">
                            <input id="pwd" type="password" name="mat_khau" value="<?= $admin['mat_khau'] ?>" class="form-control form-control-line">
                            <i id="eye" class="fas fa-eye"></i>
                            <script>
                                $("#eye").click(function() {
                                    var pwd = document.getElementById("pwd");
                                    if (pwd.getAttribute("type") == "password") {
                                        pwd.setAttribute("type", "text");
                                    } else {
                                        pwd.setAttribute("type", "password");
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Ghi chú</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line" placeholder="Type..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="hidden" name="ma_user" value="<?= $admin['ma_user'] ?>">
                            <button type="submit" name="btnUpdate" class="btn btn-success" style="background-color: #13dafe;">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->