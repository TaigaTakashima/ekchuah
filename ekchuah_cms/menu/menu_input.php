<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');



//確認画面でも戻るを押した場合の変数の格納
$menu_name = "";
$menu_price = "";
$category = "";
$endDate = "";
if(isset($_GET['back'])){
    //フォームの値を取得、値をsessionに格納
    session_start();
    $menu_name = $_SESSION['menu_name'];
    $menu_price = $_SESSION['menu_price'];
    $category = $_SESSION['category'];
    $endDate = $_SESSION['endDate'];
    unlink('tmp/'.$_SESSION['menu_id'].'.jpg');
}

//selectにカテゴリーを表示
$sql="SELECT `category_id`, `category_name` FROM `category`";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}

require_once './tpl/menu_input.php';
?>

