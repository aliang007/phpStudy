
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php</title>
</head>
<body>
    <?php
        
        // 声明空变量
    $nameErr = $genderErr = '';
    $name = $gender = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST['name'])) {
            $nameErr = "名字是必须的";
        }else{
            $name = testFn($_POST['name']);
        }
        
        
        if (empty($_POST['gender'])) {
            $genderErr = "性别是必填！";
        }else{
            $gender = testFn($_POST['gender']);
        }
        
    }
    
    function testFn($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        
    ?>
<h2>PHP 表单验证实例</h2>
<p><span class="error">* 必填字段。</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   名字: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   性别:
   <input type="radio" name="gender" value="female">女
   <input type="radio" name="gender" value="male">男
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
    
echo "<h2>您的输入:</h2>";
echo $name;
echo "<br>";
echo $gender;
?>
</body>
</html>