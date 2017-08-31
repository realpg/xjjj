<?php
$dhid=empty($_REQUEST['dhid'])?1:$_REQUEST['dhid'];
$company_row=$db->query_list_id("select * from company where company_id=1");
$dhid=empty($_REQUEST['dhid'])?1:$_REQUEST['dhid'];
//dhid所对应的一级栏目
$menu_one_list=$db->query_list_id("select * from menu where menu_id=$dhid");
?>