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
        </div>

        <div class="right_block">
            1
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


</script>