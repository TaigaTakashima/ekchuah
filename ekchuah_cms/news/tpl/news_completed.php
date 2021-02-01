<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="././../css/reset.css">
    <link rel="stylesheet" href="././../css/style.css">
    <title>ニュース情報編集完了 | サイト管理システム</title>
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
            <h2>登録しました</h2>
            <section>
                <ul>
                    <li><?php echo $title;?></li>
                    <li><?php echo $content;?></li>
                    <li><a href="news_list.php"><button class="btn-gray" type="button">戻る</button></a></li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>