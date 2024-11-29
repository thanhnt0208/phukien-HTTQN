<?php
include "init/config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Database connection (update with your own credentials)
    $conn = new mysqli("localhost", "name", "password", "database_name");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to find the user
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user info in session variables if login is successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];

            // Redirect to a dashboard or homepage
            header("Location: dashboard.php");
            exit;
        } else {
            $error_message = "Sai mật khẩu!";
        }
    } else {
        $error_message = "Tài khoản không tồn tại!";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập Tài Khoản</title>
  <link rel="stylesheet" href="../public/css/login.css">
  <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="../public/img/logokonen.png" alt="Phu Kien NTH">
    </div>
    <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
    
    <form class="login-form" method="POST">
      <?php if (isset($error_message)): ?>
          <p class="error"><?= $error_message ?></p>
      <?php endif; ?>
      
      <input type="email" name="email" placeholder="Email" required value="<?= isset($email) ? $email : '' ?>">
      <input type="password" name="password" placeholder="Mật Khẩu" required>
      
      <div class="remember-me">
        <label>
          <input type="checkbox" name="remember"> Ghi nhớ mật khẩu
        </label>
      </div>
      
      <button type="submit" class="btn-login">Đăng Nhập</button>
      
      <div class="links">
        <a class="a1" href="#">Quên mật khẩu</a>
        <span class="a1">Hoặc đăng nhập qua</span>
        <a class="a1" href="../view/dangky.php">Đăng ký tại đây</a>
      </div>
      
      <div class="social-login">
        <a href="#" class="facebook">Facebook</a>
        <a href="#" class="google">Google</a>
      </div>
    </form>
  </div>
</body>
</html>
