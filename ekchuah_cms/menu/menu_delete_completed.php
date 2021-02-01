<?php
session_start();
$menu_id = $_SESSION['menu_id'];
$menu_name = $_SESSION['menu_name'];
$menu_price = $_SESSION['menu_price'];
$category = $_SESSION['category'];
$endDate = $_SESSION['endDate'];

$display = $_SESSION['display'];

//戻るボタン押した場合
if(isset($_GET['back'])){
    header('Location: menu_list.php');
    exit;
}

$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');


//DBのdisplayを１に変更
if (isset($_SESSION['menu_id'])) {
    if($display == 0){
        $sql = "UPDATE `menu` SET display=1 WHERE menu_id = ".$menu_id.";";
    }else{
        $sql = "UPDATE `menu` SET display=0 WHERE menu_id = ".$menu_id.";";
    }
    mysqli_query($link, $sql);
    mysqli_close($link);
}else{
    echo '失敗';
    
}


//画像をtmpフォルダからimagesフォルダに移動
//ファイルに同じ名前があるかチェック（２回目の上書き保存をしないため）
/*
if( file_exists('./images/'.$news_id.'.jpg') ){
    //画像の削除
    unlink('tmp/'.$news_id.'.jpg');
}
*/

require_once './tpl/menu_delete_completed.php';
?>
