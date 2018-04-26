<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("canonical", "http://bitrix-test.loc/contacts/");
$APPLICATION->SetTitle("Контакты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback_form", 
	array(
		"COMPONENT_TEMPLATE" => "feedback_form",
		"EMAIL_TO" => "m.shilo.v80@gmail.com",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>