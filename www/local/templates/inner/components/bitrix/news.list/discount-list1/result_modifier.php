<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult["ITEMS"] as $key => $arElement) {
  
   $ID_PRODUCT = $arElement['DISPLAY_PROPERTIES']['PRODUCT']['VALUE'];   

   foreach ($ID_PRODUCT as $id => $PRODUCT) {

      $res = CIBlockElement::GetProperty(1, $PRODUCT, "sort", "asc", array("CODE" => "PRICE"));
      if ($ob = $res->GetNext()) {
         $VALUE = $ob['VALUE'];
         $arResult['ITEMS'][$key]["DISPLAY_PROPERTIES"]["PRODUCT"]["LINK_ELEMENT_VALUE"][$PRODUCT]['PRICE']['VALUE'] = $VALUE;
      }
   }
   
}
$this->__component->arResult['PRICE'] = $arResult['PRICE']; 
$this->__component->SetResultCacheKeys( array( "PRICE" ) );
?>