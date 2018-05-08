<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="/local/ajax/feedback.php" method="POST" class="feedback_form">
<?=bitrix_sessid_post()?>
	<div class="mf-lastid">
		<div class="mf-text">ID предыдущего обращения</div>
		<input type="number" name="user_lastid" value="" class="lastid">
	</div>
	<div class="mf-name wrap-input">
		<div class="mf-text">
			<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input type="text" name="user_name<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>_required<?endif?>" value="<?=$arResult["AUTHOR_NAME"]?>">
	</div>
	<div class="mf-email wrap-input">
		<div class="mf-text">
			<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>
		<input type="email" name="user_email<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>_required<?endif?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	</div>

	<div class="mf-tel wrap-input">
		<div class="mf-text">Ваш телефон</div>
		<input type="tel" name="user_tel" value="" data-required = "required">
	</div>

	<div class="mf-message">
		<div class="mf-text">
			<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
		</div>

		<textarea name="MESSAGE<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>_required<?endif?>" rows="5" cols="40"  ><?=$arResult["MESSAGE"]?></textarea>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="" >
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
<div class="result-text">
	

</div>
</div>

<script>	
$(document).ready(function() {
	$("input.lastid").keyup(function() {
		if($("input.lastid").val() != ""){
			$(".feedback_form .wrap-input").hide();
			$(".feedback_form .wrap-input input").prop('disabled', true);
		}
		else{
			$(".feedback_form .wrap-input").show();
			$(".feedback_form .wrap-input input").prop('disabled', false);
		}
	})

    $('.feedback_form').submit(function(e) {
    var $form = $(this);
       e.preventDefault(); 
       $.ajax({
	        type: $form.attr('method'),
	        url: $form.attr('action'),
	        data: $form.serialize(),
	       	success:function(data){
               $('.result-text').html(data);
            }
        });
    });
});
</script>
