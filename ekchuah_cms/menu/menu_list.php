<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

$menu_display[]=null;
//終了日を判断しdisplayを変更
$sql="SELECT * FROM menu";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $menu_display[] = $row;
}
foreach($menu_display as $item){
    if($item['end_date'] < date("Y-m-d")){
        if($item['end_date'] != "0000-00-00"){
            $sql="UPDATE `menu` SET display=1 WHERE menu_id = ".$item['menu_id'].";";
            $ret = mysqli_query($link, $sql);
        }
    }
}

//メニューの情報を変数に格納
$sql="SELECT * FROM menu LEFT JOIN category ON menu.category_id = category.category_id ORDER BY menu_id";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $menu_list[] = $row;
}

require_once './tpl/menu_list.php';
?>

