<?php
session_start();
$title = $_SESSION['title'];
$content = $_SESSION['content'];
$news_id = $_SESSION['news_id'];
$extension = $_SESSION['extension'];


//戻るボタン押した場合
if(isset($_GET['back'])){
    //画像の削除
    unlink('tmp/'.$news_id.'.jpg');
    $_SESSION['back_flag'] = 1;
    header('Location: news_input.php');
    exit;
}

$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');


//メニュー登録
if (isset($_SESSION['title'])) {
    $sql = "INSERT INTO news (title,content) VALUES ('$title','$content')";
    mysqli_query($link, $sql);
    mysqli_close($link);
}else{
    echo '失敗';
}

//画像をtmpフォルダからimagesフォルダに移動
rename('./tmp/'.$news_id.'.jpg' , './images/'.$news_id.'.jpg');

require_once './tpl/news_completed.php';
?>
