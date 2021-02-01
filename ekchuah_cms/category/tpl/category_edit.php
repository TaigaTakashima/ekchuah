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
            <form action="category_completed.php" method="GET">
            <table>
                <tr>
                    <th>カテゴリー名</th>
                    <?php foreach($category_list as $item): ?>
                        <td><input type="text" name="category_name" value="<?php echo $item['category_name'];?>"></td>
                        <input type="hidden" name="category_id" value="<?php echo $item['category_id'];?>">
                    <?php endforeach;?>

                </tr>
                <tr class="table-btn">
                    <td><input type="Submit" value="登録"></td>
                    <td><a href="category_list.php"><button class="btn-gray" type="button">戻る</button></a></td>
                </tr>
            </table>
            <input type="hidden" name="edit">
            </form>
        </section>
    </main>
</body>
</html>