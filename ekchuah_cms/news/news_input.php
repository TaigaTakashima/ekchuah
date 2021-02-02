<?php

//確認画面でも戻るを押した場合の変数の格納
$title = "";
$content = "";

if(isset($_GET['back'])){
    //フォームの値を取得、値をsessionに格納
    session_start();
    $title = $_SESSION['title'];
    $content = $_SESSION['content'];
    unlink('tmp/'.$_SESSION['news_id'].'.jpg');
}

require_once 'tpl/news_input.php';
?>

