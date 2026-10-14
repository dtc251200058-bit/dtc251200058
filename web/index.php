<?php
$servername = "db";
$username = "forum_user";
$password = "forum_password";
$dbname = "forum_db";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối DB thất bại: " . $conn->connect_error);
}
echo "<h1>Chào mừng đến với Hệ thống Diễn đàn!</h1>";
echo "Kết nối CSDL MySQL thành công!";
?>