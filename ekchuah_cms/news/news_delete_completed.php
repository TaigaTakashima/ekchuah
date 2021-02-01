<?php
session_start();
$title = $_SESSION['title'];
$content = $_SESSION['content'];
$news_id = $_SESSION['news_id'];

$display = $_SESSION['display'];

//戻るボタン押した場合
if(isset($_GET['back'])){
    header('Location: news_list.php');
    exit;
}

$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');


//DBのdisplayを１に変更
if (isset($_SESSION['news_id'])) {
    if($display == 0){
        $sql = "UPDATE `news` SET display=1 WHERE news_id = ".$news_id.";";
    }else{
        $sql = "UPDATE `news` SET display=0 WHERE news_id = ".$news_id.";";
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

require_once './tpl/news_delete_completed.php';
?>
