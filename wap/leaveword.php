<?php
header("Content-Type: text/html;charset=utf-8");
require ("./config/conn.php");//引入链接数据库
$leaveword_name=$_REQUEST["leaveword_name"];
$leaveword_tel=$_REQUEST["leaveword_tel"];

//判断来源
$SERVER_NAME=$_SERVER['SERVER_NAME'];
if($SERVER_NAME=="360.syxjhome.com")
{
    $leaveword_source="360-手机端";
}
else if($SERVER_NAME=="360m.syxjhome.com")
{
    $leaveword_source="360-手机端";
}
else if($SERVER_NAME=="video.syxjhome.com")
{
    $leaveword_source="腾讯视网-手机端";
}
else if($SERVER_NAME=="videom.syxjhome.com")
{
    $leaveword_source="腾讯视网-手机端";
}
else if($SERVER_NAME=="todaym.syxjhome.com")
{
    $leaveword_source="今日头条";
}
else if($SERVER_NAME=="datam.syxjhome.com")
{
    $leaveword_source="移动大数据";
}
else if($SERVER_NAME=="lbsm.syxjhome.com")
{
    $leaveword_source="LBS";
}
else if($SERVER_NAME=="appm.syxjhome.com")
{
    $leaveword_source="腾讯视频APP开屏";
}
else if($SERVER_NAME=="wechat.syxjhome.com")
{
    $leaveword_source="微信朋友圈";
}
else if($SERVER_NAME=="neteasem.syxjhome.com")
{
    $leaveword_source="网易新闻";
}
else if($SERVER_NAME=="qqmini.syxjhome.com")
{
    $leaveword_source="腾讯迷你页-手机端";
}
else if($SERVER_NAME=="qqnews.syxjhome.com")
{
    $leaveword_source="腾讯新闻app信息流";
}
else if($SERVER_NAME=="youkum.syxjhome.com")
{
    $leaveword_source="优酷";
}
else if($SERVER_NAME=="qiym.syxjhome.com")
{
    $leaveword_source="爱奇艺";
}
else
{
    $leaveword_source="百度-手机端";
}

$row=$db->edit_list("insert into leaveword (leaveword_name,leaveword_tel,leaveword_source)value('$leaveword_name','$leaveword_tel','$leaveword_source')");
if($row>0)
{
    $leaveword_deteil_row=$db->query_list_id("select leaveword_details_num from leaveword_details where leaveword_details_id=1");
    $leaveword_details_num=$leaveword_deteil_row["leaveword_details_num"]+1;
    $db->edit_list("update leaveword_details set leaveword_details_num='$leaveword_details_num' where leaveword_details_id=1");
    include ("./sms.php");

    //echo "SmsDemo::sendSms\n";
    $response = $demo->sendSms(
        "香江家居", // 短信签名
        "SMS_102310032", // 短信模板编号
        $leaveword_tel, // 短信接收者
        Array(  // 短信模板中字段的值
//            "title"=>"国庆家居展会",
//            "tel"=>"25614838"
        ),
        "123"
    );
    //print_r($response);
    echo "1";
}
else
{
    echo "0";
}