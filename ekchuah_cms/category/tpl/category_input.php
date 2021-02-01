<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>カテゴリー情報追加 | サイト管理システム</title>
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
        <h2>カテゴリー追加</h2>
        <section id="form">
            <form action="category_completed.php" method="GET">
            <table>
                <tr>
                    <th>カテゴリー名</th>
                    <td><input type="text" name="category_name"></td>
                </tr>
                <tr class="table-btn">
                    <td><input type="Submit" value="登録"></td>
                    <td><a href="../menu.php"><button class="btn-gray" type="button">戻る</button></a></td>
                </tr>
            </table>
            <input type="hidden" name="input">
            </form>
        </section>
    </main>
</body>
</html>