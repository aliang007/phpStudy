<html>
<head>
<meta charset="utf-8">
<title>mySql</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}else{
    
    echo "连接成功";
}

// mysql_close($conn)

?>
</body>
</html>