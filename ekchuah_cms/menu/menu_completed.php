<?php
session_start();
$menu_id = $_SESSION['menu_id'];
$menu_name = $_SESSION['menu_name'];
$menu_price = $_SESSION['menu_price'];
$category = $_SESSION['category'];
$endDate = $_SESSION['endDate'];


$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
//メニュー登録
if (isset($_SESSION['menu_name'])) {
    $sql = "INSERT INTO menu(menu_name,category_id,price,end_date) VALUES ('$menu_name',$category,'$menu_price','$endDate')";
    mysqli_query($link, $sql);
    mysqli_close($link);
}else{
    echo '失敗';
}

//画像をtmpフォルダからimagesフォルダに移動
if(file_exists('./tmp/'.$menu_id.'.jpg')){
    rename('./tmp/'.$menu_id.'.jpg' , './images/'.$menu_id.'.jpg');
}

require_once './tpl/menu_completed.php';
?>
