<?php
$servername = "localhost";
$username = "root"; // اسم المستخدم الافتراضي
$password = ""; // كلمة المرور الافتراضية
$dbname = "robot_control"; // اسم قاعدة البيانات

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direction = $_POST['direction'];

    $sql = "INSERT INTO directions (direction) VALUES ('$direction')";
    if ($conn->query($sql) === TRUE) {
        echo "Direction saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
