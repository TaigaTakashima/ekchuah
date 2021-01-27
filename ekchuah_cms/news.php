<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ニュース更新 | サイト管理システム</title>
</head>
<body>
    <header>
        <?php include 'header.html';?>
    </header>
    <div id="wrapper">
        <aside>
            <?php include 'nav.html';?>
        </aside>
        <main class="index_main">
            <h2>ニュース更新</h2>
            <section>
                <ul>
                    <li><a href="news/news_input.php">ニュース情報追加</a></li>
                    <li><a href="news/news_list.php">ニュース情報一覧</a></li>
                </ul>
            </section>
        </main>
    </div>
    <footer>

    </footer>
</body>
</html>