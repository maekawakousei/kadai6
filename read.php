

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border:solid;
            border:1px #000 solid;
            width:500px
        }
    </style>
</head>
<body>
<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');
$element=["投稿時間","名前","email","誕生日","お問い合わせ"];
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
    $value=explode("#",$str,5);
    // echo $value[0];
    echo "<div>";
    for($i=0;$i<5;$i++){
        echo $element[$i] ."   " . $value[$i] . "<br>";
    }
    echo "</div>";
};
?>
</body>
</html>