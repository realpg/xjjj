<?php
$banner_row=$db->query_list_id("select image_image from image where image_id=1 and image_show=1");
if($banner_row)
{
    ?>
        <div class="t_banner" style="position: relative;">
            <a href="javascript:void(0);"  id="ClickMe" onclick="showpopup()">
                <div class="t_banner_bg">
                    <img src="<?=$banner_row["image_image"]?>">
                </div>
            </a>
            <div style="width:298px; position:absolute;right:15%; top:20%;">
                <div class="tic_input bg-white">
                    <label class="ipt-label">姓名：</label>
                    <div class="ipt-box">
                        <input type="text" class="ipt_txt" placeholder="请输入收件人姓名" id="reserve_name">
                    </div>
                </div>
                <div class="tic_input bg-white">
                    <label class="ipt-label">手机：</label>
                    <div class="ipt-box">
                        <input type="text" class="ipt_txt" placeholder="请输入手机号码" id="reserve_tel" maxlength="11">
                    </div>
                </div>
                <div class="tic_input bg-white">
                    <label class="ipt-label">验证码：</label>
                    <div class="ipt-box">
                        <input type="text" class="ipt_txt short" placeholder="请输入图形验证码" id="reserve_code">
                    </div>
                    <div class="test" style="width:90px;">
                        <img class="verify-image"  id="checkpic" src="./checkcode.php" height="37" width="90" onclick="changing();">
                    </div>
                </div>
                <div class="tic_btn">
                    <button class="btn" onclick="leaveword_f()">
                        <img src="./images/btn-bg.png">
                    </button>
                </div>
            </div>
        </div>
    <?php
}
$round_row=$db->query_list_id("select image_image from image where image_id=12 and image_show=1");
if($round_row)
{
    ?>
    <div class="t_banner" style="margin-top:10px;">
        <a href="javascript:void(0);"  id="ClickMe" onclick="showpopup()">
            <div class="t_banner_bg">
                <img src="<?=$round_row["image_image"]?>" />
            </div>
        </a>
    </div>
    <?php
}
?>
