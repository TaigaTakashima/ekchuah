<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tpl/css/reset.css">
    <link rel="stylesheet" href="tpl/css/style.css">
    <link rel="stylesheet" href="tpl/css/access.css">
    <link rel="stylesheet" href="tpl/css/header.css">
    <link rel="stylesheet" href="tpl/css/footer.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="tpl/js/jQuery-3.4.1.min.js"></script>
    <title>Ek Chuah　エクチュア からほり「蔵」本店</title>
</head>
<body>
    <div id="wrapper">
    <header>
        <a class="menu">
            <span class="menu__line menu__line--top"></span>
            <span class="menu__line menu__line--center"></span>
            <span class="menu__line menu__line--bottom"></span>
        </a>
        <nav class="gnav">
            <div class="gnav__wrap">
                <h2><a href="./index.php"><img src="tpl/img/logo_gnavi.png" alt="エクチュアのロゴ"></a></h2>
                <ul class="gnav__menu">
                    <li class="gnav__menu__item"><a href="./index.php">ホーム<br><span>Home</span></a></li>
                    <li class="gnav__menu__item"><a href="./concept.php">コンセプト<br><span>Concept</span></a></li>
                    <li class="gnav__menu__item"><a href="./news.php">ニュース<br><span>News</span></a></li>
                    <li class="gnav__menu__item"><a href="./menu.php">メニュー<br><span>Menu</span></a></li>
                    <li class="gnav__menu__item"><a href="./gallery.php">ギャラリー<br><span>Gallery</span></a></li>
                    <li class="gnav__menu__item"><a href="./access.php">アクセス<br><span>Access</span></a></li>
                </ul>
            </div><!--gnav-wrap-->
        </nav>
    </header>
<section id="access-sec01">
    <h2>アクセス</h2>
    </p>
    <p class="mess">大阪・心斎橋から東へ15分。<br>
        エクチュア本店はこの空堀で古いお屋敷を再生して作られた複合ショップ「練(れん)」の一角にあり、<br>
        敷地内の「蔵」にあたる部分で営業しています。
    </p>
</section>



<div class="map">
    <img src="tpl/img/access_googlemap.png" alt="">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10417.415986994063!2d135.50810152533484!3d34.67287255175005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4d28bb0f21e992!2z44Ko44Kv44OB44Ol44Ki!5e0!3m2!1sja!2sjp!4v1612156704068!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<section id="access-sec02">
    <div class="access-sec02-item"><img src="tpl/img/pattern-2.png" alt=""></div>
    <div class="access-sec02-item02">
        <p>地下鉄長堀鶴見緑地線 松屋町駅3号出口右手石段上がりすぐ。</p>
        <ul>
            <li>【営業時間】</li>
            <li> 平　日/11:00～22:00 (L.O 21:30)</li>
            <li>日・祝日/11:00～21:00(L.O 20:30)</li>
        </ul>

        <ul>
            <li>【定休日】</li>
            <li>水曜日</li>
        </ul>

        <ul>
        <li class="del">【電話番号】</li>
            <li>06-4304-8077</li>
        </ul>

        <ul>
            <li class="del">【住所】</li>
            <li class="adrs">大阪市中央区谷町6-17-43 練-LEN-</li>

            <a href="https://www.google.com/maps/place/%E3%82%A8%E3%82%AF%E3%83%81%E3%83%A5%E3%82%A2/@34.6752325,135.5123437,20.13z/data=!4m12!1m6!3m5!1s0x6000e7396d05534b:0xe4d28bb0f21e992!2z44Ko44Kv44OB44Ol44Ki!8m2!3d34.675237!4d135.5125722!3m4!1s0x6000e7396d05534b:0xe4d28bb0f21e992!8m2!3d34.675237!4d135.5125722?hl=ja">
            googleマップ表示
            </a>
        </ul>
    </div>
    <div class="access-sec02-item"><img src="tpl/img/pattern-2.png" alt=""></div>
</section>

<footer>
    <h2 id="footer_inner"><img src="tpl/img/logo_footer.png" alt="エクチュアのロゴ"></h2>
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
    _header = $('.gnav'),
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

//gnavi
$('.menu').on('click',function(){
    $('.menu__line').toggleClass('active');
    $('.gnav').fadeToggle();
});
    </script>
    
    <script>
    $(function(){
        let setElm = $('.loopSlider'),
        moveInterval = 3,
        slideTimeBase = 10,
        spWidth = 768,
        spSpeed = 3;
     
        $(window).on('load', function(){
            setElm.each(function(){
                let self = $(this),
                selfWidth = self.innerWidth(),
                findUl = self.find('ul'),
                findLi = findUl.find('li'),
                findLink = findLi.find('a'),
                listCount = findLi.length;
     
                listWidth = findLi.outerWidth();
                loopWidth = listWidth * listCount;
     
                findUl.wrapAll('<div class="loopSliderWrap" />');
                let selfWrap = self.find('.loopSliderWrap');
     
                setElm.css({visibility:'visible',opacity:'0'}).animate({opacity:'1'},500);
     
                if(loopWidth > selfWidth){
                    findUl.css({width:loopWidth}).clone().appendTo(selfWrap).clone().prependTo(selfWrap);
     
                    selfWrap.css({left:'-' + loopWidth + 'px'});
     
                    setSlideTime();
                    timerLeft();
     
                    $(window).on('resize', function(){
                        clearInterval(setTimer);
                        setSlideTime();
                        timerLeft();
                    }).resize();
     
                    function setSlideTime() {
                        if(window.innerWidth > spWidth){
                            slideTime = slideTimeBase;
                        } else {
                            slideTime = slideTimeBase*spSpeed;
                        }
                    }
     
                    function timerLeft(){
                        setTimer = setInterval(function(){loopPositionLeft()},slideTime);
                    };
     
                    function loopPositionLeft(){
                        listWidth = findLi.outerWidth();
                        loopWidth = listWidth * listCount;
     
                        self.find('ul').css({width:loopWidth});
                        selfWrap.css({width:loopWidth*3}).stop().animate({left:'-=' + (moveInterval) + 'px'},slideTime,'linear',function(){
                            let posLeft = parseInt(selfWrap.css('left')),
                            widthCal = (loopWidth)-((loopWidth)*3);
                            if (posLeft <= widthCal) {
                                let calCat = posLeft - widthCal;
                                //alert(calCat)
                                selfWrap.css({left:'-' + (loopWidth - calCat) + 'px'});
                            }
                        });
                        return false;
                    };
     
                    function myHandler(e){
                        e.preventDefault();
                    }
     
                    let isTouch = ('ontouchstart' in window),
                    ua = navigator.userAgent;
     
                    selfWrap.on({
                        'touchstart mousedown': function(e){
                            if(!(ua.search(/iPhone/) != -1 || ua.search(/iPad/) != -1 || ua.search(/Macintosh/) != -1 && 'ontouchend' in document || ua.search(/iPod/) != -1 || ua.search(/Android/) != -1)){
                                e.preventDefault();
                                $(this).find('a').off('click', myHandler);
                            }
                            if(selfWrap.is(':animated')){
                                clearInterval(setTimer);
                            }
                            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                            this.leftBegin = parseInt($(this).css('left'));
                            this.left = parseInt($(this).css('left'));
                            this.touched = true;
                        },
                        'touchmove mousemove': function(e){
                            if(!this.touched){return;}
                            if(!(ua.search(/iPhone/) != -1 || ua.search(/iPad/) != -1 || ua.search(/Macintosh/) != -1 && 'ontouchend' in document || ua.search(/iPod/) != -1 || ua.search(/Android/) != -1)){
                                e.preventDefault();
                                $(this).find('a').on('click', myHandler);
                            }
                            if(selfWrap.is(':animated')){
                                clearInterval(setTimer);
                            }
                            this.left = this.left - (this.pageX - (isTouch ? event.changedTouches[0].pageX : e.pageX) );
                            this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                            $(this).css({left:this.left});
                        },
                        'touchend mouseup mouseout': function(e){
                            if (!this.touched) {return;}
                            this.touched = false;
     
                            outLeft = parseInt($(this).css('left'));
                            if(outLeft < (loopWidth)-((loopWidth)*3)){
                                $(this).css({left: outLeft - (loopWidth-(loopWidth*2)) + 'px'});
                            }
                            if(outLeft > (loopWidth)-((loopWidth)*2)){
                                $(this).css({left: outLeft + (loopWidth-(loopWidth*2)) + 'px'});
                            }
     
                            timerLeft();
                            return false;
                        }
                    });
     
                    if(ua.search(/iPhone/) != -1 || ua.search(/iPad/) != -1 || ua.search(/Macintosh/) != -1 && 'ontouchend' in document || ua.search(/iPod/) != -1 || ua.search(/Android/) != -1){
                        selfWrap.find('a').on({
                            'touchstart': function(e){
                                thisHref = $(this).attr('href');
                                thisTarget = $(this).attr('target');
                                touchFlag = true;
                            },
                            'touchmove': function(e){
                                touchFlag = false;
                                e.preventDefault();
                            },
                            'touchend': function(e){
                                if(touchFlag == true){
                                    if(thisTarget == '_blank'){
                                        window.open(thisHref, '_blank');
                                    } else {
                                        location.href = thisHref;
                                    }
                                }
                            }
                        });
                    }
                }
            });
        });
    });
    </script>
</div> <!--wrapper-->
</body>
</html>