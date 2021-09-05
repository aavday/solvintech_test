<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <section class="news">
        <div class="container">
        <h1 class="news-title"><?$APPLICATION->ShowTitle(false);?></h1>
        <?foreach ($arResult["ITEMS"] as $arItem):?>
            <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'))?>
            <?$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'))?>
            <div class="news-item my-5" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                <?if($arItem['PREVIEW_PICTURE']):?>
                <img class="news-item__img img-fluid mx-auto" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
                <?endif?>
                <?if($arItem['NAME']):?>
                <h2 class="news-item__name my-3"><?=$arItem['NAME']?></h2>
                <?endif?>
                <?if($arItem['ACTIVE_FROM']):?>
                <p class="news-item__date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></p>
                <?endif?>
                <?if($arItem['PREVIEW_TEXT']):?>
                <p class="news-item__text"><?=$arItem['PREVIEW_TEXT']?></p>
                <?endif?>
        <?endforeach?>
        </div>
    </section>
<?endif?>