<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$arResult = Array();
use Bitrix\Main\Loader;
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
Loader::includeModule('iblock');
Loader::IncludeModule('highloadblock');

// Получаем элементы инфоблока с отзывами и забрасываем их в $arResult

$arSelect = Array('ID', 'NAME', 'DATE_ACTIVE_FROM', 'PROPERTY_NAME', 'PROPERTY_EMAIL', 'PROPERTY_MESSAGE');
$arFilter = Array('IBLOCK_ID'=>3, 'ACTIVE'=>'Y');
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);

$i = 0;
while($ob = $res->GetNextElement()){ 
   $arResult['FEEDBACK'][$i] = $ob->GetFields();  
   $i++;
}

// Получаем комментарии к отзывам из highload-блока и добавляем их в $arResult

$block = HLBT::getById(1)->fetch();
$entity  = HLBT::compileEntity($block);
$entityDataClass = $entity->getDataClass();
$rsData = $entityDataClass::getList(array(
   'select' => array('*')
));

$list = [];
while ($element = $rsData->fetch()) array_push($list, $element);
$arResult['COMMENTS'] = $list;

$this->IncludeComponentTemplate();
?>