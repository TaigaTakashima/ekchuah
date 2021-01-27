<?php
$news_id = $_POST['news_id'];
$title = $_POST['title'];
$content = $_POST['content'];

$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
//メニュー変更
if (isset($_POST['title'])) {
    $sql = "UPDATE news SET title='".$title."', content='".$content."' WHERE news_id=".$news_id;
    mysqli_query($link, $sql);
    mysqli_close($link);
}else{
    echo '失敗';
}

//画像をimagesフォルダに移動
//tmpフォルダに画像を一時的保存
$upload_file = $_FILES['upload_file'];
move_uploaded_file($upload_file['tmp_name'] , 'images/'.$news_id.'.jpg');

require_once './tpl/news_edit_completed.php';
?>
