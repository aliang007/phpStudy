<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>前端快报</title>
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
?>
    <h1 style="line-height:60px; text-align:center;">前端快报</h1>
    <table style="margin:0 auto; width:80%" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>标题</th>
                <th>描述</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                
                mysql_query("set names 'utf8'");
                mysql_select_db("phptest", $con);

                $result = mysql_query("SELECT * FROM news");

                while($row = mysql_fetch_array($result))
                {
                    echo '<tr>';
                            echo '<td>'.$row['newsid'].'</td>';
                            echo '<td><a target="_blank" href="'.$row['newsurl'].'">'.$row['newstitle'].'</a></td>';
                            echo '<td>'. $row['newscontent'].'</td>'. '<td><a style="margin-right:10px;" href="javascript:update('.$row['newsid'].');">修改</a><a href="javascript:del('.$row['newsid'].');">删除</a></td>';
                    echo '</tr>';
                  
                  
                }

            
        ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="right"><a href="add.html">我有文章推荐</a></td>
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript">
        function del(id){
            if ( confirm("确认删除") ) {
                
                window.location.href="delete.php?newsid="+id;    //本页面刷新  
            }
        }
        
        function update(id){
            window.location.href="update.php?newsid="+id;    //本页面刷新  
        }
        
    </script>
    
    <?php
    
    if(isset($_GET['newsid'])&&!empty($_GET['newsid'])){
        
        $newsid=intval($_GET['newsid']);
        $sql="delete from news where newsid = $newsid";
        
        if(mysql_query($sql)){
            echo "<script type='text/javascript'>window.location.href='delete.php';</script>";
        }else{
            echo "<script type='text/javascript'>alert('操作失败')</script>";
        }

    }
    mysql_close($con);

    ?>
</body>
</html>