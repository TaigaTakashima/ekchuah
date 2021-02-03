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
                    <?php if(isset($menu_list)==true):?>
                    <?php foreach ($menu_list as $item):?>
                    <tr>
                        <td><?php echo $item['menu_name'];?></td>
                        <td><?php echo $item['price'];?></td>
                        <?php if($item['category_id']==0):?>
                            <td>未選択</td>
                        <?php else:?>
                            <td><?php echo $item['category_name'];?></td>
                        <?php endif;?>
                        <td><?php echo date('Y年n月d日',strtotime($item['releas_date']));?></td>
                        <td><?php echo date('Y年n月d日',strtotime($item['end_date']));?></td>
                        <td><a href="menu_edit.php?menu_id=<?php echo $item['menu_id'];?>">編集</a></td>
                        <td><a href="menu_delete_confirmation.php?menu_id=<?php echo $item['menu_id'];?>"><?php echo ($item['display'] == 1)?'非公開':'公開';?></a></td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                </table>
            </section>
        </main>

</body>
</html>
