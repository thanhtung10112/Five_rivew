<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../assets/css/login.css"/>
    <title>Đăng nhập và đăng ký</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="?ctrl=home&act=dangnhap" class="sign-in-form">
            <h2 class="title">Đăng nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" value="<?=$_COOKIE['email']?>"/>
              <input type="hidden" name="site" value="yes">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mật khẩu" name="mat_khau" value="<?=$_COOKIE['mat_khau']?>"/>
            </div>
            <div>
              <input id="remember" type="checkbox" name="remember" value="yes">
              <label for="remember">Nhớ tài khoản</label> <br>
            </div>
            <div>
              <a href="?ctrl=home&act=quenpass">Quên mật khẩu?</a> 
            </div>
            <input type="submit" value="Đăng nhập" name="btnDangNhap" class="btn solid" />
            <p class="social-text">Đăng nhập bằng tài khoản</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="?ctrl=home&act=dangky_" method="post" class="sign-up-form">
            <h2 class="title">Đăng ký</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="ho_ten" type="text" placeholder="Họ và tên" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="mat_khau" type="password" placeholder="Mật khẩu" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="xac_nhan_mat_khau" type="password" placeholder="Xác nhận mật khẩu" />
            </div>
            <input type="submit" name="btnDangKy" class="btn" value="Đăng ký" />
            <p class="social-text">Đăng nhập với tài khoản</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Bạn chưa có tài khoản ?</h3>
            <p>
              Sau khi đăng ký, bạn có thể nhận thông báo từ những review, comment, bày tỏ cảm xúc
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Bấm vào đây
            </button>
          </div>
          <img src="../assets/images/login/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Bạn đã có tài khoản?</h3>
            <p>
              Đăng nhập ngay tại đây
            </p>
            <button class="btn transparent" id="sign-in-btn">
              CLick here
            </button>
          </div>
          <img src="../assets/images/login/register.svg" class="image" alt="" />
     
        </div>
      </div>
    </div>

    <script src="../assets/js/app.js"></script>
  </body>
</html>
