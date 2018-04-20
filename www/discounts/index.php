<?
/**
 * @global \CMain $APPLICATION
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Скидки');
?>

    <div class="content">
        <div class="top_header_line"></div>
        <div class="centered">

            <div class="grid cf ">
                <section class="col-4-5 cf">
                    <div class="delivery_information">
                        <!-- Указаны товары и скидка. Берутся цены из товаров и считается новая цена -->
                        <div>
                            <h3>Скидка на витамины!</h3>
                            <h4 class="date">26.10.2017 - 15.11.2017</h4>
                            <p>Специальное предложение на детские витамины.</p>
                            <p>Список товаров, участвующих в акции:</p>
                            <ul class="discount-products">
                                <li>Витаминки 1 - <span class="old-price">200</span> <span class="new-price">140<span class="rouble">o</span></span></li>
                                <li>Витаминки 2 - <span class="old-price">150</span> <span class="new-price">105<span class="rouble">o</span></span></li>
                                <li>Витаминки 3 - <span class="old-price">250</span> <span class="new-price">175<span class="rouble">o</span></span></li>
                                <li>Витаминки 4 - <span class="old-price">220</span> <span class="new-price">154<span class="rouble">o</span></span></li>
                            </ul>
                        </div>
                        <!-- Указана только скидка -->
                        <div>
                            <h3>Чёрная пятница</h3>
                            <h4 class="date">26.10.2017 - 15.11.2017</h4>
                            <p>Чёрная пятница в нашей аптеке!</p>
                            <p>Скидка на товары до 80%</p>
                        </div>
                        <!-- Указаны только товары -->
                        <div>
                            <h3>Скидки на БАДы</h3>
                            <h4 class="date">26.10.2017 - 15.11.2017</h4>
                            <p>У нас тут залежалось немного биологически активных добавок, поэтому мы решили сделать на них скидку.</p>
                            <p>Список товаров, участвующих в акции:</p>
                            <ul class="discount-products">
                                <li>БАД 1</li>
                                <li>БАД 2</li>
                                <li>БАД 3</li>
                                <li>БАД 4</li>
                                <li>БАД 5</li>
                            </ul>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>