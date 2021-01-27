<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="tpl/css/reset.css">
    <link rel="stylesheet" href="tpl/css/header.css">
    <link rel="stylesheet" href="tpl/css/index.css">
    <link rel="stylesheet" href="tpl/css/footer.css">
    <script src="js/jQuery-3.4.1.min.js"></script>
    <script type="text/javascript"src="//code.typesquare.com/static/ZDbTe4IzCko%253D/ts106f.js"charset="utf-8"></script>
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?5fc72d9d3b0841d0b8a51ef7e90393a3" charset="utf-8"></script>
    <title>Ek Chuah　エクチュア からほり「蔵」本店</title>
</head>
<body>
    <header>
        <section id="first-view">
            <h1><img src="img/title_text.png" alt="Ek Chuah Chocolatia"></h1>
            <p class="hero"><img src="tpl/img/home_firstview.png" alt="チョコレートケーキ"></p>
        </section>
        <nav class="site-nav">
            <h2><a href="index.php"><img src="tpl/img/logo_gnavi.png" alt="エクチュアのロゴ"></a></h2>
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
        <section id="concept">
            <p><img src="img/Concept01.png" alt="日本家屋風のお店"></p>
                <div id="txt">
                <h3>コンセプト<br><span>Concept</span></h3>
                <p>
                    日本家屋の落ち着いた雰囲気の中、<br>
                    ゆっくりとチョコレートを楽しんでいただけます。
                </p>
                <div class="container">
                    <a href="#" class="btn-open">More</a>
                </div><!-- /container -->
                </div><!--/txt-->
        </section><!--/concept-->
        <p class="chocolate"><img src="img/chocolate.png" alt=""></p>
        <section id="menu">
            <p><img src="img/menu_01.png" alt="チョコレートケーキ"></p>
            <p><img src="img/menu_02.png" alt="チョコミントパフェ"></p>
            <div id="txt">
                <h3>メニュー<br><span>Menu</span></h3>
                <p>
                    定番のチョコレートケーキから季節限定のメニューを取り揃えて、<br>
                    お待ちしております。
                </p>
                <div class="container">
                    <a href="menu.php" class="btn-open">More</a>
                </div><!-- /container -->
            </div><!--/txt-->
        </section><!--/menu-->
        <section id="gallery">
            <div id="txt">
                <h3>ギャラリー<br><span>Gallery</span></h3>
                <p>
                    空堀の古い町街並みが残る場所にエクチュア本店があります。<br>
                    ここ空堀は長屋や路地、お稲荷さんが数多く残されており、<br>
                    歴史ある大阪の暮らしを現在に色濃く残しています。
                </p>
                <div class="container">
                    <a href="#" class="btn-open">More</a>
                </div><!-- /container -->
            </div><!--/txt-->
            <p class="right"><img src="img/gallery00.png" alt=""></p>
            <ul>
                <li><img src="img/gallery01.png" alt="チョコレートケーキ"></li>
                <li><img src="img/gallery02.png" alt="店内の様子"></li>
                <li><img src="img/gallery03.png" alt="チョコレートケーキとコーヒー"></li>
            </ul>
        </section><!--gallery-->
        <section id="access">
            <p><img src="img/access.png" alt=""></p>
            <div id="txt">
                <h3>アクセス<br><span>Access</span></h3>
                <p>
                    エクチュア本店はこの空堀で古いお屋敷を再生してつくられた
                    複合ショップ。
                    「練(れん)」の一角にあり、<br>
                    敷地内の「蔵」にあたる部分で営業しています。
                </p>
                <div class="container">
                    <a href="#" class="btn-open">More</a>
                </div><!-- /container -->
            </div><!--/txt-->
    </section><!--access-->
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
    <script>//スクロール
        var _window = $(window),
    _header = $('.site-nav'),
    heroBottom;

_window.on('scroll',function(){
    heroBottom = $('.hero').height();
    if(_window.scrollTop() > heroBottom){
        _header.addClass('fixed');
    }
    else{
        _header.removeClass('fixed');
    }
});

_window.trigger('scroll');
    </script>
</body>
</html>