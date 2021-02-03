<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>カテゴリ情報削除 | サイト管理システム</title>
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
        <section id="confirmation">
                <h2>削除してよろしいですか？</h2>
                <form action="category_completed.php">
                    <table>
                        <tr>
                            <th>カテゴリー名</th>
                            <td><?php echo $category_name;?></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="delete">
                            <input type="hidden" name="category_name" value="<?php echo $category_name;?>">
                            <td><input type="Submit" value="削除"></td>
                            <td><a href="category_list.php"><button class="btn-gray" type="button">戻る</button></a></td>
                        </tr>
                    </table>
                </form>
            </section>
    </main>
</body>
</html>