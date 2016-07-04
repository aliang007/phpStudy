<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php


 /*$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
 */
 
 // echo date('m/d/Y h:i:s p');

    class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthdate = "";
   }
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));
   
   $arrList = json_encode($e);
   // echo $arrList;
   
   
    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));
   var_dump(json_decode($json, true));
   
   
?>
</body>
</html>