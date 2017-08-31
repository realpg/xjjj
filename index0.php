<?php require_once 'config/conn.php'; ?>
<!DOCTYPE html>
<html lang="en" class=" en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php require_once 'include/seo.php'; ?>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="HfeUOYGVKhN8gGKzqrcZ0uW3OePYoIftHq3ZCEyh">
    <script type="text/javascript" async="" src="./js/vds.js"></script>
    <script src="./js/hm.js"></script>
    <script src="./js/push.js"></script>
<!--    <script type="text/javascript">var baseUrl = "http://www.51jiabo.com/";var baseCityUrl = "http://www.51jiabo.com/sy/"</script>-->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link href="./css/base.css" rel="stylesheet" type="text/css">
    <link href="./css/ticket.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="./js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if gte IE 9]>
    <script src="./js/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
    <![endif]-->
    <script src="./js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="./js/jquery.lazyload.min.js" type="text/javascript"></script>
    <script src="./js/jb.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
</head>

<body>
<div class="container">
    <?php
    $banner_row=$db->query_list_id("select image_image from image where image_id=1 and image_show=1");
    if($banner_row)
    {
        ?>
        <div class="t_banner">
            <div class="t_banner_bg"><img src="<?=$banner_row["image_image"]?>"></div>
        </div>
        <?php
    }
    ?>

    <div class="t_main">
        <div class="t_nav_out" hidden>
            <ul class="clearfix" id="J_TopBar">
                <li id="J_EactNav1" class="J_EactNav" data-id="1" style="width:238px">活动亮点</li>
                <li id="J_EactNav2" class="J_EactNav" data-id="2" style="width:238px">合作品牌</li>
                <li id="J_EactNav3" class="J_EactNav" data-id="3" style="width:238px">逛展指南</li>
                <li id="J_EactNav4" class="J_EactNav" data-id="4" style="width:238px">服务保障</li>
                <li id="J_EactNav5" class="J_EactNav" data-id="5" style="width:238px">华夏家博介绍</li>
            </ul>
        </div>
        <div class="t_con">
            <!-- 活动亮点开始 -->
            <div class="activity" id="J_Eact1">
                <div class="t_hd"><img src="images/tit-1.png" /></div>
            </div>
            <ul class="act_li clearfix">
                <?php
                $light_rows=$db->query_lists("select light_image,light_content,light_title from light order by light_sort asc,light_id asc");
                $light_li_width=100/count($light_rows);
                foreach ($light_rows as $light_row)
                {
                    ?>
                    <li class="five" style="width:<?=$light_li_width?>%">
                        <div class="act_img"><img class="lazy" data-original="<?=$light_row["light_image"]?>" height="240" width="100%" alt="<?=$light_row["light_title"]?>" src="./<?=$light_row["light_image"]?>" style="display: block;"></div>
                        <div class="bottom_div">
                            <p><?=$light_row["light_content"]?></p>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <!-- 活动亮点结束 -->

            <!-- 优惠券开始 -->
            <!-- 优惠券结束 -->

            <!-- 特惠预约 -->
            <!-- 特惠预约 -->
            <!-- 合作品牌 -->
            <div class="work_hx" id="J_Eact2">
                <div class="t_hd"><img src="images/tit-5.png" /></div>
                <div class="work_in">
                    <ul class="work_nav clearfix" id="tab_up">
                        <li class="work_now">推荐品牌</li>
                        <li>厨房卫浴</li>
                        <li>地板门窗</li>
                        <li>家具软装</li>
                        <li>家用电器</li>
                        <li>综合建材</li>
                        <li>装修公司</li>
                    </ul>

                    <div id="tab_down">
                        <ul class="work_con clearfix" style="display:block">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98700)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/1.jpg" height="58" width="150" alt="慕思" src="./images/1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98701)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/2.jpg" height="58" width="150" alt="百家装饰" src="./images/2.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98702)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/3.jpg" height="58" width="150" alt="舒达床垫" src="./images/3.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98703)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/4.jpg" height="58" width="150" alt="红苹果" src="./images/4.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98704)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/5.jpg" height="58" width="150" alt="联邦" src="./images/5.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98705)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/6.jpg" height="58" width="150" alt="方太" src="./images/6.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98706)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/7.jpg" height="58" width="150" alt="京都和室" src="./images/7.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98707)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/8.jpg" height="58" width="150" alt="飞美地板" src="./images/8.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98708)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/9.jpg" height="58" width="150" alt="箭牌卫浴" src="./images/9.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 98709)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/10.jpg" height="58" width="150" alt="西门子" src="./images/10.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987010)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/11.jpg" height="58" width="150" alt="依诺磁砖" src="./images/11.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987011)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/12.jpg" height="58" width="150" alt="尚誉乳胶沙发" src="./images/12.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987012)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/13.jpg" height="58" width="150" alt="3D木门" src="./images/13.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987013)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/14.jpg" height="58" width="150" alt="海尔" src="./images/14.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987014)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/15.jpg" height="58" width="150" alt="安华卫浴" src="./images/15.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987015)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/艾普.jpg" height="58" width="150" alt="艾普" src="./images/艾普.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987016)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/奥普.jpg" height="58" width="150" alt="奥普" src="./images/奥普.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987017)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/巴菲克.jpg" height="58" width="150" alt="巴菲克" src="./images/巴菲克.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987018)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/德尔地板.jpg" height="58" width="150" alt="德尔地板" src="./images/德尔地板.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987019)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/东芝.jpg" height="58" width="150" alt="东芝" src="./images/东芝.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987020)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/芬琳.jpg" height="58" width="150" alt="芬琳" src="./images/芬琳.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987021)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/可美家.jpg" height="58" width="150" alt="可美家" src="./images/可美家.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987022)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/老板.jpg" height="58" width="150" alt="老板" src="./images/老板.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987023)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/领袖.jpg" height="58" width="150" alt="领绣" src="./images/领袖.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987024)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/美标.jpg" height="58" width="150" alt="美标" src="./images/美标.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987025)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/蒙娜丽莎.jpg" height="58" width="150" alt="蒙娜丽莎" src="./images/蒙娜丽莎.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987026)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/诺贝尔.jpg" height="58" width="150" alt="诺贝尔" src="./images/诺贝尔.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987027)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/欧派.jpg" height="58" width="150" alt="欧派" src="./images/欧派.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987028)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/日立.jpg" height="58" width="150" alt="日立" src="./images/日立.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 987029)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/sy/一米阳光.jpg" height="58" width="150" alt="一米阳光" src="./images/一米阳光.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20903)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-03-02/1456884468924_1.png" height="58" width="150" alt="金牌橱柜" src="./images/1456884468924_1.png" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21633)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/f1e986c3-83a2-4388-88d1-92a6937d9155.jpg" height="58" width="150" alt="长城瓷砖" src="./images/f1e986c3-83a2-4388-88d1-92a6937d9155.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20922)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-07-28/1469691760126_1.jpg" height="58" width="150" alt="美的厨电" src="./images/1469691760126_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20919)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2015-03-11/1426039775234.jpg" height="58" width="150" alt="火星人集成灶" src="./images/1426039775234.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20997)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/6f2ede28-e7f5-4fd7-b497-5d27bfab0ee9.jpg" height="58" width="150" alt=" 美标卫浴" src="./images/6f2ede28-e7f5-4fd7-b497-5d27bfab0ee9.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21033)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/0a59a437-6f4e-486d-8536-b5c9d8dbffe7.jpg" height="58" width="150" alt="便洁宝智能马桶" src="./images/0a59a437-6f4e-486d-8536-b5c9d8dbffe7.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20851)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-08-16/1471329357303_1.jpg" height="58" width="150" alt="蒙娜丽莎瓷砖" src="./images/1471329357303_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20847)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-03-14/1457937226267_1.jpg" height="58" width="150" alt="可美家水槽" src="./images/1457937226267_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20848)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-08-22/1471858562662_1.jpg" height="58" width="150" alt="诺贝尔瓷砖" src="./images/1471858562662_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20849)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/ed9012d7-7b99-448a-a9ce-322de2b80ad7.jpg" height="58" width="150" alt="科勒卫浴" src="./images/ed9012d7-7b99-448a-a9ce-322de2b80ad7.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20861)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2015-02-11/1423625167233.jpg" height="58" width="150" alt="韩国白鸟水槽" src="./images/1423625167233.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20869)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/1ff07dcb-90c5-4bd2-8515-f44fe3b4c335.jpg" height="58" width="150" alt="德立淋浴房" src="./images/1ff07dcb-90c5-4bd2-8515-f44fe3b4c335.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20920)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-08-16/1471330348133_1.jpg" height="58" width="150" alt="海尔厨房电器" src="./images/1471330348133_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20924)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-08-18/1471490899307_1.jpg" height="58" width="150" alt="欧派衣柜" src="./images/1471490899307_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20917)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/f545349a-edaf-41f6-a2dc-2706133004f9.jpg" height="58" width="150" alt="3M净水 " src="./images/f545349a-edaf-41f6-a2dc-2706133004f9.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20923)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/18a7e3cb-0780-4f57-b2ce-5e96b83031d4.jpg" height="58" width="150" alt=" 老板电器" src="./images/18a7e3cb-0780-4f57-b2ce-5e96b83031d4.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20867)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-08-16/1471330617195_1.jpg" height="58" width="150" alt="摩恩卫浴" src="./images/1471330617195_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20860)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2017-02-13/1486949610561_1.jpg" height="58" width="150" alt="安华卫浴" src="./images/1486949610561_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20863)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/d891cd4f-e317-4f46-8b4b-3babf1586696.jpg" height="58" width="150" alt="箭牌卫浴" src="./images/d891cd4f-e317-4f46-8b4b-3babf1586696.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20870)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/de8a913b-b094-41c7-99d0-0bc478cd097e.jpg" height="58" width="150" alt="法恩莎卫浴" src="./images/de8a913b-b094-41c7-99d0-0bc478cd097e.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20926)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/256d30f0-6d8f-4481-aa43-3e7b3a032aa1.jpg" height="58" width="150" alt="我乐橱柜" src="./images/256d30f0-6d8f-4481-aa43-3e7b3a032aa1.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21116)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/5684c05a-e9bf-4bdc-992a-d26ff802d429.jpg" height="58" width="150" alt="3D木门" src="./images/5684c05a-e9bf-4bdc-992a-d26ff802d429.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21058)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/70ce689b-254f-4671-8098-693db9617c9e.jpg" height="58" width="150" alt="朗格尔" src="./images/70ce689b-254f-4671-8098-693db9617c9e.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20852)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/800fa6d9-3dfc-46de-9331-5114cf7a0cd8.jpg" height="58" width="150" alt="圣象地板" src="./images/800fa6d9-3dfc-46de-9331-5114cf7a0cd8.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20850)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/e78bf50d-dbec-4b3d-9e9f-b3d7783ae776.jpg" height="58" width="150" alt="安信地板" src="./images/e78bf50d-dbec-4b3d-9e9f-b3d7783ae776.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20918)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/23bf7770-e311-40c1-87a1-b3f98e11421a.jpg" height="58" width="150" alt="维盾门窗" src="./images/23bf7770-e311-40c1-87a1-b3f98e11421a.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20925)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/d0b8573c-862d-46bf-86db-0a9ac0ad8459.jpg" height="58" width="150" alt="三木木门" src="./images/d0b8573c-862d-46bf-86db-0a9ac0ad8459.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20905)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/07910a7b-02b1-420e-be56-28e4611a0114.jpg" height="58" width="150" alt="飞美地板" src="./images/07910a7b-02b1-420e-be56-28e4611a0114.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20862)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2017-01-18/1484706082333_1.jpg" height="58" width="150" alt="融汇版图地板" src="./images/1484706082333_1.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21238)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/09c2985d-9583-4b6a-9835-b6009e345541.jpg" height="58" width="150" alt="尚誉" src="./images/09c2985d-9583-4b6a-9835-b6009e345541.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20813)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-04-06/1459921893274_1.jpg" height="58" width="150" alt="美国舒达床垫" src="./images/1459921893274_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20856)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/aa20a23d-5b57-4020-bf0a-89a744d3d3e6.jpg" height="58" width="150" alt="小美至佳" src="./images/aa20a23d-5b57-4020-bf0a-89a744d3d3e6.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21242)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-10-11/1476155520829_1.jpg" height="58" width="150" alt="爱思诺床垫" src="./images/1476155520829_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20954)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/4967c144-280e-495c-ab67-4864feb6e986.jpg" height="58" width="150" alt="欧罗丹美" src="./images/4967c144-280e-495c-ab67-4864feb6e986.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21075)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/1199cc23-0cee-4e9e-a14d-6271ef63f33e.jpg" height="58" width="150" alt="凯蒂丹妮" src="./images/1199cc23-0cee-4e9e-a14d-6271ef63f33e.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21126)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/addefce2-4608-4df4-9423-b33b53dab3f7.jpg" height="58" width="150" alt="京都和室榻榻米" src="./images/addefce2-4608-4df4-9423-b33b53dab3f7.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20916)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2017-01-11/1484117754364_1.png" height="58" width="150" alt="功匠工房" src="./images/1484117754364_1.png" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20821)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/35d8f82d-669c-4610-9a6e-5aeb42415c88.jpg" height="58" width="150" alt="联邦米尼沙发" src="./images/35d8f82d-669c-4610-9a6e-5aeb42415c88.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20820)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-09-10/1473473542427_1.jpg" height="58" width="150" alt="依思蒙沙软床" src="./images/1473473542427_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20809)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-02-22/1456125668879_1.jpg" height="58" width="150" alt="圣象衣柜" src="./images/1456125668879_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20810)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/6cab9b70-0ec7-4931-90bc-e780e614959d.jpg" height="58" width="150" alt="慕思寝具" src="./images/6cab9b70-0ec7-4931-90bc-e780e614959d.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21877)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2015-03-11/1426042196337.jpg" height="58" width="150" alt=" 芝华仕沙发" src="./images/1426042196337.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20859)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/cc0fc6bf-220c-4dbb-a506-77cb84a3e6f1.jpg" height="58" width="150" alt="红苹果家具" src="./images/cc0fc6bf-220c-4dbb-a506-77cb84a3e6f1.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21162)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/1c2755e3-8902-45c9-a229-4421551695e6.jpg" height="58" width="150" alt="埃普莱新风" src="./images/1c2755e3-8902-45c9-a229-4421551695e6.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21158)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/a857d2b6-3ee8-4af6-9882-8c772518529d.jpg" height="58" width="150" alt="澳柯玛家电" src="./images/a857d2b6-3ee8-4af6-9882-8c772518529d.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20896)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-07-19/1468920948739_1.jpg" height="58" width="150" alt="日立空调" src="./images/1468920948739_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20921)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2017-01-20/1484880229278_1.jpg" height="58" width="150" alt="东芝空调" src="./images/1484880229278_1.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20901)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-09-14/1473831248490_1.jpg" height="58" width="150" alt="绿森林硅藻泥" src="./images/1473831248490_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21163)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-04-18/1460968034923_1.jpg" height="58" width="150" alt="艾谱保险箱" src="./images/1460968034923_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21164)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/3f2dcaef-410d-477c-b06c-26b2e75b2e36.jpg" height="58" width="150" alt="德国瑞好暖通" src="./images/3f2dcaef-410d-477c-b06c-26b2e75b2e36.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21182)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/6f25a8b0-f518-4c13-935a-d23b5bd41d6a.jpg" height="58" width="150" alt="领绣刺绣墙布" src="./images/6f25a8b0-f518-4c13-935a-d23b5bd41d6a.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20983)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/97c6e13b-3316-4723-a84c-ed9c35e0f0d6.jpg" height="58" width="150" alt="芳源硅藻泥" src="./images/97c6e13b-3316-4723-a84c-ed9c35e0f0d6.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20898)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/47500a19-1772-4c6b-9c3d-b98d93d44a3e.jpg" height="58" width="150" alt="奥普浴霸" src="./images/47500a19-1772-4c6b-9c3d-b98d93d44a3e.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20907)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/924d2bec-272b-4b47-b93e-25dfa5c4f176.jpg" height="58" width="150" alt="芬琳漆" src="./images/924d2bec-272b-4b47-b93e-25dfa5c4f176.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20904)">

                                    <img class="lazy" data-original="http://img.51jiabo.com/uploadimg/2016-09-02/1472802628161_1.jpg" height="58" width="150" alt="欧兰特电动晾衣机" src="./images/1472802628161_1.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20908)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/735e3759-ab1a-4669-a5f2-e2f4dced346d.jpg" height="58" width="150" alt="巴菲克全屋吊顶" src="./images/735e3759-ab1a-4669-a5f2-e2f4dced346d.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20909)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/8019009c-e987-4768-903d-4a0589420778.jpg" height="58" width="150" alt="一米阳光窗帘" src="./images/8019009c-e987-4768-903d-4a0589420778.jpg" style="display: inline;"></a>
                            </li>
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 20858)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/8a2f42be-650c-4a52-bf23-1d70c337e5e7.jpg" height="58" width="150" alt="好太太晾衣架" src="./images/8a2f42be-650c-4a52-bf23-1d70c337e5e7.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                        <ul class="work_con clearfix">
                            <li>

                                <a onclick="base.openReserve(&#39;BrandSpecialDetail&#39;, 21648)">

                                    <img class="lazy" data-original="https://img.hxjbcdn.com/98eb602f-6955-4196-8681-20ef5c974fd7.jpg" height="58" width="150" alt="新方盛装修公司" src="./images/98eb602f-6955-4196-8681-20ef5c974fd7.jpg" style="display: inline;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 合作品牌 -->
            <!-- 逛展指南 -->
            <?php
            $process_row=$db->query_list_id("select image_image from image where image_show=1 and image_id=3");
            if($process_row)
            {
                ?>
                <div class="directory" id="J_Eact3">
                    <div class="t_hd"><img src="images/tit-6.png" /></div>
                    <div class="dir_img clearfix">
                        <img src="<?=$process_row["image_image"]?>" />
                    </div>
                </div>
                <?php
            }
            ?>
            <!-- 逛展指南 -->
            <!-- 服务保障 -->
            <?php
            $service_row=$db->query_list_id("select image_image from image where image_show=1 and image_id=4");
            if($service_row)
            {
                ?>
                <div class="tic_se" id="J_Eact4">
                    <div class="t_hd"><img src="images/tit-6.png" /></div>
                    <div class="hx-service-li clearfix">
                        <img src="<?=$service_row["image_image"]?>" />
                    </div>
                </div>
                <?php
            }
            ?>
            <!-- 服务保障 -->
            <!-- 分会场 -->
            <div class="tic_se" >
                <div class="t_hd"><img src="./images/tit-7.png" /></div>
                <ul class="hx-branch-li clearfix">
                    <?php
                    $branch_rows=$db->query_lists("select menu_id,menu_title,menu_image from menu where menu_level=3 and menu_show=1 order by menu_sort asc,menu_id asc");
                    foreach ($branch_rows as $branch_row)
                    {
                        ?>
                        <li>
                            <a href="product-<?=$branch_row["menu_id"]?>.html">
                                <img data-original="<?=$branch_row["menu_image"]?>" src="<?=$branch_row["menu_image"]?>" title="<?=$branch_row["menu_title"]?>">
                            </a>
                        </li>
                        <?php
                    }
                    $free_ticket_row=$db->query_list_id("select menu_image from menu where menu_id=3");
                    ?>
                    <li>
                        <img data-original="<?=$free_ticket_row["menu_image"]?>" src="<?=$free_ticket_row["menu_image"]?>" title="免费索票">
                    </li>
                </ul>
            </div>
            <!-- 分会场 -->
            <!--地图-->

            <div class="tic_se" >
                <div class="t_hd"><img src="./images/tit-7.png" /></div>
<!--                <input type="hidden" id="company_x" value="--><?//=$company_row['company_x']?><!--" />-->
<!--                <input type="hidden" id="company_y" value="--><?//=$company_row['company_y']?><!--" />-->
<!--                <div class="repair-map" style="width:1200px;margin-top:20px;height:400px;" id="allmap"></div>-->
            <div>
            <div style="margin-top:20px;">
                <iframe border="0" frameborder="0" framespacing="0" height="415" hspace="0" id="mapbarframe" marginheight="0" marginwidth="0" scrolling="no" src="http://searchbox.mapbar.com/publish/template/template1010/index.jsp?CID=shizengying_0126&amp;tid=tid1010&amp;showSearchDiv=1&amp;cityName=%E6%B2%88%E9%98%B3%E5%B8%82&amp;nid=MAPBQNQBZPCBXITAXWHWX&amp;width=1200&amp;height=415&amp;infopoi=2&amp;zoom=10&amp;control=1" vspace="0" width="1200"></iframe>
            </div>
            </div><div class="repair-map" style="background-color: #fff; padding:20px;margin-top:-10px;border:#666 1px solid;" >
                    <?=$company_row["company_traffic"]?>
                </div>
<!--                <script>-->
<!--                    var map = new BMap.Map("allmap");-->
<!--                    var localSearch = new BMap.LocalSearch(map);-->
<!--                    localSearch.enableAutoViewport(); //允许自动调节窗体大小-->
<!--                    startmap();-->
<!--                    function startmap()-->
<!--                    {-->
<!--                        var x=document.getElementById("company_x").value;-->
<!--                        var y=document.getElementById("company_y").value;-->
<!--                        map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用-->
<!--                        map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用-->
<!--                        map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件-->
<!--                        map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件-->
<!--                        map.clearOverlays();//清空原来的标注-->
<!--                        var point =new BMap.Point(x,y);-->
<!--                        map.centerAndZoom(point, 16);-->
<!--                        var marker = new BMap.Marker(point);  // 创建标注，为要查询的地址对应的经纬度-->
<!--                        map.addOverlay(marker);              // 将标注添加到地图中-->
<!--                        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画-->
<!--                    }-->
<!--                </script>-->
            </div>
            <!--地图-->
            <!--底部辐条-->
            <?php require_once 'include/ad.php'; ?>
            <!--底部辐条-->
        </div>
    </div>
    <!--侧栏-->
    <?php require_once 'include/footer.php'; ?>
    <!--侧栏-->
    <script type="text/javascript">
        $(document).ready(function() {
            var h = $(window).height();
            $(window).scroll(function(event) {
                var s = $(window).scrollTop();
                if(s>=h){
                    $('.righ-nav').show();
                }else{
                    $('.righ-nav').hide();
                };
                $('.go-top').click(function(event) {
                    $('html,body').stop().animate({'scrollTop':0}, 500);
                });
            });
        });
    </script>
    <!-- 底部开始 -->
    <div class="jb_copyright">
        <div class="coyright">
            <?=$company_row["company_copyright"]?>&nbsp;<?=$company_row["company_recode"]?>
        </div>
    </div>
    <!-- 底部结束--></div>


<script type="text/javascript">
    $(document).ready(function() {
        // 活动亮点
        $('.act_li li').hover(function() {
            $(this).children('.bottom_div').css('display', 'block');
        }, function() {
            $(this).children('.bottom_div').css('display', 'none');
        });
        // 特惠预约
        $('.be_r_in li').hover(function() {
            $(this).children('.bre_r_none').show().siblings('.bre_r_none').hide();
        }, function() {
            $('.be_r_in li').children('.bre_r_none').hide();
        });
        // 合作品牌
        $(document).ready(function() {
            $('#tab_up li').click(function(event) {
                $(this).addClass('work_now').siblings().removeClass('work_now');
                var num = $(this).index();
                $('#tab_down .work_con').eq(num).siblings('.work_con').hide();
                $('#tab_down .work_con').eq(num).show();
            });

            $('.work_con li a').hover(function() {
                $(this).children('.work_none').css('display', 'block');
            }, function() {
                $(this).children('.work_none').css('display', 'none');
            });
        });
        // 底导航
        var windowheight=$(window).height();
        $(window).scroll(function(event) {
            //每次都要获取被浏览器卷去的高
            var myTop = $(window).scrollTop();
            //console.log(myTop);
            var myTop = parseFloat($(window).scrollTop());
            //做判断是为了被卷去的高度大于浏览器的高度时火箭显示
            if(myTop > 500){
                $('.get_tic').show();
                var mark = $('.gain').css('display');
                if (mark != 'block') {
                    $("#J_BotBar .get_in").show();
                    $("#J_BotBar").css('width','100%');
                }
            }else{
                $('.get_tic,.gain').hide()
            }
        });

        $("#J_BotBarClose").on("click", function() {
            botBarCloseFlag = true;
            $("#J_BotBar .get_in").hide();
            $("#J_BotBar").animate({width:"0"});
            $(".gain").stop().animate({width:"152px"}).css('display','block');
        });

        $("#J_BotSmBar").on("click", function() {
            botBarCloseFlag = false;
            $("#J_BotBar .get_in").show();
            $("#J_BotBar").animate({width:"100%"});
            $("#J_BotSmBar").animate({width:"0"});
        });

        $(".J_GetCoupon").on("click", function() {
            var _this = $(this);
            var srcld = 'coupon';
            base.getCoupon($(this).attr("data-id"),srcld, function() {
                // _this.removeClass('J_GetCoupon');
                _this.addClass('over');
                _this.html('已领取');
                // _this.removeAttr('data-id');
                // location.reload(); // 领取成功后执行的方法 需要调整
            });
        });

        /**
         * 导航栏
         */
        var topBarOffsetTop = $("#J_TopBar").offset().top;
        var navCount = parseInt(5);

        $(".J_EactNav").on("click", function(){var idx = $(this).attr("data-id");$("html,body").animate({scrollTop:Math.round($("#J_Eact" + idx).offset().top - 70)}, 100);});

//        window.onscroll = function() {
//            var t = document.documentElement.scrollTop || document.body.scrollTop;
//
//            // 头部导航栏
//            if (t >= topBarOffsetTop) {
//                $("#J_TopBar").addClass("move");
//
//                for (var i = 1; i <= navCount; i ++) {
//                    var eactTop = Math.round($("#J_Eact" + i).offset().top - 70);
//
//                    if (i != navCount) {
//                        var next = i + 1;
//                        var nextEactTop = Math.round($("#J_Eact" + next).offset().top - 70);
//
//                        if (t >= eactTop && t < nextEactTop) {
//                            $("#J_EactNav" + i).addClass("t_now").siblings().removeClass("t_now")
//                        }
//                    } else {
//                        if (t >= eactTop) {
//                            $("#J_EactNav" + i).addClass("t_now").siblings().removeClass("t_now")
//                        }
//                    }
//                }
//            } else {
//                $("#J_TopBar").removeClass("move").find(".t_now").removeClass("t_now");
//            }
//        }

    });
</script>
<div><object id="ClCache" click="sendMsg" host="" width="0" height="0"></object></div></body></html>