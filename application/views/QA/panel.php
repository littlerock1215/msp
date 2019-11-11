<link type="text/css" rel="stylesheet" href="css/qa.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="#">主頁</a><span>></span><a href="#">Q&A</a><span style="color:black;">></span><a href="#">購車</a>
        <h1 class="page_title">Q&A</h1>
    </div>
</div>

<div class="container_block clearfix">

    <div class="left_block">
        <ul class="menu">
            <li><a class="active" href="" data-target="buy_car">購車<i class="fal fa-angle-right"></i></a></li>
            <li><a href="" data-target="after_sell">售後服務<i class="fal fa-angle-right"></i></a></li>
            <li><a href="" data-target="components">零件相關<i class="fal fa-angle-right"></i></a></li>
            <li><a href="" data-target="other">其他問題<i class="fal fa-angle-right"></i></a></li>
        </ul>
    </div>

    <div class="right_block">

        <div class="buy_car_block">
            <ul>
                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>
            </ul>
        </div>

        <div class="after_sell_block" style="display:none">
            <ul>
                <li class="click_item">
                    <div class="question"> Q. 售後服務?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>
            </ul>
        </div>

        <div class="components_block" style="display:none">
            <ul>
                <li class="click_item">
                    <div class="question"> Q. 相關零件?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>
            </ul>
        </div>

        <div class="other_block" style="display:none">
            <ul>
                <li class="click_item">
                    <div class="question"> Q. 其他問題?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>

                <li class="click_item">
                    <div class="question"> Q. MSP主要業務內容為?</div>
                    <button class="click_bitton"></button>
                    <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                </li>
            </ul>
        </div>


    </div>

</div>

<script>

$(document).ready(function(){

    $( '.click_item' ).click(function() {
        if($(".click_bitton").hasClass('open')){
            $(".click_bitton").removeClass('open');
            $(".click_item").closest('li').children('.answer').toggle();

        }else{
            $(".click_bitton").addClass('open');
            $(".click_bitton").closest('li').children('.answer').toggle();
        }
    });

    $('.menu a').click(function(e){
        e.preventDefault();
        var target = $(this).data('target');

        if(!$(this).hasClass('active')){
            var now = $('.menu a.active').data('target');
            $('.menu a.active').removeClass('active');
            $('.'+now+'_block').hide();
            $('.'+target+'_block').fadeIn('fast');
            $(this).addClass('active');
        }
    });


});
    

</script>