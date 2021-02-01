<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//編集メニューの情報を変数に格納
$sql="SELECT * FROM menu WHERE menu_id=".$_GET['menu_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $menu_list[] = $row;
}



//SESSIONに変数を格納
session_start();
$_SESSION['menu_id'] = $_GET['menu_id'];
foreach($menu_list as $item){
    $_SESSION['menu_name'] = $item['menu_name'];
    $_SESSION['menu_price'] = $item['price'];
    $category_id = $item['category_id'];
    $_SESSION['endDate'] = $item['end_date'];
    $_SESSION['display'] = $item['display'];
}

//非公開・公開を変数に格納
if($_SESSION['display'] == 0){
    $display = "非公開";
}else{
    $display = "公開";
}

//カテゴリーの情報を変数に格納
$sql="SELECT * FROM category WHERE category_id = $category_id";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}
foreach($category_list as $item){
    $_SESSION['category'] = $item['category_name'];
}

require_once './tpl/menu_delete_confirmation.php';
?>
