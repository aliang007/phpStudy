<?php 
    header("Content-Type: text/html;charset=utf-8");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysql_connect($servername,$username,$password);

    if (!$con){
        die('数据库连接失败: ' . mysql_error());
    }
    
    mysql_select_db("phptest", $con);
    mysql_query("set names 'utf8'");
    

    $sql="INSERT INTO news (newstitle, newsurl, newscontent) VALUES ('$_POST[newstitle]','$_POST[newsurl]','$_POST[newscontent]')";

    if (!mysql_query($sql,$con))
    {
        die('出错: ' . mysql_error());
    }
    
    echo "文章创建成功，正在跳转到列表页...";
    
    $url = "index.php";
    echo "<script type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";

    mysql_close($con)
    
?>