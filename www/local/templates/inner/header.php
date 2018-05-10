<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

/**
 * @global \CMain $APPLICATION
 * @global \CUser $USER
 */
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <?
    $APPLICATION->AddBufferContent('ShowCanonical');

    function ShowCanonical() {
        global $APPLICATION;
        if ($APPLICATION->GetPageProperty('canonical')) {
            $canonical = $APPLICATION->SetPageProperty('canonical', $APPLICATION->GetPageProperty('canonical'));
            return $canonical;
        }
    }
    ?>  

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? $APPLICATION->ShowHead() ?>
    <?
    $assets = \Bitrix\Main\Page\Asset::getInstance();
    $assets->addCss('/local/css/template_styles.css');
    $assets->addJs('/local/js/site_scripts.js');
    CJSCore::Init(['jquery']);
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
    <? $APPLICATION->ShowPanel() ?>
    <div class="site_container">
        <!-- begin site_block  -->
        <div class="site_block">

            <!-- begin header  -->
            <header class="header">
                <div class="centered cf">
                    <a href="/" class="logo" style='padding-top: 23px;'><img src="/local/images/logo.png" alt=""></a>
                    <div class="header_user">
                        <ul class="cf">
                            <li class="hu_user">
                                <i>
                                    <svg class="hu_user_svg" width="14px" height="14.982px" viewBox="0 0 14 14.982">
                                        <path d="M8.79,8.738H8.75V7.418c0.53-0.812,0.891-1.774,0.891-2.25c0-0.304-0.021-0.581-0.061-0.836
                                        L9.6,4.331L9.95,3.835l0.09-0.276L9.46,3.09L9.27,2.869l0.44-0.414L9.03,1.49L8.939,1.38L8.75,1.352L8.61,1.214l-0.3-0.579L8.59,0
                                        L7.41,0.607l0.08-0.248C6.95,0.513,6.51,0.739,6.14,1.002L6.04,0.8l-0.3,0.083L5.47,1.104L5.141,1.076L5.09,1.407L5.311,1.82
                                        c0,0,0,0,0,0.001L4.79,2.042L4.65,2.427L4.57,3.417C4.47,3.827,4.439,4.168,4.43,4.365C4.4,4.611,4.38,4.876,4.38,5.168
                                        c0,0.459,0.351,1.406,0.87,2.212v1.375L0,11.533v3.449h14v-3.504L8.79,8.738L8.79,8.738z"/>
                                    </svg>
                                </i>
                                <a href="profile.html">Ярослава Марьина</a></li>
                                <li><a href="#">Выход</a></li>

                                
                                <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basket", 
	array(
		"COMPONENT_TEMPLATE" => "basket",
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => "",
		"PATH_TO_BASKET" => SITE_DIR."basket/",
		"PATH_TO_ORDER" => SITE_DIR."basket/order/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "N",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_PRODUCTS" => "N",
		"SHOW_TOTAL_PRICE" => "Y"
	),
	false
);?>

                         </ul>
                         <div class="hu_telephone"><?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "template1",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "COMPONENT_TEMPLATE" => ".default",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/includes/main_tel.php"
                            )
                            );?></div>
                        </div>
                        <div class="header_navigation">
                            <div class="header_navigation_search cf">
                                <div class="wrp_general_search">
                                    <button class="hn_button">
                                        <svg width="30px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20">
                                            <path class="loupe" d="M24.432,18.918l-4.629-4.347c1.477-1.992,1.287-4.755-0.591-6.537c-2.105-1.995-5.515-1.995-7.618,0
                                            c-2.103,1.995-2.103,5.229,0,7.223c1.906,1.808,4.877,1.96,6.985,0.49l4.622,4.339L24.432,18.918L24.432,18.918z M12.831,14.093
                                            c-1.418-1.346-1.418-3.526,0-4.872c1.42-1.345,3.719-1.345,5.137,0c1.419,1.346,1.419,3.526,0,4.872
                                            C16.55,15.438,14.251,15.438,12.831,14.093L12.831,14.093z"/>
                                        </svg>

                                    </button>
                                    <input type="text" name="general_search" class="hn_search">
                                    <div class="drop_down_search">


                                        <div class="drop_down_hint">
                                            <a href="#" class="ddh_name">
                                                <span class="ddh_link">чай</span>

                                            </a>
                                            <a href="#" class="ddh_name">
                                                <span class="ddh_link">чай</span>

                                            </a>
                                            <a href="#" class="ddh_name">
                                                <span class="ddh_link">чай</span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- top_menu -->
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "top_menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N"
                                )
                            );?>
                            <!-- /end top_menu -->
                        </div>
                    </div>
                </header>
                <!-- end header -->

                <? $APPLICATION->ShowViewContent("catalog")?>

                <div class="content">
                    <div class="top_header_line"> </div>
                    <div class="centered">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	),
	false
);?>
                        <div class="grid cf ">
                            <section class="col-4-5 cf">
                                <h1 class="page-title"><?$APPLICATION->ShowTitle('false')?></h1>