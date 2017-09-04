<?php
header("Content-Type: text/html;charset=utf-8");
require ("./config/conn.php");//引入链接数据库
$leaveword_name=$_REQUEST["leaveword_name"];
$leaveword_tel=$_REQUEST["leaveword_tel"];
$row=$db->edit_list("insert into leaveword (leaveword_name,leaveword_tel)value('$leaveword_name','$leaveword_tel')");
if($row>0)
{
    $leaveword_deteil_row=$db->query_list_id("select leaveword_details_num from leaveword_details where leaveword_details_id=1");
    $leaveword_details_num=$leaveword_deteil_row["leaveword_details_num"]+1;
    $db->edit_list("update leaveword_details set leaveword_details_num='$leaveword_details_num' where leaveword_details_id=1");
    include ("./sms.php");

    //echo "SmsDemo::sendSms\n";
    $response = $demo->sendSms(
        "香江家居", // 短信签名
        "SMS_91970044", // 短信模板编号
        $leaveword_tel, // 短信接收者
        Array(  // 短信模板中字段的值
            "title"=>"10.1-10.8第十届东北亚家居展销博览会",
            "tel"=>"024-25614838"
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