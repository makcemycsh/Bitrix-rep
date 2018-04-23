<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>

<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">

	<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<h3><?=$arItem["NAME"]?></h3>		
	<?endif;?>
	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
		<?
		$DATE_ACTIVE_TO = substr($arItem['DATE_ACTIVE_TO'], 0, strpos($arItem['DATE_ACTIVE_TO'], " "));
		?>
		<h4 class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?> - <?=$DATE_ACTIVE_TO?></h4>
	<?endif?>

	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		<p><?=$arItem["PREVIEW_TEXT"]?></p>
	<?endif;?>


	<?	
	//Если есть товар
	if(is_array($arItem["PROPERTIES"]["PRODUCT"]["VALUE"])):?>

		<p>Список товаров, участвуюих в акции:</p>
		<ul class="discount-products">

		<?
		//Товар со скидкой
		if($arItem["PROPERTIES"]["PER"]["VALUE"] != ""):?>
			<?foreach($arItem["DISPLAY_PROPERTIES"]["PRODUCT"]["LINK_ELEMENT_VALUE"] as $PRODUCT):?>
		<? $NEW_PRICE = $PRODUCT["PRICE"]['VALUE'] * (100 - $arItem["PROPERTIES"]["PER"]["VALUE"]) / 100; ?> 
				<li><?=$PRODUCT["NAME"]?> - <span class="old-price"><?=$PRODUCT["PRICE"]['VALUE']?></span> <span class="new-price"><?=$NEW_PRICE?><span class="rouble">o</span></span></li>
			<?endforeach;?>
		<?
		//Товар без скидки
		else:?>

			<?foreach($arItem["DISPLAY_PROPERTIES"]["PRODUCT"]["LINK_ELEMENT_VALUE"] as $PRODUCT):?>
				<li><?=$PRODUCT["NAME"]?></li>
			<?endforeach;?>


		<?endif;?>
		</ul>
		
	<?
	//Указана только скидка
	elseif($arItem["PROPERTIES"]["PER"]["VALUE"] != ""):?>
		<p>Скидка на товары до <?=$arItem["PROPERTIES"]["PER"]["VALUE"]?>%</p>
	<?endif;?>


	</div>
	<?endforeach;?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>

