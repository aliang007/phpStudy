
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php</title>
</head>
<body>
    <?php
      
        // echo readfile("test.php");

       /* $myfile = fopen("test.php", "W") or die("Unable to open file!");
        
$txt = "Bill Gates\n";
fwrite($myfile, $txt);

// echo fgets($myfile);
fclose($myfile);*/


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);

/*
        function logtxt($content){

            $files="txt".date('Ymd', time()).".log";

            $fp = fopen($files, "a+");
            fputs($fp, date('Y-m-d H:i:s', time()));
            fputs($fp, "  ".$content."\r\n");
            fclose($fp);
        }

        logtxt('1313213');*/

    ?>
<form action="upload_file.php" method="post"
    enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" /> 
    <br />
    <input type="submit" name="submit" value="Submit" />
</form>


<form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>