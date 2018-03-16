<?php
header("Content-Type: text/html;charset=utf-8");
require ("../config/conn.php");//引入链接数据库
require_once ("include-power.php");//引入权限判断
require_once ("include-image.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑手机端产品</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
<link href="../css/preview-pictures.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/preview-pictures.js"></script>
<script type="text/javascript" src="../js/back.js"></script>
<script type="text/javascript">
var editor = new UE.ui.Editor();
editor.render("product_content");
</script>
</head>
<body>
<form action="updatedb.php" method="post" enctype="multipart/form-data">
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="javascript:void(0);">首页</a></li>
            <li><a href="#">编辑手机端产品</a></li>
        </ul>
    </div>
    <?php
    $id=$_REQUEST["id"];
    $row=$db->query_list_id("select * from mobile_product where mobile_product_id=$id");
    ?>
    <div class="formbody">
        <div class="formtitle">
            <span>信息</span>
            <input type="hidden" name="mobile_product_id" value="<?=$row['mobile_product_id'] ?>" />
            <input type="hidden" name="mobile_product_level" value="<?=$_REQUEST['level']?>" />
        </div>
        <ul class="forminfo">
            <li>
                <label>产品标题：</label>
                <input type="text" name="mobile_product_title" id="mobile_product_title" class="dfinput" value="<?=$row['mobile_product_title']?>"  />
                <i>*必须填写</i>
            </li>
            <li>
                <label>产品图片：</label>
                <input type="file" name="mobile_product_image" id="mobile_product_image" onchange="preview(this,'preview_product')" />
                <i>*<?=$image_width ?>*<?=$image_height ?></i><br />
                <img src="../../<?=$row['mobile_product_image']?>" id="product_image_show" width="<?=$image_width ?>px" height="<?=$image_height ?>px"  />
                <input type="hidden" name="product_images" id="product_images" value="<?=$row['mobile_product_image']?>" />
                <div id="preview_product">预览区</div>
            </li>
            <li>
                <label>是否置顶：</label>
                <select name="mobile_product_sort" id="mobile_product_sort" class="dfinput">
                   <option  value="0" <?=$row['mobile_product_sort']==0?"selected='selected'":""?>>否</option>
                   <option  value="1" <?=$row['mobile_product_sort']==1?"selected='selected'":""?>>是</option>
                </select>
            </li>  
            <li>
                <label>是否推荐到首页：</label>
                <select name="mobile_product_show" id="mobile_product_show" class="dfinput">
                    <option  value="0" <?=$row['mobile_product_show']==0?"selected='selected'":""?>>否</option>
                    <option  value="1" <?=$row['mobile_product_show']==1?"selected='selected'":""?>>是</option>
                </select>
            </li>
            <li>
                <label>&nbsp;</label>
                <input type="submit" name="btnEdit" id="btnEdit" value="确认保存" class="btn" /> 
                <input type="button" onclick="fh()" value="返回" class="btn" />
            </li>
        </ul>
    </div>
</form>
</body>
</html>
