<?
/**
 * @global \CMain $APPLICATION
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Каталог");
?><!-- begin choice_category_list  --> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"includes",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => "includes",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/includes/catalog.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	".default_old_1", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/basket/",
		"BIG_DATA_RCM_TYPE" => "personal",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => ".default_old_1",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "ADD",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "ADD",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "TASTE",
			1 => "SIZE",
			2 => "",
		),
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "9",
			1 => "10",
			2 => "14",
			3 => "15",
			4 => "16",
			5 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_SHOW_BASIS_PRICE" => "Y",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "shows",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "asc",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "cont",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => "-",
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "top-left",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "5",
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE_MOBILE" => "",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "Купить",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "TASTE",
			1 => "SIZE",
		),
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "asc",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "TASTE",
			1 => "SIZE",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "20",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "base",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_ADD_TO_BASKET_ACTION" => "BUY",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "3",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "site",
		"TOP_ADD_TO_BASKET_ACTION" => "BUY",
		"TOP_ELEMENT_COUNT" => "16",
		"TOP_ELEMENT_SORT_FIELD" => "shows",
		"TOP_ELEMENT_SORT_FIELD2" => "shows",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "asc",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_LINE_ELEMENT_COUNT" => "4",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "5",
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "",
		),
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_PROPERTY_CODE_MOBILE" => "",
		"TOP_ROTATE_TIMER" => "30",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_ALSO_BUY" => "N",
		"USE_BIG_DATA" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "N",
		"USE_STORE" => "N",
		"VARIABLE_ALIASES" => array(
			"ELEMENT_ID" => "ELEMENT_ID",
			"SECTION_ID" => "SECTION_ID",
		)
	),
	false
);?><!-- end choice_category_list --> <!-- begin content  -->
<!-- <div class="content">
	<div class="centered">
		<div class="grid cf">
 <section>
			<div class="list_goods filter-result-content">
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/cacao.jpg" alt="">
						</div>
 <span class="ig_name">Кальций-сандоз форте таблетки шипучие 500&nbsp;мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/tea.jpg" alt="">
						</div>
 <span class="ig_name">Анальгин-ультра таблетки 500 мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/cacao.jpg" alt="">
						</div>
 <span class="ig_name">Кальций-сандоз форте таблетки шипучие 500&nbsp;мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/tea.jpg" alt="">
						</div>
 <span class="ig_name">Анальгин-ультра таблетки 500 мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/cacao.jpg" alt="">
						</div>
 <span class="ig_name">Кальций-сандоз форте таблетки шипучие 500&nbsp;мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/tea.jpg" alt="">
						</div>
 <span class="ig_name">Анальгин-ультра таблетки 500 мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/cacao.jpg" alt="">
						</div>
 <span class="ig_name">Кальций-сандоз форте таблетки шипучие 500&nbsp;мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/tea.jpg" alt="">
						</div>
 <span class="ig_name">Анальгин-ультра таблетки 500 мг, 10 шт.</span> </a>
						<div class="ig_rowinfo">
 <span>31,4<span class="rouble">o</span></span> <span class="ig_weight">/ 30 шт.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
				<div class="wrp_item_goods">
					<div class="item_goods">
 <a href="item.html">
						<div class="ig_img">
 <img src="/local/images/temp/drugs.jpg" alt="">
						</div>
 <span class="ig_name">Биопарокс аэрозоль 10 мл, 400 доз</span> </a>
						<div class="ig_rowinfo">
 <span>27,3<span class="rouble">o</span></span> <span class="ig_weight">/ 400 гр.</span>
						</div>
						<div class="ig_buy cf">
 <a href="cart.html" class="in_cart"> <i> </i>В корзину</a>
						</div>
					</div>
				</div>
			</div>
 </section>
		</div>
	</div>
</div> -->
    <!-- end content -->
    <script>

        $(window).load(function () {
            // Берем ширину сайта и подставляем ее в ширину абсолютно спозиционированного choice_category_list
            var widSite = $('.site_block').width();
            $('.choice_category_list').outerWidth(widSite);

            // Инициализация нестандартного горизонтального скролла и выстраивание колокнокы
            $(function () {
                var ul = $('.choice_category_category'),
                    sumH = 0;
                i = 0;
                $('.choice_category_long_row > .choice_category_category').each(function () {
                    ulH = $(this).outerHeight(true);
                    sumH += ulH;
                    if (sumH >= 300 && sumH <= 360) {
                        $(this).addClass('wrapCcc' + i);
                        i++;
                        sumH = 0;
                    } else if (sumH > 360) {
                        i++;
                        $(this).addClass('wrapCcc' + i);
                        sumH = 0;
                        sumH += ulH;
                    } else {
                        $(this).addClass('wrapCcc' + i);
                    }
                });

                // Оборачивание размеченных ul колонками
                for (var j = 0; j <= i; j++) {
                    var t = '.wrapCcc' + j;
                    $(t).wrapAll('<div class="choice_category_col"></div>');
                }

                // Подсчет сумарной ширины всех колонок
                // И подстановка значения в choice_category_long_row
                var sumWidColum = 0;
                $('.choice_category_col').each(function () {
                    sumWidColum += $(this).outerWidth();
                })
                $('.choice_category_long_row').width(sumWidColum);


                // подключение стилизованной полосы прокрутки
                $('.scroll-pane3').jScrollPane();
                $('.choice_category_list').hide();
            });

            // Инициализация нестандартного вертикального скролла
            $(function () {
                // стилизация полосы проскрутки в скрытом блоке
                $('.scroll-pane').jScrollPane();
                $('.frtr_producer').removeClass('frtr_producer_active');

            });
        });
        $(window).resize(function () {
            // Берем ширину сайта при ресайзе и подставляем ее в ширину абсолютно спозиционированного choice_category_list
            var widSite = $('.site_block').width();
            $('.choice_category_list').outerWidth(widSite);

            // Инициализация нестандартного скролла при ресайзе
            //
            $(function () {
                $('.scroll-pane3').jScrollPane();
            });
        });

        // Открытие/закрытие choice_category_list
        $(document).ready(function () {
            $(function () {
                $('.filter_choice_cat_selection span').click(function (e) {
                    if (!$('.frtr_producer').hasClass('frtr_producer_active')) {
                        var $blockSlide = $('.choice_category_list');
                        if ($blockSlide.css('display') != 'block') {
                            $blockSlide.slideDown('fast');
                            $('.ccs_arrow').toggle();
                            $('.scroll-pane3').jScrollPane();

                            $('.frtr_producer').removeClass('frtr_producer_active').hide();

                            var yourClick = true;
                            $(document).bind('click.myEvent', function (e) {
                                if (!yourClick && $(e.target).closest('.choice_category_list').length == 0) {
                                    $blockSlide.slideUp('fast');
                                    $('.frtr_producer').show();
                                    $('.ccs_arrow').toggle();
                                    $(document).unbind('click.myEvent');
                                    return;
                                }
                                yourClick = false;
                            });
                        }
                        e.preventDefault();
                    }
                });
            });


            // Открытие/закрытие выбора производителя
            $(function () {
                $('.frtr_producer_name').click(function (a) {
                    var $blockToggle = $('.frtr_producer');
                    if ($blockToggle.hasClass('frtr_producer_active') != true) {
                        $blockToggle.addClass('frtr_producer_active');
                        $('frtr_arrow_down').hide('fast');
                        $('frtr_arrow_up').show('fast');

                        var yourSecondClick = true;
                        $(document).bind('click.myEvent', function (a) {
                            if (!yourSecondClick && $(a.target).closest('.frtr_producer_list').length == 0) {
                                $blockToggle.removeClass('frtr_producer_active');
                                $('frtr_arrow_up').hide('fast');
                                $('frtr_arrow_down').show('fast');

                                $(document).unbind('click.myEvent');
                                return;
                            }
                            yourSecondClick = false;
                        });
                    }
                    a.preventDefault();
                });
            });


            $('.link_module_favorite').click(function () {
                $('.row_tabs_choice a ').removeClass('rtc_active');
                $(this).addClass('rtc_active');
                $('.tabs_module_cart').hide();
                $('.tabs_module_favorite').show();
            });


            $('.link_module_cart').click(function () {
                $('.row_tabs_choice a ').removeClass('rtc_active');
                $(this).addClass('rtc_active');
                $('.tabs_module_favorite').hide();
                $('.tabs_module_cart').show();

            });
        });
        jQuery(document).ready(function ($) {
            $('.right_module_filter .filter_group_title').click(function () {
                $(this).parent().toggleClass('filter_group_active');
                $(this).children('.filter_arr_down').toggleClass('filter_arr_rot');

            });


            // Подключение нестандартного скролла в мобильном фильтре
            $('.m_wrp_filter').jScrollPane().parent().hide();

            $('.m_module_filter .plashka').click(function () {
                $(this).parent().toggleClass('m_module_filter_show');
            });


        });
    </script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>