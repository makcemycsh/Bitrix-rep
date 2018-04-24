 </section>
        </div>
    </div>
</div>
<div class="block_footer">

</div>

</div>
<!-- end site_block -->
<!-- begin footer  -->
<footer class="footer">
    <div class="wrp_foo_centered">
        <div class="centered">
            <div class="foo_comp">
                <a href="/" class="logo"><img src="/local/images/foologo.png" alt=""></a>
                <div class="copy">
                    &copy; ООО «Интренет-аптека»
                </div>
            </div>
            <div class="foo_contact">
                <div class="fc_telephone"><?$APPLICATION->IncludeComponent(
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
                <div class="foo_address">
                    Архангельск <br>
                    пр. Троицкий, 999
                </div>
            </div>
            <!-- bot_menu  -->
                 <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bot_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => ".default",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => "",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N"
                    )
                );?>

                <!-- /end bot-menu -->
            <a href="http://oneway.su/" class="foo_create" target="_blank">
                <span class="foo_c_top">Создание сайта - </span>
                <span class="foo_c_logo"><img src="/local/images/create.png" alt=""></span>
            </a>
            <div class="btrx_btn_composite"><a href="http://www.1c-bitrix.ru/composite/" target="_blank">Быстро с 1С битрикс</a></div>
        </div>
    </div>
</footer>
<!-- end footer -->
</div>
<!-- SVG SOURSE -->
<svg class="icon-cart icon-cart-source" width="14px" height="14.013px" viewBox="0 0 14 14.013">
    <path id="iconCart"  d="M7.91,3.553L5.47,0L3.93,0.883l1.84,2.669H0v1.739h6.96L7,5.339l0.08-0.047H14V3.553H7.91L7.91,3.553
	z M2.65,12.911c0.1,0.551,0.539,0.978,1.1,1.056l0.02,0.019H9.73c0.08,0.018,0.17,0.027,0.26,0.027c0.63,0,1.16-0.447,1.279-1.038
	l0.051-0.049l1.81-6.738H0.88L2.65,12.911L2.65,12.911z M9.63,7.9c0.49,0,0.88,0.392,0.88,0.876c0,0.484-0.39,0.876-0.88,0.876
	S8.75,9.26,8.75,8.776C8.75,8.292,9.14,7.9,9.63,7.9L9.63,7.9z M9.58,10.454c0.5,0,0.91,0.404,0.91,0.904s-0.41,0.903-0.91,0.903
	c-0.51,0-0.91-0.404-0.91-0.903S9.07,10.454,9.58,10.454L9.58,10.454z M7.01,12.247c-0.49,0-0.88-0.395-0.88-0.883
	c0-0.488,0.39-0.883,0.88-0.883S7.9,10.876,7.9,11.364C7.9,11.852,7.5,12.247,7.01,12.247L7.01,12.247z M6.98,7.845
	c0.489,0,0.88,0.393,0.88,0.876S7.47,9.598,6.98,9.598C6.49,9.598,6.1,9.205,6.1,8.722S6.49,7.845,6.98,7.845L6.98,7.845z
	 M4.4,12.301c-0.48,0-0.87-0.389-0.87-0.869s0.39-0.869,0.87-0.869c0.49,0,0.88,0.389,0.88,0.869S4.891,12.301,4.4,12.301
	L4.4,12.301z M4.38,7.9c0.48,0,0.87,0.389,0.87,0.87c0,0.48-0.39,0.87-0.87,0.87c-0.49,0-0.88-0.389-0.88-0.87
	C3.5,8.289,3.89,7.9,4.38,7.9L4.38,7.9z"/>
</svg>

<svg class="icon-close icon-select-source" width="5.074px" height="5.074px" viewBox="0 0 5.074 5.074">
    <g>
        <path id="iconClose" d="M5.074,4.523L4.523,5.074L2.531,3.082l-1.98,1.992L0,4.523l1.992-1.98L0,0.551L0.551,0l1.98,1.992
		L4.523,0l0.551,0.551L3.082,2.543L5.074,4.523z"/>
    </g>
</svg>

<svg class="icon-ok icon-select-source"  width="12.001px" height="10px" viewBox="0 0 12.001 10">
    <path id="iconOk" d="M11.796,1.234l-0.938-1.013C10.721,0.074,10.559,0,10.37,0c-0.188,0-0.35,0.074-0.486,0.221L4.362,6.179L2.117,3.757
    C1.98,3.609,1.818,3.536,1.631,3.536c-0.188,0-0.35,0.073-0.487,0.221L0.205,4.77C0.068,4.917,0,5.092,0,5.295
    c0,0.202,0.068,0.377,0.205,0.524l3.67,3.96C4.012,9.927,4.174,10,4.362,10c0.188,0,0.35-0.073,0.486-0.221l6.948-7.495
    c0.137-0.147,0.205-0.323,0.205-0.525S11.933,1.381,11.796,1.234z"/>
</svg>
<!-- SVG SOURSE -->
</body>
</html>
