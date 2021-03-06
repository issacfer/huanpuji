<?php require_once "../Controller/OrderController.class.php";?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--手机号码不显示为拨号的超链接-->
    <meta name="format-detection" content="telephone=no"/>
    <!--在移动端按比例缩放-->
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1.0,user-scalable=no;">

    <!--<script type='text/javascript' src='__PUBLIC__/js/jquery-1.11.3.js' charset='utf-8'></script>
    <script>var Zepto = jQuery</script>-->
    <link rel="stylesheet" href="../Public/css/swiper.min.css">
    <link rel="stylesheet" href="../Public/css/public.css"><!--public-->

    <script src="../Public/js/jquery-1.11.3.js"></script>
    <script src="../Public/js/swiper.jquery.min.js"></script>
    <title>懐璞集</title>
</head>
<style>
    .board-order{
        line-height: 1.5;
        font-size: 16px;
        padding-left: 10px;
        padding-right: 10px;
        position: absolute;
        top: 0; bottom: 0;
        margin-top: 10px;
        margin-bottom: 100px;
        /*height: 100%;*/
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
        /*padding-bottom: 105px;*/
        /*border: 3px solid red;*/
    }
    .block-order{
        position: relative;background: rgba(214,214,216,1);
        padding: 25px 40px 30px 40px;margin-bottom: 10px;
        border-radius: 3px;
    }
    .area-orderCtt{
        padding-left: 15px;padding-right: 15px;
        margin-bottom: 15px;
    }
    .area-orderCtt img{
        width: 100%;
    }
    .area-orderBtn{
        /*border: 1px solid red;*/
        /*overflow: hidden;*/
        /*padding: 0;*/
        display: table;
        width: 100%;
        /*box-sizing: border-box;
        border: 1px solid black;*/
    }
    .item-buy{
        display: table-cell;
        /*border: 1px solid red;*/
        padding-right: 10px;
    }
    .item-logistics{
        display: table-cell;
        /*border: 1px solid red;*/
        padding-left: 10px;
    }
    .item-buy div,.item-logistics div{
        width: 100%;text-align: center;
        color: white;
        background-color: #57585A;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 4px;
    }
    .item-buy div:active,.item-logistics div:active{
        background-color: #393939;
    }
    /*.btn-buy{
        float: left;
    }
    .btn-logistics{
        float: right;
    }*/
    .area-orderBtn button{
        color: white;
        background-color: #57585A;
        border: none;
        /*padding: 7px 25px;*/

        border-radius: 4px;
        font-size: 16px;
    }
    .area-orderBtn button:active{
        background-color: #393939;
    }
    /*在三个复用的代码块的基础在添加样式*/
    /*.block-disTip,#block-service,#board-personal,.menu-child{
        background: rgba(62,62,63,1);
    }*/
    #board-personal,.area-service{
        background: rgba(62,62,63,1);
    }
    .area-button a{
        box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
    }
</style>
<body>
    <main class="board-order">
        <!--一个卡片-->
        <div class="block-order">
            <div class="area-orderCtt">
                <img style="" src="../Public/images/p2.jpg">
                <h4>产品名称</h4>
                <p>订单编号：<span>2016060501</span></p>
            </div>
            <div class="area-orderBtn" data-id="2016030501">
                <div class="item-buy">
                    <div class="btn-buy">馬上就要</div>
                </div>
                <div class="item-logistics">
                    <div class="btn-logistics">查看物流</div>
                </div>
            </div>
        </div>
    </main>

    <?php include "./Temp/menu.php";?>

    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type="text/javascript" src="../Public/js/issac.js"></script><!--issac类库-->
    <script type="text/javascript" src="../Public/js/public.js"></script>
    <script type="text/javascript">
        /*马上就要*/
        $(".btn-buy").click(function(){
            var id =$(this).parent().attr("data-id");
            window.location.href="buy.html?id="+id;
//            alert("buy id="+id);
        });
        /*查看物流*/
        $(".btn-logistics").click(function(){
            var id =$(this).parent().attr("data-id");
            alert("查看 id="+id+" 的物流")
        });
    </script>
</body>
</html>