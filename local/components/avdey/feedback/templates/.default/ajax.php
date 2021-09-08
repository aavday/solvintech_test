<?
use Bitrix\Main\Loader;
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
    Loader::includeModule('iblock');
    Loader::IncludeModule('highloadblock');

    // создаём новый элемент инфоблока со значениями из формы и добавляем его в инфоблок

    unset($el);
    $el = new CIBlockElement;
    $properties = [
        "NAME" => $_POST["NAME"],
        "EMAIL" => $_POST["EMAIL"],
        "MESSAGE" => $_POST["MESSAGE"]
    ];
    $arFields = [
        'IBLOCK_ID'         => 3,
        'PROPERTY_VALUES'   => $properties,
        'NAME'              => 'Отзыв ' . date('d.m.Y H:i'),
        'DATE_ACTIVE_FROM'  => date('d.m.Y H:i')
    ];
    $el->Add($arFields);
}
?>