<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php

    // 一个月时间
    $expire=time()+60*60*24*30;
    
    // 添加cookie
    setcookie("user", "aliang", $expire);
    setcookie("fe", "studyFE");
    
    // 查看user值
    // echo $_COOKIE["user"];
    
    // 查看所有cookie
    // print_r($_COOKIE)

    /*function today(){
        date_default_timezone_set ('PRC');
        $a=date("Y");
        $b=date("m");
        $c=date("d");
        $d=date("G");
        $e=date("i");
        $f=date("s");
        return $a.'年'.$b.'月'.$c.'日'.$d.'时'.$e.'分'.$f.'秒';
    }
    echo today();*/
      
    // date_default_timezone_set('PRC'); //设置中国时区
    
    // 判断是否存在
    if (isset($_COOKIE["user"])) {
        echo '<h2>欢迎'.$_COOKIE['user'].'  今天是  '.date('Y-m-d H:i:s').'</h2>';
        
    }else{
        echo '<h2>普通游客</h2>';
    }
    
    
    session_start();
    // 存储 session 数据
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views']+1;
        
    }else{
        $_SESSION['views']=1;
    }
    
    
    // 删除session
    /*if(isset($_SESSION['views']))
    {
        unset($_SESSION['views']);
    }*/
    // session_destroy();

    
    // 检索 session 数据
    echo "浏览量：". $_SESSION['views'];
    

    // 删除cookie，设置一个为过去的值
    // setcookie("user", "", time()-3600);

?>
</body>
</html>