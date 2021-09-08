<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>
<?$APPLICATION->IncludeComponent("avdey:feedback", "", array(
	
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>