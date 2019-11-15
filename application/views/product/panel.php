<link type="text/css" rel="stylesheet" href="stylesheets/product.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="/">主頁</a><span>></span><a href="#">產品資訊</a>
        <h1 class="page_title">產品資訊</h1>
    </div>
</div>

<div class="content_block">
    <div class="title_menu">
        <ul>
            <li>
                <a href="#" data-type="product1"<?=$type==1?' class="active"':''?>>前避震</a>
            </li>
            <li>
                <a href="#" data-type="product2"<?=$type==2?' class="active"':''?>>後避震</a>
            </li>
            <li>
                <a href="#" data-type="product3"<?=$type==3?' class="active"':''?>>重車前避震</a>
            </li>
            <li>
                <a href="#" data-type="product4"<?=$type==4?' class="active"':''?>>重車後避震</a>
            </li>
        </ul>
    </div>
    <div class="product_list">
        <ul class="product_block product1 clearfix active">
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2_1</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
        </ul>
        <ul class="product_block product2 clearfix">
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2_2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
        </ul>
        <ul class="product_block product3 clearfix">
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2_3</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
        </ul>
        <ul class="product_block product4 clearfix">
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2_4</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
            <li>
                <a href="/product_subpage">
                    <img src="images/img-uf-2@2x.png">
                    <p>UF2</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.title_menu ul li a').click(function(e){
        e.preventDefault();
        var el =$(this);
        var target = el.data('type');

        $('.title_menu ul li a').removeClass('active');
        $(this).addClass('active'); 

        $('.product_block').removeClass('active');
        $('.'+target).addClass('active');   
    });


    // $('ul.submenu li a').click(function(e){
    //     //e.preventDefault();
    //     var el =$(this);
    //     var target = el.data('type');

    //     $('ul.submenu li a').removeClass('active');
    //     $(this).addClass('active'); 

    //     $('.product_block').removeClass('active');
    //     $('.'+target).addClass('active');   
    // });
});
</script>