<?php
session_start();
//フォームの値を取得、値をsessionに格納
$_SESSION['title'] = $_POST['title'];
$_SESSION['content'] = $_POST['content'];


//news_idの取得・変数に格納
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
$sql = "SELECT news_id FROM news ORDER BY news_id DESC LIMIT 1";
$ret = mysqli_query($link,$sql);
foreach($ret as $row){
    $_SESSION['news_id'] = $row['news_id'];
}
//最後のnews_idに＋１
$_SESSION['news_id']++;


//tmpフォルダに画像を一時的保存
$upload_file = $_FILES['upload_file'];
move_uploaded_file($upload_file['tmp_name'] , 'tmp/'.$_SESSION['news_id'].'.jpg');

require_once './tpl/news_confirmation.php';
?>
