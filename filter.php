<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php


   /* $int = "123abc";

    if(!filter_var($int, FILTER_VALIDATE_INT))
    {
        echo($int."不是一个合法的整数");
    }
    else
    {
        echo($int."是个合法的整数");
    }
    
    
    
    
    if(!filter_has_var(INPUT_GET, "email"))
    {
        echo("没有 email 参数");
    }
    else
    {
        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
        {
            echo "不是一个合法的 E-Mail";
        }
        else
        {
            echo "是一个合法的 E-Mail";
        }
    }    
    
    */
    
   /* 
    $filters = array
    (
        "name" => array
        (
            "filter"=>FILTER_SANITIZE_STRING
        ),
        "age" => array
        (
            "filter"=>FILTER_VALIDATE_INT,
            "options"=>array
            (
                "min_range"=>1,
                "max_range"=>120
            )
        ),
        "email"=> FILTER_VALIDATE_EMAIL
    );

    $result = filter_input_array(INPUT_GET, $filters);

    if (!$result["age"])
    {
        echo("年龄必须在 1 到 120 之间。<br>");
    }
    elseif(!$result["email"])
    {
        echo("E-Mail 不合法<br>");
    }
    else
    {
        echo("输入正确");
    }*/
    
    
    //callback
    /*function convertSpace($string)
    {
        return str_replace("_", ".", $string);
    }

    $string = "www_baidu_com!";

    echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));
    */
?>
</body>
</html>