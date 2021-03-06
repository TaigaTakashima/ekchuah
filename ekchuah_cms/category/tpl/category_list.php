<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>カテゴリ情報一覧 | サイト管理システム</title>
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
            <h2>カテゴリ一覧</h2>
            <section class="table">
                <table>
                    <tr>
                        <th>カテゴリ名</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php if(isset($category_list)==true):?>
                    <?php foreach ($category_list as $item):?>
                    <tr>
                        <td><?php echo $item['category_name'];?></td>
                        <td><a href="category_edit.php?category_id=<?php echo $item['category_id'];?>">編集</a></td>
                        <td><a href="category_delete.php?category_id=<?php echo $item['category_id'];?>">削除</a></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                </table>
            </section>
        </main>

</body>
</html>
