<link type="text/css" rel="stylesheet" href="css/feature.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="#">主頁</a><span>></span><a href="#">客製化特色系統</a>
        <h1 class="page_title">客製化特色系統</h1>
    </div>
</div>

<div class="container_block clearfix">
    <div class="select_block">
        <select name="" id="city_select" >
            <option value="">前避震</option>
            <option value="">後避震</option>
            <option value="">避震器</option>
        </select>
    </div>

    <div class="slick_block">
        <ul class="slick_product">
            <li>
                <a href="#">
                    <img src="slick/images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="slick/images/img-uf-2@2x.png">
                    <p>UF2_block3</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="slick/images/img-uf-2@2x.png">
                    <p>UF2_block3</p>
                </a>
            </li>
           <li>
                <a href="#">
                    <img src="slick/images/img-uf-2@2x.png">
                    <p>UF2_block3</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="slick/images/img-uf-2@2x.png">
                    <p>UF2_block3</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="product_block clearfix">
        <div class="left_block">
            <h6>UF2</h6>
            <div class="product_img_block">
            </div>

            <p>實際顏色以本公司出貨為主</p>
        </div>

        <div class="right_block">
            <div class="product_style_block clearfix">

                <ul class="menu_product_style_ul">

                    <li><a  href="" data-target="color">選擇色彩<i class="product_style_fal fal fa-angle-down"></i></a>
                        <div style="display:none;" class="choose_content color_block clearfix">
                            <ul>
                                <li>下座 <div class="color_circle" style="background-color:black;"><p>黑</p> </div></li>
                                <li>筒身 <div class="color_circle" style="background-color:black;"><p>黑</p> </div></li>
                                <li>上調整鈕 <div class="color_circle" style="background-color:black;"><p>黑</p> </div></li>
                                <li>預戴螺帽+托盤 <div class="color_circle" style="background-color:black;"><p>黑</p> </div></li>
                            </ul>
                        </div>
                    </li>
                        
                    <li><a href="" data-target="other">其他配置<i class="product_style_fal fal fa-angle-down"></i></a>
                        <div style="display:none;" class="choose_content other_block clearfix">
                            <ul>
                            
                            </ul>
                        </div>
                    </li>

                    <li><a href="" data-target="otem">選購項目<i class="product_style_fal fal fa-angle-down"></i></a>
                        <div style="display:none;" class="choose_content item_block">
                            q
                        </div>
                    </li>
  
                </ul>

            </div>
        </div>
    </div>

</div>





<script type="text/javascript" src="slick/js/slick.js"></script>

<script>

     $('ul.slick_product').slick({
        dots: false,
        infinite: true,
        speed: 1200,
        arrows:true,
        cssEase: 'linear',
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000
    });

    $('.menu_product_style_ul a').click(function(e){
        e.preventDefault();
        var target = $(this).data('target');

        if(!$(this).hasClass('active')){
            //if not active

            $(this).children('.product_style_fal').removeClass('fa-angle-down').addClass('fa-angle-up');
            $('.menu_product_style_ul a.active').removeClass('active');

            //hide and change i
            var now = $('.menu_product_style_ul a.active').data('target');
            $('.'+now+'_block').hide();
            $('a[data-target='+now+'] > i').removeClass('fa-angle-up').addClass('fa-angle-down');

            $('.'+target+'_block').fadeIn();
            $(this).addClass('active');
        }else{
            //if active

            $(this).children('.product_style_fal').removeClass('fa-angle-up').addClass('fa-angle-down');
            $(this).removeClass('active');
            $('.'+target+'_block').hide();
        }
    });


</script>