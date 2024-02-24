<?php
// ตรวจสอบว่ามีการส่งข้อมูลมาจากฟอร์มหรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // เก็บข้อมูลที่ผู้ใช้ป้อนในฟอร์ม
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ตรวจสอบว่า username และ password ถูกต้องหรือไม่
    // เงื่อนไขตัวอย่าง: ถ้า username เป็น "admin" และ password เป็น "password"
    if ($username === "admin" && $password === "password") {
        // ถ้าถูกต้อง นำผู้ใช้ไปยังหน้าหลักหรือหน้าอื่นๆ ตามที่คุณต้องการ
        header("Location: dashboard.php");
        exit;
    } else {
        // ถ้าไม่ถูกต้อง ให้กลับไปยังหน้า login.html หรือแสดงข้อความแจ้งเตือน
        echo "Invalid username or password. Please try again.";
    }
} else {
    // ถ้าไม่มีการส่งข้อมูลมาจากฟอร์ม ให้กลับไปยังหน้า login.html
    header("Location: login.html");
    exit;
}
?>