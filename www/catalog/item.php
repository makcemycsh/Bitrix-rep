<?
/**
 * @global \CMain $APPLICATION
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Каталог');
?>
<div class="content">
    <div class="top_header_line"></div>
    <div class="centered">
        <div class="breadcrumbs">
            <a href="#">Обезболивающие. Спазмолитики. Анастетики</a>
            <span>></span>
            <a href="#">Болеутоляющие препараты</a>
        </div>
        <div class="item_position cf">
            <div class="item_position_gallery">

                <div id="gallery">
                    <div id="panel">
                        <a href="/local/images/temp/image_01_large.jpg"><img id="largeImage"
                                                                   src="/local/images/temp/image_01_large.jpg"/></a>
                    </div>
                </div>
            </div>
            <div class="item_position_description">

                <h1>Анальгин-ультра таблетки 500 мг, 10 шт.</h1>
                <script>
                    $(function () {
                        $('.accordeon-content').not('.active').hide();

                        $('.accordeon-caption').click(function () {
                            $('.accordeon-content').not($(this).next('.accordeon-content')).removeClass('active').hide();
                            $(this).next('.accordeon-content').addClass('active').show();
                        })
                    })
                </script>
                <dl id="accordeon" class="accordeon">
                    <dt class="accordeon-caption">Фармакологическое действие</dt>
                    <dd class="accordeon-content active">
                        <p>Метамизол натрия – действующее вещество Анальгина – обладает обезболивающим, жаропонижающим и
                            слабым противовоспалительным действием.</p>
                        <p>Анальгезирующее действие обуславливается подавлением биосинтеза эндогенных (вызывающих боли)
                            субстанций, таких, как эндопраксиды, брадикинины, и др. Жаропонижающее действие объясняется
                            подавлением образования и освобождения веществ из бактериальных эндотоксинов, нейтрофильных
                            лейкоцитов и др.</p>
                        <p>Является производным пиразолона. Действие развивается через 20–40 мин и достигает максимума
                            через 2 ч.</p>
                    </dd>
                    <dt class="accordeon-caption">Показания</dt>
                    <dd class="accordeon-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </dd>
                    <dt class="accordeon-caption">Противопоказания</dt>
                    <dd class="accordeon-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </dd>
                    <dt class="accordeon-caption">Способ применения и дозы</dt>
                    <dd class="accordeon-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </dd>
                    <dt class="accordeon-caption">Побочные действия</dt>
                    <dd class="accordeon-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </dd>
                </dl>
            </div>
            <div class="item_position_buy">
                <div class="ipb_row_price">
                    37,3 <span class="rouble">o</span><span class="ipb_weight"> / 200 гр.</span>
                </div>
                <label for="taste">Вкус:</label>
                <select name="taste" id="taste">
                    <option value="bitter">Горький</option>
                    <option value="sweet">Сладкий</option>
                    <option value="sour">Кислый</option>
                </select>
                <br> <br>
                <label for="volume">Размер:</label>
                <select name="volume" id="volume">
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select>
                <br> <br> <br>
                <div class="ipb_row_buy cf">
                    <div class="number">
                        <span class="plus"></span>
                        <input type="tel" value="1"/>
                        <span class="minus"></span>
                    </div>
                    <a href="cart.html" class="in_cart">
                        <i>
                            <svg class="icon-cart" width="14px" height="14.013px" viewBox="0 0 14 14.013">
                                <use xlink:href="#iconCart"></use>
                            </svg>
                        </i>
                        В корзину</a>
                </div>
                <div class="ipb_row_description">
                    <p>Форма выпуска: таблетки, покрытые пленочной оболочкой</p>
                    <p>Состав: 1 таблетка содержит 500 мг метамизола натрия</p>
                    <p>Упаковка: 10 шт.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end content -->

<script>
    // Вырывание заголовка из потока и перенос абсолютным позиционированием при ширине <650
    // Колдовство с переносом и расчетом высоты заголовка, при изменении размера экрана
    $(window).load(function () {
        var titleHeight = $('.item_position_description h1').outerHeight(true);
        var heightGalery = $('.item_position_gallery').outerHeight() + 15; //15 это отступ до блока с h1

        if ($(window).width() < 650) {
            var sumHeight = titleHeight + heightGalery;

            $('.item_position_gallery').css('margin-top', titleHeight);
            $('.item_position_description h1').css('top', -sumHeight);
        }
    });
    $(window).resize(function () {
        var titleHeight = $('.item_position_description h1').outerHeight(true);
        var heightGalery = $('.item_position_gallery').outerHeight() + 15; //15 это отступ до блока с h1

        if ($(window).width() < 635) {
            var sumHeight = titleHeight + heightGalery;

            $('.item_position_gallery').css('margin-top', titleHeight);
            $('.item_position_description h1').css('top', -sumHeight);
        } else {
            $('.item_position_gallery').css('margin-top', 0);
        }
    });

</script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
