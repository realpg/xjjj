<?php
$banner_row=$db->query_list_id("select image_image from image where image_id=1 and image_show=1");
if($banner_row)
{
    ?>
    <a href="javascript:void(0);"  id="ClickMe" onclick="showpopup()">
        <div class="t_banner">
            <div class="t_banner_bg"><img src="<?=$banner_row["image_image"]?>"></div>
        </div>
    </a>
    <?php
}
?>
