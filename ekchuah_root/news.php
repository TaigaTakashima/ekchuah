<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');



//selectにカテゴリーを表示

$sql="SELECT * FROM news WHERE display = 0";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $news_list[] = $row;
}




require_once './tpl/news.php';
?>




<?php foreach ($news_list as $item):?>
<?php echo $item['title'];?>
<?php echo $item['price'];?>
<?php endforeach;?>