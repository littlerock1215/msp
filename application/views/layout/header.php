<!DOCTYPE html>

<html xml:lang="zh" lang="zh">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <title>Msp</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/layout.css?<?=time()?>">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <script src="/js/jquery.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <link rel="stylesheet" href="slick/css/slick.css?<?=time()?>">
    <link rel="stylesheet" href="slick/css/slick-theme.css">
    <link rel="stylesheet" href="/css/fontawesome5/all.css">


    
    <script type="text/javascript" src="/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- <script src="/js/default.js?<?=time()?>" type="text/javascript"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="/js/jquery-validation/jquery.validate.min.js"></script>
    <script src="/js/jquery-validation/localization/messages_zh_TW.min.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="bigger_header">
        <header class="header clearfix">
            <a href="/" class="logo" title="MSP"></a>
            <!-- <button type="button" id="BackTop" class="top"></button> -->
            <a href="/" class="main_menu_hamburger" title="手機選單">
                <div class="in">
                    <span class= line1></span>
                    <span class= line2></span>
                    <span class= line3></span>
                </div>
            </a>
            <div class="language">
                <a href="#" class="chinese active">繁體中文 </a>
                <!-- <a href="#" class="english">English</a> -->
            </div>
            <br>
            <ul  class="nav_mainpage clearfix">
                <li>
                    <a href="/aboutus" class="link_about" title="關於我們">關於我們</a>
                </li>
                <li>
                    <a href="/news" class="link_news" title="最新消息">最新消息</a>
                </li>
                <li class="product">
                    <a href="/product?type=1" data-type="product1" class="link_products" title="產品資訊">產品資訊</a>
                    <ul class="submenu clearfix">
                        <li>
                            <a href="/product?type=1" data-type="product1" title="前避震">前避震</a>
                        </li>
                        <li>
                            <a href="/product?type=2" data-type="product2" title="後避震">後避震</a>     
                        </li>
                        <li>
                            <a href="/product?type=3" data-type="product3" title="重車前避震">重車前避震</a>
                        </li>
                        <li>
                            <a href="/product?type=4" data-type="product4" title="重車前避震">重車前避震</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/promotebase" class="link_location" title="經銷據點">經銷據點</a>
                </li>
                <li>
                    <a href="/qa" class="link_qa" title="Q＆A">Q＆A</a>
                </li>
                <li>
                    <a href="/feature" class="link_customer" title="客製化選色">客製化選色</a>
                </li>
            </ul> 
        </header>
    </div>

<script>
    $(document).ready(function(){
        var lastScrollTop = 0;
        var lastWindowWidth = window.innerWidth;

        $('ul.nav_mainpage>li').mouseenter(function(){

        // if(window.innerWidth>=1023){
        //     $(this).find('ul').stop(true,true).addClass('active');
        // }
        // }).mouseleave(function(){
        // if(window.innerWidth>=1023){
        //     $(this).find('ul').stop(true,true).removeClass('active');
        // }
        // });
            $(this).find('ul').stop(true,true).addClass('active');
        }).mouseleave(function(){
            $(this).find('ul').stop(true,true).removeClass('active');
        });

        //按的時候預防跳開
        // $('ul.nav_mainpage>li>a').click(function(e){
        // e.preventDefault();
        // });

        //below is for the change of the width of the screen function//

    var lastWindowWidth = window.innerWidth;

    $(window).resize(function(){
        var _window_width=window.innerWidth;   
        if(lastWindowWidth != _window_width){
            
            if(_window_width>=1024){
            $('body').removeClass('open');
            $('.main_menu_hamburger').removeClass('active');
            //$('.nav_mainpage').show();
            $('.nav_mainpage').removeClass('active');
            $('.nav_mainpage').perfectScrollbar('destroy');

            }else{
            $('body').removeClass('open');
            $('.main_menu_hamburger').removeClass('active');
            //$('.nav_mainpage').hide();
            $('.nav_mainpage').removeClass('active');
            $('.nav_mainpage').perfectScrollbar('destroy');
            }
            
            lastWindowWidth = _window_width;
        }
    });

    //below is the menu display function in the phone type
    $('.main_menu_hamburger').click(function(e){
        e.preventDefault();
        var el = $(this);

        if(el.hasClass('active')){
            
            el.removeClass('active');
            $('body').removeClass('open');
            $('.nav_mainpage').removeClass('active');
            $('.nav_mainpage').perfectScrollbar('destroy');
          
        }else{
            el.addClass('active');
            $('body').addClass('open');
            $('.nav_mainpage').addClass('active');
            setTimeout(function(){
            $('.nav_mainpage').perfectScrollbar({suppressScrollX:true,includePadding:true});
            },300); 
        }
    });

    //below is the nav_mainpage click function in hamburger style
    $('.nav_mainpage>li>a').click(function(e){

        if($('.nav_mainpage').hasClass('active')){
        $('body').removeClass('open');
        $('.main_menu_hamburger').removeClass('active');
        //$('.nav_mainpage').show();
        $('.nav_mainpage').removeClass('active');
        //$('.nav_mainpage').perfectScrollbar('destroy');
        }
    });



});
</script>
