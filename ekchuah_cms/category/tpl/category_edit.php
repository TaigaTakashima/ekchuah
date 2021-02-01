<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>カテゴリ情報編集 | サイト管理システム</title>
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
        <h2>カテゴリー編集</h2>
        <section id="form">
            <form action="category_complete.php" method="GET">
            <dl>
                <dt>
                    カテゴリー名
                </dt
                <?php foreach($category_list as $item): ?>>
                <dd>
                    <input type="text" name="category_name" value="<?php echo $item['menu_name'];?>">
                </dd>
                <?php endforeach;?>
            </dl>
                <input type="Submit" value="登録">
            </form>
        </section>
    </main>
</body>
</html>