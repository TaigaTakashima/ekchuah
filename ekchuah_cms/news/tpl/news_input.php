<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>ニュース情報追加 | サイト管理システム</title>
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
        <h2>ニュース追加</h2>
        <section id="form">
            <form action="news_confirmation.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>タイトル名</th>
                    <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
                </tr>
                <tr>
                    <th>内容</th>
                    <td><textarea name="content" cols="40" rows="5" ><?php echo $content; ?></textarea></td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td><input type="file" name="upload_file"></td>
                </tr>
                <tr class="table-btn">
                        <td><input type="Submit" value="登録"></td>
                        <td><a href="../news.php"><button class="btn-gray" type="button">戻る</button></a></td>
                </tr>
            </table>
            </form>
        </section>
    </main>
</body>
</html>