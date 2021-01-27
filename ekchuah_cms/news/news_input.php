<?php
session_start();
$title = "";
$content = "";
if(isset($_SESSION['back_flag']) && $_SESSION['back_flag'] == 1){
    $title = $_SESSION['title'];
    $content = $_SESSION['content'];
    $_SESSION['back_flag'] = 0;
}

require_once 'tpl/news_input.php';
?>

