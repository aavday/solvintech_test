<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>

<?$APPLICATION->IncludeComponent(
    "intravision_test:certificates",
    "",
    Array(
        "IBLOCK_ID" => 1,
        "AJAX_MODE" => 'Y'
    )
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>