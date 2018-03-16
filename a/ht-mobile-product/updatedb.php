<?php
header("Content-Type: text/html;charset=utf-8");
require ("../config/conn.php");//引入链接数据库
require_once ("include-power.php");//引入权限判断
require_once ("include-image.php");
    if(!empty($_REQUEST['btnEdit']))
    {
        $mobile_product_title=$_REQUEST['mobile_product_title'];
        $mobile_product_sort=$_REQUEST['mobile_product_sort'];
        $mobile_product_show=$_REQUEST['mobile_product_show'];
        $mobile_product_id=$_REQUEST['mobile_product_id'];
        $mobile_product_level=$_REQUEST['mobile_product_level'];
    	if(empty($mobile_product_title))
        {
            ///////////
            $Log_name=$_COOKIE['login'];
            $Log_event=WORD_EDIT.WORD_PRODUCT.IMPLEMENT_FAIL;
            $db->edit_list("insert into log (Log_name,Log_event)"
                    . "values('$Log_name','$Log_event')");
            ////////////
        	echo EDIT_FAIL_TITLE;
        }
        else 
        {
            $product_images=$_REQUEST['product_images'];
            $img_product=$files->upload_image("mobile_product_image", $upload, $product_images, $image_width, $image_height);
            if($img_product=="Out of size")
            {
                echo IMAGE_SIZE;
                return ;
            }
            else if($img_product=="error in type")
            {
                echo IMAGE_FORMAT;
                return ;
            }
            else
            {
                $product_image=$img_product;
            }
	        $sql="update mobile_product set "
	        . "mobile_product_title='$mobile_product_title',mobile_product_image='$product_image',"
	        . "mobile_product_sort='$mobile_product_sort',mobile_product_show='$mobile_product_show' where mobile_product_id='$mobile_product_id'";
	        $rows=$db->edit_list($sql);
	        // 返回影响行数  如果影响行数>=1,则判断修改成功,否则失败
	        if($rows >= 1)
	        {
                ///////////
                $Log_name=$_COOKIE['login'];
                $Log_event=WORD_EDIT.WORD_PRODUCT."“".$mobile_product_title."”".IMPLEMENT_SUCCESS;
                $db->edit_list("insert into log (Log_name,Log_event)"
                        . "values('$Log_name','$Log_event')");
                ////////////
                echo "<script>alert('".EDIT_SUCCESS."');location.href=\"select.php?level=$mobile_product_level\";</script>";
	        }
	        else
	        {
                ///////////
                $Log_name=$_COOKIE['login'];
                $Log_event=WORD_EDIT.WORD_PRODUCT."“".$mobile_product_title."”".IMPLEMENT_FAIL;
                $db->edit_list("insert into log (Log_name,Log_event)"
                        . "values('$Log_name','$Log_event')");
                ////////////
                echo "<script>alert('".EDIT_FAIL."');location.href=\"select.php?level=$mobile_product_level\";</script>";
	        }
        }
    }