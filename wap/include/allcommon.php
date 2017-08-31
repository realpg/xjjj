<?php
$dhid=empty($_REQUEST['dhid'])?1:$_REQUEST['dhid'];
$company_row=$db->query_list_id("select * from company where company_id=1");
$dhid=empty($_REQUEST['dhid'])?1:$_REQUEST['dhid'];
//dhid所对应的一级栏目
$menu_one_list=$db->query_list_id("select * from menu where menu_id=$dhid");

//色值搭配
$color_index=$db->query_list_id("select color_content from color where color_id=3");
$color_product=$db->query_list_id("select color_content from color where color_id=4");
$color_font=$db->query_list_id("select color_content from color where color_id=6");
$color_more=$db->query_list_id("select color_content from color where color_id=10");
?>