<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>修改文章-前端快报</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = mysql_connect($servername,$username,$password);

    if (!$con){
        die('数据库连接失败: ' . mysql_error());
    }
    
    mysql_query("set names 'utf8'");
    mysql_select_db("phptest", $con);

    $id = $_GET['newsid'];

    if ($id) {
        $result = mysql_query("select * from news where newsid=".$id);
        $row = mysql_fetch_array($result);
    }else{
        $row = "";
    }
        
    if(isset($_GET['newstitle'])){
         // newsurl = '$_GET['newsurl']', newscontent = '$_GET['newscontent']'
        // $sql = "UPDATE `news` SET `newstitle`=\页面新改的\ WHERE newsid=3";
        $title = $_GET['newstitle'];
        $url = $_GET['newsurl'];
        $content = $_GET['newscontent'];
        
        $sql = "UPDATE news SET newstitle = '$title', newsurl = '$url', newscontent = '$content' WHERE newsid = '$id'";
        
        if(mysql_query($sql, $con)){
            echo "<script type='text/javascript'>window.location.href='index.php';</script>";
        }else{
            echo "<script type='text/javascript'>alert('操作失败')</script>";
        }
        
    }
    
?>
<h3 style="line-height:80px; text-align:center;">修改文章</h3>
<form action="update.php" method="get" class="form-horizontal" style="width:50%; margin:0 auto;">
<input type="hidden" name="newsid" value="<?php echo $row['newsid']?>" placeholder="">
    <div class="form-group">
        <label class="col-sm-2 control-label" for="">文章标题</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="newstitle" value="<?php echo $row['newstitle']?>" required="required" placeholder="文章标题">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="">文章URL</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="newsurl" value="<?php echo $row['newsurl']?>" required="required" placeholder="文章URL">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="">文章描述</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="newscontent" value="<?php echo $row['newscontent']?>" required="required" placeholder="文章描述">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for=""></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">修改</button>
        </div>
    </div>
</form>
</body>
</html>