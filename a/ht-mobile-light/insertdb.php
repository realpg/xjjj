<?php
header("Content-Type: text/html;charset=utf-8");
require ("../config/conn.php");//引入链接数据库
require_once ("include-power.php");//引入权限判断
require_once ("include-image.php");
    if(!empty($_REQUEST['btnAdd']))
    {
            $mobile_light_img=$files->upload_image("mobile_light_image", $upload, "", $image_width, $image_height);
            if($mobile_light_img=="Out of size")
            {
                echo IMAGE_SIZE;
                return;
            }
            else if($mobile_light_img=="error in type")
            {
                echo IMAGE_FORMAT;
                return;
            }
            else
            {
                $mobile_light_image=$mobile_light_img;
            }
            if(empty($mobile_light_image))
            {
                ///////////
                $Log_name=$_COOKIE['login'];
                $Log_event=WORD_ADD.WORD_LIGHT.IMPLEMENT_FAIL;
                $db->edit_list("insert into log (Log_name,Log_event)"
                    . "values('$Log_name','$Log_event')");
                ////////////
                echo ADD_LIGHT_IMAGE;
            }
            else
            {
                $sql="insert into mobile_light (mobile_light_image,mobile_light_show) value ('$mobile_light_image',1)" ;
                $rows=$db->edit_list($sql);
                // 返回影响行数  如果影响行数>=1,则判断添加成功,否则失败
                if($rows >= 1)
                {
                    ///////////
                    $Log_name=$_COOKIE['login'];
                    $Log_event=WORD_ADD.WORD_LIGHT."“".$light_title."”".IMPLEMENT_SUCCESS;
                    $db->edit_list("insert into log (Log_name,Log_event)"
                        . "values('$Log_name','$Log_event')");
                    ////////////
                    echo "<script>alert('".ADD_SUCCESS."');"
                        . "location.href=\"select.php\";</script>";
                }
                else
                {
                    ///////////
                    $Log_name=$_COOKIE['login'];
                    $Log_event=WORD_ADD.WORD_LIGHT.IMPLEMENT_FAIL;
                    $db->edit_list("insert into log (Log_name,Log_event)"
                        . "values('$Log_name','$Log_event')");
                    ////////////
                    echo "<script>alert('".ADD_FAIL."');"
                        . "location.href=\"select.php\";</script>";
                }
            }
    }