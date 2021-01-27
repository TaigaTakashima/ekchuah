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
        <h2>ニュース編集</h2>
        <section id="form">
            <form action="news_edit_completed.php" method="POST" enctype="multipart/form-data">
            <?php foreach($news_list as $item): ?>
            <dl>
                <dt>
                    タイトル名
                </dt>
                <dd>
                    <input type="text" name="title" value="<?php echo $item['title']; ?>">
                </dd>
                <dt>
                    内容
                </dt>
                <dd>
                    <textarea name="content" cols="40" rows="5" ><?php echo $item['content']; ?></textarea>
                </dd>
                <dt>
                    画像
                </dt>
                <dd>
                    <input type="file" name="upload_file">
                </dd>
            </dl>
                <input type="hidden" name="news_id" value="<?php echo $item['news_id'];?>">
                <input type="Submit" value="登録">
                <?php endforeach; ?>
            </form>
        </section>
    </main>
</body>
</html>