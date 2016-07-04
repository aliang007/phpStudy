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

// 创建数据库表
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons 
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$con);

mysql_close($con);
?>
</body>
</html>