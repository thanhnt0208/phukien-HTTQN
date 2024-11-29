<?php
include "init/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize input data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        $error_message = "Mật khẩu không khớp!";
    } else {
        // Password hashing for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $success_message = "Đăng ký thành công!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Ký Tài Khoản</title>
  <link rel="stylesheet" href="../public/css/dangky.css">
</head>
<body>
  <div class="form-container">
    <h1>ĐĂNG KÝ TÀI KHOẢN</h1>

    <form class="register-form" method="POST">
      <fieldset>
        <legend>THÔNG TIN TÀI KHOẢN</legend>
        
        <?php if (isset($error_message)): ?>
            <p class="error"><?= $error_message ?></p>
        <?php endif; ?>
        
        <?php if (isset($success_message)): ?>
            <p class="success"><?= $success_message ?></p>
        <?php endif; ?>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Nhập email của bạn" value="<?= isset($email) ? $email : '' ?>" required>
        
        <label for="fullname">Họ và Tên:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Nhập họ và tên" value="<?= isset($fullname) ? $fullname : '' ?>" required>
        
        <label for="phone">Điện Thoại:</label>
        <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" value="<?= isset($phone) ? $phone : '' ?>" required>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
        
        <label for="confirm-password">Xác nhận mật khẩu:</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Xác nhận mật khẩu" required>
        
        <div class="form-actions">
          <button type="submit" class="btn-submit">ĐĂNG KÝ</button>
          <button type="reset" class="btn-cancel">HỦY</button>
        </div>
      </fieldset>
    </form>
    <p>Bạn đã có tài khoản? <a href="../view/login.php">Đăng nhập tại đây</a></p>
  </div>
</body>
</html>

