<?php
header("Content-Type: text/html;charset=utf-8");
require ("../config/conn.php");//引入链接数据库
require_once ("include-power.php");//引入权限判断
require_once ("include-image.php");
    if(!empty($_REQUEST['btnAdd']))
    {
        $mobile_product_title=$_REQUEST['mobile_product_title'];
        $mobile_product_sort=$_REQUEST['mobile_product_sort'];
        $mobile_product_show=$_REQUEST['mobile_product_show'];
        $mobile_product_level=$_REQUEST['mobile_product_level'];
    	if(empty($mobile_product_title))
        {
            ///////////
            $Log_name=$_COOKIE['login'];
            $Log_event=WORD_ADD.WORD_PRODUCT.IMPLEMENT_FAIL;
            $db->edit_list("insert into log (Log_name,Log_event)"
                    . "values('$Log_name','$Log_event')");
            ////////////
        	echo ADD_FAIL_TITLE;
        }
        else
        {
//            $img_product_logo=$files->upload_image("product_logo", $upload, "", $logo_width, $logo_height);
//            if($img_product_logo=="Out of size")
//            {
//                echo IMAGE_SIZE;
//                return ;
//            }
//            else if($img_product_logo=="error in type")
//            {
//                echo IMAGE_FORMAT;
//                return ;
//            }
//            else
//            {
//                $product_logo=$img_product_logo;
//            }
//            if(empty($product_logo))
//            {
//                ///////////
//                $Log_name=$_COOKIE['login'];
//                $Log_event=WORD_ADD.WORD_PRODUCT.IMPLEMENT_FAIL;
//                $db->edit_list("insert into log (Log_name,Log_event)"
//                    . "values('$Log_name','$Log_event')");
//                ////////////
//                echo ADD_FAIL_IMAGE;
//            }
//            else
//            {
                $img_product=$files->upload_image("mobile_product_image", $upload, "", $image_width, $image_height);
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
                if(empty($product_image))
                {
                    ///////////
                    $Log_name=$_COOKIE['login'];
                    $Log_event=WORD_ADD.WORD_PRODUCT.IMPLEMENT_FAIL;
                    $db->edit_list("insert into log (Log_name,Log_event)"
                        . "values('$Log_name','$Log_event')");
                    ////////////
                    echo ADD_FAIL_IMAGE;
                }
                else
                {
                    $sql="insert into mobile_product"
                        . "(mobile_product_title,mobile_product_image,mobile_product_sort,mobile_product_show,mobile_product_level) "
                        . "value ('$mobile_product_title','$product_image','$mobile_product_sort','$mobile_product_show','$mobile_product_level')" ;
                    $rows=$db->edit_list($sql);
                    // 返回影响行数  如果影响行数>=1,则判断添加成功,否则失败
                    if($rows >= 1)
                    {
                        ///////////
                        $Log_name=$_COOKIE['login'];
                        $Log_event=WORD_ADD.WORD_PRODUCT."“".$mobile_product_title."”".IMPLEMENT_SUCCESS;
                        $db->edit_list("insert into log (Log_name,Log_event)"
                            . "values('$Log_name','$Log_event')");
                        ////////////
                        echo "<script>alert('".ADD_SUCCESS."');location.href=\"select.php?level=$mobile_product_level\";</script>";
                    }
                    else
                    {
                        ///////////
                        $Log_name=$_COOKIE['login'];
                        $Log_event=WORD_ADD.WORD_PRODUCT.IMPLEMENT_FAIL;
                        $db->edit_list("insert into log (Log_name,Log_event)"
                            . "values('$Log_name','$Log_event')");
                        ////////////
                        echo "<script>alert('".ADD_FAIL."');"
                            . "location.href=\"select.php?level=$mobile_product_level\";</script>";
                    }
                }
            }
//        }
    }