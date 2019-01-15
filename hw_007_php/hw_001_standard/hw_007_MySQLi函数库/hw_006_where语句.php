<?php
$servername = "localhost";
$username = "root";
$password = "lxgzhw";
$dbname = "php_01";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM Persons
WHERE FirstName='John'");

while ($row = mysqli_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br>";
}
$conn->close();
?>