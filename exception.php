<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php
    
    // 创建一个有异常处理的函数
   /* function checkNum($number)
    {
        if($number>5)
        {
            throw new Exception("变量值必须小于等于 5");
        }
            return true;
    }
        
    // 在 try 块 触发异常
    try
    {
        checkNum(6);
        // 如果抛出异常，以下文本不会输出
        echo '如果输出该内容，说明 $number 变量';
    }
    // 捕获异常
    catch(Exception $e)
    {
        echo 'Message: ' .$e->getMessage();
    }*/
    
    
    
    // 类
   /* class customException extends Exception
    {
        public function errorMessage()
        {
            // 错误信息
            $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
            return $errorMsg;
        }
    }

    $email = "someone@example..com";

    try
    {
        // 检测邮箱
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
        {
            // 如果是个不合法的邮箱地址，抛出异常
            throw new customException($email);
        }
    }

    catch (customException $e)
    {
    //display custom message
    echo $e->errorMessage();
    }*/
    
    
    class customException extends Exception
    {
        public function errorMessage()
        {
            // 错误信息
            $errorMsg = $this->getMessage().' 不是一个合法的 E-Mail 地址。';
            return $errorMsg;
        }
    }

    $email = "someone@example.com";

    try
    {
        try
        {
            // 检测 "example" 是否在邮箱地址中
            if(strpos($email, "example") !== FALSE)
            {
                // 如果是个不合法的邮箱地址，抛出异常
                throw new Exception($email);
            }
        }
        catch(Exception $e)
        {
            // 重新抛出异常
            throw new customException($email);
        }
    }
    catch (customException $e)
    {
        // 显示自定义信息
        echo $e->errorMessage();
    }
?>
</body>
</html>