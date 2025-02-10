<?php
$servername = "localhost";
$name = "root"; // Tên người dùng MySQL, thường là 'root' trên máy cục bộ
$password = ""; // Mật khẩu MySQL, mặc định thường là rỗng trên localhost
$database = "duan"; // Tên cơ sở dữ liệu

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $name, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
