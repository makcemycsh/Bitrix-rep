
                                    </section>
                            <aside class="col-1-5">
                                <div class="right_module right_module_cart">
                                    <h3>Корзина <span class="m_total">273 <span class="rouble">o</span></span></h3>
                                    <table class="module_cart">
                                        <tr>
                                            <td class="mc_name">
                                                <a href="item.html">
                                                    Биопарокс аэрозоль 10 мл, 400 доз
                                                </a>
                                            </td>
                                            <td class="mc_price">
                                                30<span class="rouble">o</span>
                                            </td>
                                            <td class="mc_close">
                                                <a href="#">
                                                    <svg class="icon-close-svg" width="5.074px" height="5.074px" viewBox="0 0 5.074 5.074">
                                                        <use xlink:href="#iconClose"></use>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td class="mc_name">
                                                <a href="item.html">
                                                    Кальций-сандоз форте таблетки шипучие 500 мг, 10 шт.
                                                </a>
                                            </td>
                                            <td class="mc_price">
                                                23<span class="rouble">o</span>
                                            </td>
                                            <td class="mc_close">
                                                <a href="#">
                                                    <svg class="icon-close-svg" width="5.074px" height="5.074px" viewBox="0 0 5.074 5.074">
                                                        <use xlink:href="#iconClose"></use>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>   
                                        <tr>
                                            <td class="mc_name">
                                                <a href="item.html">
                                                    Анальгин-ультра таблетки 500 мг, 10 шт.
                                                </a>
                                            </td>
                                            <td class="mc_price">
                                                51<span class="rouble">o</span>
                                            </td>
                                            <td class="mc_close">
                                                <a href="#">
                                                    <svg class="icon-close-svg" width="5.074px" height="5.074px" viewBox="0 0 5.074 5.074">
                                                        <use xlink:href="#iconClose"></use>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <a href="order.html" class="rm_goorder btn"><i></i>Оформить заказ</a>
                                </div>
                                <div class="right_module right_module_pay">
                                    <h2>Оплата</h2>
                                    <p> <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => "/local/includes/pay_text.php"
                                            )
                                        );?></p>
                                </div>
                                <div class="right_module right_module_del">
                                    <div class="car">
                                        <div class="car_body">
                                            <svg width="91px" height="62px" viewBox="0 0 91 62">
                                                <path class="car_body_svg" clip-rule="evenodd" d="M0,21h2l3-1h3c0,0,14.901,0.8,18,1c8.826,0.569,13,1,13,1h2v5l2,3l1,1v16v14l2,1
                                                l44-16V11l1-1V3L55,0h-2L0,14V21z"/>
                                            </svg>
                                        </div>
                                        <img src="img/delivery.png" alt="" class="img_delivery">
                                    </div>  
                                    <h2>Доставка</h2>
                                    <p>Бесплатная доставка осуществляется при заказе от 1000 рублей по Архангельску, Северодвинску и Новодвинску. При меньшей сумме заказа стоимость доставки уточняйте у оператора.</p>
                                </div>
                                <div class="right_module right_module_mailing">
                                    <div class="rmm_wrp">
                                        <h2>Подписка</h2>
                                        <p>Подпишитесь на новости о наших акциях</p>
                                        
                                        <input type="text" class="mailing" value="Ваш e-mail" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                                        <button type="submit" class="btn btn_mailing"><i></i>Подписаться</button>
                                        
                                    </div>
                                    <div class="rmm_wrp_ok">
                                        <h2>Спасибо за подписку!</h2>
                                        <p>На Ваш почтовый ящик отправлено письмо для подтверждения подписки на рассылку нашего сайта.</p>
                                    </div>
                                    <script>
                                        
                                        $('.btn_mailing').click(function() {
                                            
                                            $(this).closest('.rmm_wrp').hide();
                                            $('.rmm_wrp_ok').show();
                                        });
                                        
                                    </script>
                                </div>
                                <div class="right_module right_module_social">
                                    <p>Cледите за нами <br>
                                    в социальных сетях:</p>
                                    <ul>
                                        <li><i>
                                            <svg width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve">
                                                <path class="rm_social" d="M10.268,9.408c-0.143,0.282-0.332,0.516-0.571,0.701c-0.282,0.222-0.593,0.38-0.931,0.475
                                                c-0.338,0.095-0.767,0.142-1.29,0.142H4.468V3.209h2.654c0.552,0,0.97,0.021,1.255,0.064c0.285,0.042,0.551,0.131,0.799,0.265
                                                c0.27,0.146,0.472,0.338,0.604,0.581C9.912,4.36,9.98,4.639,9.98,4.956c0,0.366-0.092,0.693-0.274,0.979
                                                C9.521,6.221,9.268,6.431,8.945,6.566v0.04c0.466,0.098,0.836,0.297,1.116,0.598c0.279,0.301,0.419,0.708,0.419,1.219
                                                C10.48,8.797,10.408,9.125,10.268,9.408 M10.943,0.5H3.058C1.645,0.5,0.5,1.645,0.5,3.057v7.885c0,1.413,1.146,2.558,2.559,2.558
                                                h7.884c1.413,0,2.557-1.145,2.557-2.558V3.057C13.5,1.645,12.356,0.5,10.943,0.5 M7.262,6.167c0.129-0.007,0.263-0.042,0.4-0.106
                                                C7.815,5.99,7.918,5.893,7.976,5.768c0.058-0.124,0.086-0.27,0.086-0.435c0-0.121-0.031-0.245-0.095-0.373
                                                C7.906,4.833,7.81,4.74,7.678,4.683C7.554,4.629,7.406,4.6,7.237,4.595c-0.17-0.006-0.424-0.009-0.76-0.009H6.346v1.591h0.237
                                                C6.906,6.177,7.132,6.174,7.262,6.167 M7.971,7.545C7.857,7.501,7.7,7.477,7.499,7.472C7.298,7.468,7.03,7.464,6.694,7.464H6.346
                                                v1.884h0.101c0.491,0,0.831-0.003,1.019-0.011c0.188-0.007,0.38-0.052,0.575-0.136c0.172-0.074,0.297-0.183,0.377-0.326
                                                C8.496,8.732,8.535,8.57,8.535,8.388c0-0.232-0.047-0.414-0.141-0.545C8.301,7.712,8.158,7.612,7.971,7.545"/>
                                            </svg>
                                        </i><a href="#">vk.com/online-apteka</a></li>
                                        <li><i>
                                            <svg width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve">
                                                <path class="rm_social" d="M9.412,10.656c-0.355,0.203-1.955,0.584-2.869,0.33c-0.914-0.254-1.168-1.371-1.168-1.371V6.186H4.64V4.588h0.735v-1.6
                                                h1.271v1.573h1.979v1.677H7v2.488C7,9.818,7.381,9.844,7.965,9.92c0.584,0.076,1.447-0.406,1.447-0.406V10.656z M11.875,0.5h-9.75
                                                C1.227,0.5,0.5,1.227,0.5,2.125v9.75c0,0.898,0.727,1.625,1.625,1.625h9.75c0.898,0,1.625-0.727,1.625-1.625v-9.75
                                                C13.5,1.227,12.773,0.5,11.875,0.5"/>
                                            </svg>
                                        </i><a href="#">twitter.com/online-apteka</a></li>
                                        <li><i>
                                            <svg width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve">
                                                <path class="rm_social" d="M10.91,6.966H9.428v4.092H7.805V6.966H6.983l0.025-1.593H7.83V5.164c0-0.6,0.07-0.959,0.213-1.254
                                                c0.141-0.295,0.314-0.523,0.693-0.707c0.381-0.187,0.717-0.28,1.298-0.28c0.597,0,0.429,0.03,1.001,0.03l0.009,1.605
                                                c0,0-1.33-0.046-1.461,0.081C9.326,4.887,9.461,5.373,9.461,5.373h1.648L10.91,6.966z M11.875,0.5h-9.75
                                                C1.227,0.5,0.5,1.227,0.5,2.125v9.75c0,0.898,0.727,1.625,1.625,1.625h9.75c0.896,0,1.625-0.728,1.625-1.625v-9.75
                                                C13.5,1.227,12.771,0.5,11.875,0.5"/>
                                            </svg>

                                        </i><a href="#">facebook.com/online-apteka</a></li>
                                        <li><i>
                                            <svg width="14px" height="14px" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve">
                                                <path class="rm_social" d="M12.785,1.214c-0.477-0.477-1.051-0.715-1.722-0.715H2.937c-0.671,0-1.246,0.238-1.722,0.715
                                                C0.738,1.691,0.499,2.265,0.499,2.937v8.126c0,0.671,0.238,1.246,0.715,1.723C1.691,13.262,2.266,13.5,2.937,13.5h8.126
                                                c0.671,0,1.246-0.238,1.722-0.715c0.477-0.477,0.715-1.051,0.715-1.723V2.937C13.5,2.265,13.262,1.691,12.785,1.214z M4.516,11.016
                                                c-0.212,0.212-0.467,0.317-0.766,0.317c-0.299,0-0.554-0.106-0.766-0.317c-0.212-0.212-0.317-0.467-0.317-0.766
                                                c0-0.299,0.106-0.554,0.317-0.766C3.195,9.273,3.451,9.167,3.75,9.167c0.299,0,0.554,0.106,0.766,0.317
                                                c0.212,0.212,0.317,0.467,0.317,0.766C4.833,10.549,4.727,10.804,4.516,11.016z M7.728,11.249c-0.056,0.056-0.121,0.084-0.195,0.084
                                                H6.45c-0.073,0-0.135-0.024-0.186-0.072c-0.051-0.048-0.079-0.109-0.085-0.182C6.117,10.21,5.775,9.466,5.155,8.844
                                                C4.534,8.224,3.789,7.883,2.92,7.82C2.847,7.815,2.786,7.787,2.738,7.736C2.69,7.685,2.666,7.623,2.666,7.55V6.466
                                                c0-0.073,0.028-0.138,0.085-0.195C2.807,6.215,2.875,6.19,2.954,6.195C4.263,6.269,5.38,6.768,6.306,7.694
                                                c0.925,0.925,1.425,2.043,1.498,3.352C7.81,11.125,7.784,11.192,7.728,11.249z M10.978,11.249c-0.056,0.056-0.121,0.085-0.195,0.085
                                                H9.7c-0.073,0-0.135-0.025-0.186-0.076c-0.051-0.051-0.079-0.113-0.085-0.186c-0.04-1.151-0.354-2.218-0.944-3.2
                                                C7.896,6.89,7.11,6.104,6.128,5.514C5.146,4.924,4.08,4.61,2.929,4.57C2.855,4.565,2.793,4.537,2.742,4.486
                                                C2.692,4.435,2.666,4.373,2.666,4.3V3.216c0-0.073,0.028-0.138,0.085-0.194C2.802,2.965,2.866,2.94,2.946,2.945
                                                c0.869,0.028,1.708,0.186,2.518,0.474C6.273,3.707,7.007,4.101,7.665,4.6C8.322,5.099,8.9,5.678,9.4,6.335
                                                c0.499,0.658,0.893,1.391,1.181,2.201c0.288,0.81,0.446,1.649,0.474,2.518C11.066,11.133,11.04,11.198,10.978,11.249z"/>
                                            </svg>

                                        </i><a href="#">online-apteka.ru/rss</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    
                    <hr class="hr_red">
                    <div class="centered centered_block_sale">
                        <h1>Акции, новинки и спецпредложения</h1>
                        <!-- <script>
                            jQuery(document).ready(function($) {

                                $("#owl-example").owlCarousel({
                                    margin:10,
                                    responsiveClass:true,
                                    autoplay:true,
                                    autoplayTimeout:3000,
                                    autoplayHoverPause:true,
                                    navigation:true,
                                    loop:true,
                                    responsive:{
                                        
                                        0:{
                                  items:1 // In this configuration 1 is enabled from 0px up to 479px screen size 
                              },
                              480:{
                                  items:2 // from 480 to 677 
                                  
                              },

                              780:{
                                  items:3, // from this breakpoint 678 to 959
                                  center:false // only within 678 and next - 959
                              },

                              800:{
                                  items:3, // from this breakpoint 960 to 1199
                                  margin:20, // and so on...
                                  center:false 

                              },

                              1000:{
                                items:3,
                                
                                margin: 20
                                
                              }                      
                            }
                        });
                                
                            });
                        </script> -->
                        <div id="owl-example" class="owl-carousel new_block_sale">

                            <div class="new_block_sale_item">                               
                                <a href="stock.html"><div class="new_bs_img"><img src="img/temp/sl1.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name new_bsi_name_new">
                                            <span>Стрепсилс</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">1 299</span>
                                            1 119 <span class="rouble">o</span>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                            <div class="new_block_sale_item">               
                                <a href="item.html">
                                    <div class="new_bs_img"><img src="img/temp/sl2.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name new_bsi_name_new">
                                            <span>Но-шпа форте</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">127</span>
                                            99 <span class="rouble">o</span>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                            <div class="new_block_sale_item">           
                                <a href="item.html">
                                    <div class="new_bs_img"><img src="img/temp/sl3.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name">
                                            <span>Аспирин кардио</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">127</span>
                                            99 <span class="rouble">o</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="new_block_sale_item">
                                <a href="item.html">
                                    <div class="new_bs_img"><img src="img/temp/sl4.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name">
                                            <span>Стрепсилс</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">127</span>
                                            99 <span class="rouble">o</span>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                            <div class="new_block_sale_item">                
                                <a href="stock.html">
                                    <div class="new_bs_img"><img src="img/temp/sl5.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name">
                                            <span>Но-шпа форте</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">127</span>
                                            99 <span class="rouble">o</span>
                                        </div>
                                    </div>  
                                </a>
                            </div>
                            <div class="new_block_sale_item">               
                                <a href="item.html">
                                    <div class="new_bs_img"><img src="img/temp/sl6.jpg" /></div>
                                    <div class="new_bs_info">
                                        <div class="new_bsi_name">
                                            <span>Асперин форте</span>
                                        </div>
                                        <div class="new_bsi_price">
                                            <span class="new_bsi_old">127</span>
                                            99 <span class="rouble">o</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <!-- end content -->
<div class="block_footer">

</div>

</div>
<!-- end site_block -->
<!-- begin footer  -->
<footer class="footer">
    <div class="wrp_foo_centered">
        <div class="centered">
            <div class="foo_comp">
                <a href="index.html" class="logo"><img src="/local/images/foologo.png" alt=""></a>
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
            <nav class="foo_nav">
                <a href="#">О компании</a>
                <a href="/discounts/">Акции</a>
                <a href="questions.html">Вопросы и ответы</a>
                <a href="/news/">Новости</a>
            </nav>
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
    </script>
</body>
</html>
