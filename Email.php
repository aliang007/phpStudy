<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php

  if (isset($_REQUEST['email'])) { // 如果接收到邮箱参数则发送邮件
        // 发送邮件
        $email = $_REQUEST['email'] ;
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        mail("someone@example.com", $subject,
        $message, "From:" . $email);
        echo "邮件发送成功";
    } else { // 如果没有邮箱参数则显示表单
        echo "<form method='post' action='mail.php'>
        Email: <input name='email' type='text'><br>
        Subject: <input name='subject' type='text'><br>
        Message:<br>
        <textarea name='message' rows='15' cols='40'>
        </textarea><br>
        <input type='submit'>
        </form>";
    }

?>
</body>
</html>