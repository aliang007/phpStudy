
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php</title>
</head>
<body>
    <?php
        /*if (3>2) {
            echo "php代码";
            
        }else{
            echo "php世界上最好的语言！";
        }*/
        
       /* include_once 'a.php';
        require_once 'a.php';
        
        $a = "<h1>php世界上最好的语言！</h1>";
        function test($value='')
        {
            global $a;
            echo $GLOBALS['b'];
        }
        test();
        echo $a;*/
     /*   
        function myTest($x){
            echo $x;
        }

        myTest(15);*/
        
        
        /*$cars=array("Volvo","BMW","Toyota");
        var_dump($cars);*/
        
     $xx="没懂";
       /* class Car
        {
            var $color;
            function Car($color="green") {
              $this->color = $color;
            }
            function what_color() {
              return $this->color;
            }
        }

        function print_vars($obj) {
           foreach (get_object_vars($obj) as $prop => $val) {
             echo "\t$prop = $val\n";
           }
        }

        // instantiate one object
        $herbie = new Car("white");

        // show herbie properties
        echo "\herbie: Properties</br>";
        print_vars($herbie);
    */
        
        /*// 区分大小写的常量名
        define("GREETING", "欢迎访问 Runoob.com", true);
        echo GREETING;    // 输出 "欢迎访问 Runoob.com"
        echo '<br>';
        echo greeting;   // 输出 "greeting"

*/
       /* 
        
        $txt1="Hello world!"; 
        $txt2="What a nice day!"; 
        echo $txt1 . " " . $txt2; 
        */
        
        // echo strlen(12313); 
       /* 
        $x = -123;
        echo -$x
        */
        
        
        // var_dump(intdiv(3, 2));
        /*
        
        $test = '菜鸟教程';
        // 普通写法
        $username = isset($test) ? $test : 'nobody';
        echo $username, PHP_EOL;

        // PHP 5.3+ 版本写法
        $username = $test ?: 'nobody';
        echo $username, PHP_EOL;
*/

        /*// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
        $username = $_GET['user'] ?? 'nobody';
        
        // 类似的三元运算符
        $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';*/
        
  /*      echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
        
        echo $_SERVER['REMOTE_ADDR']*/
        
        
        /*
        $i=1;
        do
        {
        $i++;
        echo "The number is " . $i . "<br>";
        }
        while ($i<=5);*/
        /*echo '这是第 “ '  . __LINE__ . ' ” 行</br>';

        echo '该文件位于 “ '  . __FILE__ . ' ” </br>';
        echo '该文件位于 “ '  . __DIR__ . ' ” </br>';
*/
        
       /* 
        class Base {
            public function sayHello() {
                echo 'Hello ';
            }
        }

        trait SayWorld {
            public function sayHello() {
                parent::sayHello();
                echo 'World!';
            }
        }

        class MyHelloWorld extends Base {
            use SayWorld;
        }

        $o = new MyHelloWorld();
        $o->sayHello();*/

       /* include_once 'a.php';
        $text = $GLOBALS['b'];
        echo $text;*/
        
        
        /*
        $families = array
    (
        "Griffin"=>array
    (
        "Peter",
        "Lois",
        "Megan"
    ),
        "Quagmire"=>array
    (
        "Glenn"
    ),
        "Brown"=>array
    (
        "Cleveland",
        "Loretta",
        "Junior"
    )
);
*/

/*
echo date("Y/m/d/l/N") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d");*/
        
    ?>
    
</body>
</html>