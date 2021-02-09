<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="tpl/css/reset.css">
    <link rel="stylesheet" href="tpl/css/menu.css">
    <link rel="stylesheet" href="tpl/css/header.css">
    <link rel="stylesheet" href="tpl/css/footer.css">
    <script src="tpl/js/jQuery-3.4.1.min.js"></script>
    <title>Ek Chuah　エクチュア からほり「蔵」本店</title>
</head>
<body>
    <header>
        <section id="first-view">
        </section>
        <a class="menu">
            <span class="menu__line menu__line--top"></span>
            <span class="menu__line menu__line--center"></span>
            <span class="menu__line menu__line--bottom"></span>
        </a>
        <nav class="gnav">
            <div class="gnav__wrap">
                <h2 ><a href="./index.php"><img src="tpl/img/logo_gnavi.png" alt="エクチュアのロゴ"></a></h2>
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
    <main>
        <section id="firstview">
            <p class="txt">定番のチョコレートケーキから<br>
                季節限定のメニューを取り揃えて、<br>
                お待ちしております。</p>
            <h3>メニュー</h3>
            <p class="deco">menu</p>
            <img src="tpl/img/menu_firstview.png" alt="チョコミントパフェ">
        </section>
        <section id="menu">
            <ul>
                <?php foreach ($menu_list as $item):?>
                <li>
                    <img src="../ekchuah_cms/menu/images/<?php echo $item['menu_id'];?>.jpg" alt="<?php echo $item['menu_name'];?>">
                    <p><?php echo $item['menu_name'];?></p>
                    <p><?php echo $item['price'];?></p>
                </li>
                <?php endforeach;?>
            </ul>
        </section>
    </main>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
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
</body>
</html>