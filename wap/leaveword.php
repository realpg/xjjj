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
    echo "1";
}
else
{
    echo "0";
}