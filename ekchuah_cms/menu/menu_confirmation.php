<?php
session_start();
//フォームの値を取得、値をsessionに格納
$_SESSION['menu_name'] = $_POST['menu_name'];
$_SESSION['menu_price'] = $_POST['menu_price'];
$_SESSION['category'] = $_POST['category'];
$_SESSION['endDate'] = $_POST['endDate'];
$_SESSION['category_name'] = $_POST['category_name'];



//画像の保存・画像名を最新のnews_idにするため
//news_idの取得・変数に格納
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
$sql = "SELECT menu_id FROM menu ORDER BY menu_id DESC LIMIT 1";
$ret = mysqli_query($link,$sql);
foreach($ret as $row){
    $_SESSION['menu_id'] = 
    $row['menu_id'];
}
//news_idに＋１
$_SESSION['menu_id']++;


//tmpフォルダに画像を一時的保存
$upload_file = $_FILES['upload_file'];

move_uploaded_file($upload_file['tmp_name'] , 'tmp/'.$_SESSION['menu_id'].'.jpg');


require_once './tpl/menu_confirmation.php';
?>
