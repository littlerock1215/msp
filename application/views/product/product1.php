<link type="text/css" rel="stylesheet" href="stylesheets/product_subpage.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="#">主頁</a><span>></span><a href="#">產品資訊</a><span>></span><a href="#">前避震UF2</a>
    </div>
</div>

<div class="content_block clearfix">
    <div class="product_leftside">
        <div class="leftside_photo">
            <a class="active" data-type="product1">
                <img src="images/img-uf-2@2x.png">
            </a>
            <a class="" data-type="product2">
                <img src="images/img-uf-2@2x.png">
            </a>
            <a class="" data-type="product3">
                <img src="images/img-uf-2@2x.png">
            </a>
        </div>
        <div class="rightside_photo">
            <img class="product1 active" src="images/img-uf-2@2x.png">
            <img class="product2" src="images/img-bg-homepage-2.png">
            <img class="product3" src="images/img-uf-2@2x.png">
        </div>
    </div>
    <div class="product_rightside">
        <h1>UF2</h1>
        <h2>型號：UF2<br/>
            型式：倒叉、伸壓側高低速、掛瓶<br/>
            段數：伸側 低速24段 高速34段<br/>
            　　　壓測 低速24段 高速34段<br/>
            車種：勁戰系列、S-MAX、Forse、Jet's、RCK(其他車種可洽詢)</h2>
        <a href="#" class="download">下載型錄</a>
        <a class="choose_color">客製化選色</a>
    </div>
</div>

<script>
$(document).ready(function(){
    $('.leftside_photo a').click(function(e){
        e.preventDefault();
        var el =$(this);
        var target = el.data('type');

        $('.leftside_photo a').removeClass('active');
        $(this).addClass('active'); 

        $('.rightside_photo img').removeClass('active');
        $('.'+target).addClass('active');   
    });
});
</script>