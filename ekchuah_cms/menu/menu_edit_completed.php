<?php
$menu_id = $_POST['menu_id'];
$menu_name = $_POST['menu_name'];
$menu_price = $_POST['menu_price'];
$category = $_POST['category'];
$endDate = $_POST['endDate'];

$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
//メニュー登録
if (isset($_POST['menu_name'])) {
    $sql = "UPDATE menu SET menu_name='".$menu_name."', price=".$menu_price.", category_id=".$category.", releas_date=releas_date, end_date='".$endDate."' WHERE menu_id=".$menu_id;
    mysqli_query($link, $sql);
}else{
    echo '失敗';
}

//category_nameをDBから取得
$sql = "SELECT * FROM category WHERE category_id=".$category;
$ret = mysqli_query($link,$sql);
foreach($ret as $row){
    $category_name= 
    $row['category_name'];
}



//画像をimagesフォルダに移動
//tmpフォルダに画像を一時的保存
$upload_file = $_FILES['upload_file'];
move_uploaded_file($upload_file['tmp_name'] , 'images/'.$menu_id.'.jpg');

require_once './tpl/menu_edit_completed.php';
?>
