<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];

    $to = "thuanhm.spkt@gmail.com"; // Địa chỉ email người nhận
    $subject = "Email từ Form gửi email";
    $message = "Tên: $name\n";
    $message = "Tiêu đề: $subject\n";
    $message .= "Nội dung:\n$message";

    $headers = "From: $email"; // Địa chỉ email người gửi

    // Gửi email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email đã được gửi thành công.";
    } else {
        echo "Có lỗi xảy ra khi gửi email.";
    }
}
?>