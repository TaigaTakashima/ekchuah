<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>ニュース情報一覧 | サイト管理システム</title>
</head>
<body>
    <header>
        <?php include '../header.html';?>
    </header>
    <div id="wrapper">
        <aside>
            <?php include '../nav.html';?>
        </aside>
        <main>
            <h2>ニュース一覧</h2>
            <section class="table news_table">
                <table>
                    <tr>
                        <th>タイトル</th>
                        <th>内容</th>
                        <th>日付</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php if(isset($news_list)==true):?>
                    <?php foreach ($news_list as $item):?>
                    <tr>
                        <td><?php echo $item['title'];?></td>
                        <td><?php echo $item['content'];?></td>
                        <td><?php echo date('Y年n月d日',strtotime($item['datetime']));?></td>
                        <td><a href="news_edit.php?news_id=<?php echo $item['news_id'];?>">編集</a></td>
                        <td><a href="news_delete_confirmation.php?news_id=<?php echo $item['news_id'];?>"><?php echo ($item['display'] == 1)?'非公開':'公開';?></a></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                </table>
            </section>
        </main>

</body>
</html>