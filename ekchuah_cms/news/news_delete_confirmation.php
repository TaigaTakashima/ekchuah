<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//編集メニューの情報を変数に格納
$sql="SELECT * FROM news WHERE news_id=".$_GET['news_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $news_list[] = $row;
}

//SESSIONに変数を格納
session_start();
$_SESSION['news_id'] = $_GET['news_id'];
foreach($news_list as $item){
    $_SESSION['title'] = $item['title'];
    $_SESSION['content'] = $item['content'];
}
require_once './tpl/news_delete_confirmation.php';
?>
