<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php
    // 错误处理函数
    function customError($errno, $errstr,$file,$line,$context)
    {
        echo "<b>Error:</b> [$errno] $errstr $file $line .'<br>:'.$context<br>";
        echo "脚本结束";
        die();
    }

    // 设置错误处理函数
    // set_error_handler("customError",E_WARNING);
    
    // echo($test)

    // 触发错误
    $test=2;
    if ($test>1)
    {
        trigger_error("变量值必须小于等于 1",E_ALL);
    }

?>
</body>
</html>