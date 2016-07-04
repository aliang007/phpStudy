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
$con = mysql_connect($servername,$username,$password);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "数据库创建成功";
  }
else
  {
  echo "失败: " . mysql_error();
  }

mysql_close($con);
?>
</body>
</html>