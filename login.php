<?php
// Tài khoản giả lập
$correct_username = "admin";
$correct_password = "1234";

// Nhận dữ liệu POST
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $correct_username && $password === $correct_password) {
    echo "✅ Đăng nhập thành công!";
} else {
    echo "❌ Sai tài khoản hoặc mật khẩu.";
}
?>
