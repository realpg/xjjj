<?php
$image_service_row=$db->query_list_id("select image_image from image where image_id=6 and image_show=1");
if($image_service_row)
{
    ?>
    <div class="service repair-service">
        <div class="tit">
            服务保障
        </div>
        <div class="service-in">
            <img src="../<?=$image_service_row['image_image']?>"/>
        </div>
    </div>
    <?php
}