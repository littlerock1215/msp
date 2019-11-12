<link type="text/css" rel="stylesheet" href="css/qa.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="#">主頁</a><span>></span><a href="#">Q&A</a><span style="color:black;">></span><a href="#">購車</a>
        <h1 class="page_title">Q&A</h1>
    </div>
</div>

<div class="container_block clearfix">
    <div class="qa_block">
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
                    <li onclick="show_answer(this)" class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>
                </ul>
            </div>

            <div class="after_sell_block" style="display:none">
                <ul>
                    <li class="click_item">
                        <div class="question"> Q. 售後服務?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>
                </ul>
            </div>

            <div class="components_block" style="display:none">
                <ul>
                    <li class="click_item">
                        <div class="question"> Q. 相關零件?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>
                </ul>
            </div>

            <div class="other_block" style="display:none">
                <ul>
                    <li class="click_item">
                        <div class="question"> Q. 其他問題?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>

                    <li class="click_item">
                        <div class="question"> Q. MSP主要業務內容為?</div>
                        <button class="answer_button"></button>
                        <div class="answer">A. 初期以「速克達」機車賽事用之排氣管為主力產品，後期研發製造高性能避震器</div>
                    </li>
                </ul>
            </div>


        </div>
    </div>


    <div class="mobile_qa_block">
        <ul class="menu">
            <li><a  href="" data-target="sell_car">購車<i class="mobile_fal fal fa-angle-right"></i></a>
                <div style="display:none;" class="sell_car_block">1</div>
            </li>
                
            <li><a href="" data-target="after_sell">售後服務<i class="mobile_fal fal fa-angle-right"></i></a>
                <div style="display:none;" class="after_sell_block">12</div>
            </li>

            <li><a href="" data-target="about" class="active">零件相關<i class="mobile_fal fal fa-angle-right"></i></a>
                <div style="display:none;" class="about_block">31</div>
            </li>

            <li><a href="" data-target="other_qas">其他問題<i class="mobile_fal fal fa-angle-right"></i></a>
                <div style="display:none;" class="other_qas_block">e1</div>
            </li>        
        </ul>
    
    </div>

</div>

<script>

$(document).ready(function(){

    $( '.click_item' ).click(function() {
        if($(".answer_button").hasClass('open')){
            $(".answer_button").removeClass('open');
            $(".click_item").closest('li').children('.answer').toggle();

        }else{
            $(".answer_button").addClass('open');
            $(".answer_button").closest('li').children('.answer').toggle();
        }
    });

    $('.menu a').click(function(e){
        e.preventDefault();
        var target = $(this).data('target');

        if(!$(this).hasClass('active')){
            //if not active

            $(this).children('.mobile_fal').removeClass('fa-angle-right').addClass('fa-angle-up');
            $('.menu a.active').removeClass('active');

            //hide and change i
            var now = $('.menu a.active').data('target');
            $('.'+now+'_block').hide();
            $('a[data-target='+now+'] > i').removeClass('fa-angle-up').addClass('fa-angle-right');
            
            $('.'+target+'_block').fadeIn();
            $(this).addClass('active');
        }else{
            //if active

            $(this).children('.mobile_fal').removeClass('fa-angle-up').addClass('fa-angle-right');
            $(this).removeClass('active');
            $('.'+target+'_block').hide();
        }
    });

});
    

</script>