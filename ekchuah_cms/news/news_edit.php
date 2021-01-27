<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//編集メニューの情報を変数に格納
$sql="SELECT * FROM news WHERE news_id=".$_GET['news_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $news_list[] = $row;
}

require_once './tpl/news_edit.php';
?>

