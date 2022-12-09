

<?php

$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$text = $_POST['text'];
$email=$_POST['email'];
$time= date("Y/m/d H:i");
$file=fopen("data/data.txt","a");
fwrite($file,$time . "#" . $name . "#" . $email . "#" . $birthPlace . "#" . $text ."\n");
fclose($file);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
