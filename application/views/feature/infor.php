<link type="text/css" rel="stylesheet" href="css/feature.css?<?=time()?>">
<link type="text/css" rel="stylesheet" href="css/feature_infor.css?<?=time()?>">

<div class="title_block">
    <div class="content_title">
        <a href="/">主頁</a><span>></span><a href="#">客製化選色系統</a>
        <h1 class="page_title">客製化選色系統</h1>
    </div>
</div>

<div class="content_block">
    <div class="process_block">
        <ul>
            <li class="circle_1">
                <p class="step">1</p>
                <img src="images/Path@2x.png">
                <p class="step_title title_gray">客製化選色</p>
            </li>
            <li class="circle_2">
                <p class="step">2</p>
                <img src="images/Path@2x.png">
                <p class="step_title">填寫訂購資料</p>
            </li>
            <li class="circle_3">
                <p class="step">3</p>
                <img src="images/Path@2x.png">
                <p class="step_title title_gray">確認內容</p>
            </li>
            <li class="circle_4">
                <img src="images/great_arrow.png">
                <p class="step_title2 title_gray">訂購完成</p>
            </li>
        </ul>
    </div>
    <div class="infor_block">
        <div class="infor_title">
            <h4>訂購人資料</h4>
        </div>
        <div class="infor_content">
            <form>
                <h5>*姓名</h5>
                <input type="text" placeholder="" name="name" id="input_name" value="">
                <h5>*聯絡電話</h5>
                <input type="text" placeholder="" name="phone" id="input_phone" value="">
                <h5 class="ps">備註</h5>
                <textarea type="text" placeholder="" name="ps" id="input_ps" value=""></textarea>
            </form>
        </div>
        <div class="infor_title">
            <h4>選擇經銷商</h4>
        </div>
        <div class="infor_sales">
            <form>
                <h5>*縣市</h5>
                <select>
                    <option>基隆市</option>
                </select>
                <br/>
                <h5>*地區</h5>
                <select>
                    <option>中正區</option>
                </select>
                <br/>
                <h5>*經銷商</h5>
                <select>
                    <option>瑞昌</option>
                </select>
                <br/>
            </form>
            <iframe width='100%' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市新生南路三段90號&z=16&output=embed&t='>
            </iframe>
            <p>基隆市中正區中正路164-6號<br>
                02-2426-6516
            </p>
        </div>
    </div>
</div>

<div class="link_block">
    <a>返回
        <img>
    </a>
    <a>確認內容
        <img>
    </a>
</div>






<script>

    $(document).ready(function(){
        

    });

</script>