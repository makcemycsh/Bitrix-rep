<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
* @var CBitrixComponentTemplate $this
*/

for ($i = 0; $i < count($arResult["ITEMS"]); $i++):
    $arItem = $arResult["ITEMS"][$i];
   if($arItem["PROPERTIES"]["PRODUCTS"]["VALUE"]):
       foreach ($arItem["PROPERTIES"]["PRODUCTS"]["VALUE"] as $prodId):
           $ids[$prodId] = $prodId;
           $iBlockId = $arItem["DISPLAY_PROPERTIES"]["PRODUCTS"]["LINK_ELEMENT_VALUE"][$prodId]["IBLOCK_ID"];
       endforeach;
   endif;
endfor;

$prodRes = CIBlockElement::GetList(
   [],
   [
       "ID" => $ids,
       "IBLOCK_ID" => $iBlockId,
   ],
   false,
   false,
   [
       "ID",
       "IBLOCK_ID",
       "NAME",
       "PROPERTY_PRICE",
   ]
);

$price = array();
$name = array();
while ($prod = $prodRes->Fetch()){
   $price[$prod["ID"]] = $prod["PROPERTY_PRICE_VALUE"];
    $name[$prod["ID"]] = $prod["NAME"];
}

foreach ($arResult['ITEMS'] as $key => $arItem) {
   if($arItem["PROPERTIES"]["PRODUCTS"]["VALUE"]):
       foreach ($arItem["PROPERTIES"]["PRODUCTS"]["VALUE"] as $prodId):
           $newPrice = round(($price[$prodId] * ((100 - $arItem["PROPERTIES"]["PER"]["VALUE"]) / 100 )), 0);
           $arResult["ITEMS"][$key]["PRICES"][$prodId]["NAME"] = $name[$prodId];
           $arResult["ITEMS"][$key]["PRICES"][$prodId]["PRICE"] = $price[$prodId];
           $arResult["ITEMS"][$key]["PRICES"][$prodId]["NEW_PRICE"] = $newPrice;
       endforeach;
   endif;
}
