<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập Tài Khoản</title>
  <link rel="stylesheet" href="public/css/login.css">
  <link rel="stylesheet" href="fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="public/img/logokonen.png" alt="Phu Kien NTH">
    </div>
    <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
    <form class="login-form" method="POST" action="postlogin">
      <input type="email" name="email" id="your_name" placeholder="Email" value="<?= $_POST['email'] ?? ""?>">
      <input type="password" name="password" id="your_pass" placeholder="Mật Khẩu" value="<?= $_POST['password'] ?? ""?>">
      <div class="remember-me">
      <?php if(isset($errors) && count($errors)>0){?>
        <ul>
            <?php foreach($errors as $error){?>
                <li style="color:red">                                      
                        <?php echo $error?>                                       
                </li>
            <?php }?>
        </ul>  
        <?php }?>
      </div>
      <button type="submit" name="signin" id="signin" class="btn-login">Đăng Nhập</button>
      <div class="links">
        <a class="a1" href="#">Quên mật khẩu</a>
        <span class="a1">Hoặc đăng nhập qua</span>
        <a class="a1" href="<?php echo $baseurl?>/register">Đăng ký tại đây</a>
      </div>
      <div class="social-login">
        <a href="#" class="facebook">Facebook</a>
        <a href="#" class="google">Google</a>
      </div>
    </form>
  </div>
</body>
</html>
