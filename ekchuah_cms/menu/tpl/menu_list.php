<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>メニュー情報一覧 | サイト管理システム</title>
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
            <h2>メニュー一覧</h2>
            <section class="table">
                <table>
                    <tr>
                        <th>名称</th>
                        <th>価格</th>
                        <th>商品カテゴリ</th>
                        <th>投稿日</th>
                        <th>終了日</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($menu_list as $item):?>
                    <tr>
                        <td><?php echo $item['menu_name'];?></td>
                        <td><?php echo $item['price'];?></td>
                        <td><?php echo $item['category_id'];?></td>
                        <td><?php echo date('Y年n月d日',strtotime($item['releas_date']));?></td>
                        <td><?php echo date('Y年n月d日',strtotime($item['end_date']));?></td>
                        <td><a href="menu_edit.php?menu_id=<?php echo $item['menu_id'];?>">編集</a></td>
                        <td><a href="menu_delete_confirmation.php?menu_id=<?php echo $item['menu_id'];?>">削除</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </section>
        </main>

</body>
</html>
