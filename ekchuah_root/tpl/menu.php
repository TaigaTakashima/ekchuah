<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <script type="text/javascript"src="//code.typesquare.com/static/ZDbTe4IzCko%253D/ts106f.js"charset="utf-8"></script>
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5fc72d9d3b0841d0b8a51ef7e90393a3" charset="utf-8"></script>
    <title>Ek Chuah　エクチュア からほり「蔵」本店</title>
</head>
<body>
    <header>
        <nav>
            <h2><a href="index.php"><img src="img/logo_gnavi.png" alt="エクチュアのロゴ"></a></h2>
            <ul>
                <li><a href="index.php">ホーム<br><span>Home</span></a></li>
                <li><a href="concept.php">コンセプト<br><span>Concept</span></a></li>
                <li><a href="news.php">ニュース<br><span>News</span></a></li>
                <li><a href="menu.php">メニュー<br><span>Menu</span></a></li>
                <li><a href="gallary.php">ギャラリー<br><span>Gallery</span></a></li>
                <li><a href="access.php">アクセス<br><span>Access</span></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="firstview">
            <p>定番のチョコレートケーキから<br>
                季節限定のメニューを取り揃えて、<br>
                お待ちしております。</p>
            <h3>メニュー</h3>
            <img src="img/menu_firstview.png" alt="チョコミントパフェ">
        </section>
        <section id="menu">
            <ul>
                <?php foreach ($menu_list as $item):?>
                <li>
                    <img src="img/menu_-1.png" alt="">
                    <p><?php echo $item['menu_name'];?></p>
                    <p><?php echo $item['price'];?></p>
                </li>
                <?php endforeach;?>
            </ul>
        </section>
    </main>
    <footer>
        <h2 id="footer_inner"><img src="img/logo_footer.png" alt="エクチュアのロゴ"></h2>
        <section>
            <address id="footer_inner">
                〒542-0012<br>
                大阪市中央区谷町6-17-43　練−LEN- <br>
                06-4304-8077
            </address>
            <div id="footer_inner">
                平日<br>
                11：00～22：00（L.O 21：30）<br>
                日・祝日<br>
                11：00～21：00（L.O 20：30）<br>
                定休日<br>
                水曜日
            </div>
            <div class="copy">
                &copy;2020 Ek Chuah, All Rights Reserved.
            </div>
        </section>
    </footer>
</body>
</html>