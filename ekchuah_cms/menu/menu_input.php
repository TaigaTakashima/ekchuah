<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');



//selectにカテゴリーを表示

$sql="SELECT `category_id`, `category_name` FROM `category`";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}

require_once './tpl/menu_input.php';
?>

