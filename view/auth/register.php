<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Ký Tài Khoản</title>
  <link rel="stylesheet" href="public/css/dangky.css">
</head>
<body>
  <div class="form-container">
    <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
    <p>Bạn đã có tài khoản? <a href="<?php echo $baseurl?>/login">Đăng nhập tại đây</a></p>
    <form class="register-form" action="postregister" method="POST">
      <fieldset>
        <legend>THÔNG TIN TÀI KHOẢN</legend>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Nhập email của bạn" value="<?= $_POST['email'] ?? ""?>">
        
        <label for="fullname">Họ và Tên:</label>
        <input type="text" id="fullname" name="name" placeholder="Nhập họ và tên" value="<?= $_POST['name'] ?? ""?>">
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="pass" placeholder="Nhập mật khẩu" value="<?= $_POST['pass'] ?? ""?>">
        
        <label for="re-pass">Nhập lại mật khẩu</label>
        <input type="password" name="re_pass" id="re_pass" placeholder="Nhập lại mật khẩu"/>

        <?php if(isset($errors) && count($errors)>0){?>
          <ul>
              <?php foreach($errors as $error){?>
                  <li style="color:red">                                      
                          <?php echo $error?>                                       
                  </li>
              <?php }?>
          </ul>  
          <?php }?>    
        <div class="form-actions">
          <button type="submit" name="submit" class="btn-submit">ĐĂNG KÝ</button>
          <button type="reset" class="btn-cancel">HỦY</button>
        </div>
      </fieldset>
    </form>
  </div>
</body>
</html>
