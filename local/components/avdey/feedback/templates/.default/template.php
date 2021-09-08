<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):?>
    <section class="feedback">
        <div class="container">
            <form method="post" class="feedback-form my-3">
                <h2>Оставьте отзыв</h2>
                <div class="d-flex flex-column">
                    <div class="form-group">
                        <label for="" class="feedback-form__label label-required" for="NAME">Ваше имя</label>
                        <input type="text" class="feedback-form__input mb-2 form-control" name="NAME" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="feedback-form__label label-required" for="EMAIL">Ваш E-mail</label>
                        <input type="email" class="feedback-form__input mb-2 form-control" name="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="" class="feedback-form__label label-required" for="MESSAGE">Сообщение</label>
                        <textarea type="text" class="feedback-form__input mb-2 form-control" name="MESSAGE" rows="5" cols="40" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-1">Отправить</button>
            </form>
            <h2>Все отзывы</h2>
            <?foreach ($arResult['FEEDBACK'] as $arItem):?>
                <div class="feedack-item py-2">
                    <div class="mb-3">
                        <?if($arItem['PROPERTY_NAME_VALUE']):?>
                        <b class="feedback-item__name"><?=$arItem['PROPERTY_NAME_VALUE']?></b>
                        <?endif?>
                        <?if($arItem['PROPERTY_EMAIL_VALUE']):?>
                        <span class="feedback-item__email mx-2"><?=$arItem['PROPERTY_EMAIL_VALUE']?></span>
                        <?endif?>
                        <?if($arItem['DATE_ACTIVE_FROM']):?>
                        <span class="feedback-item__date"><?=$arItem['DATE_ACTIVE_FROM']?></span>
                        <?endif?>
                    </div>
                    <?if($arItem['PROPERTY_MESSAGE_VALUE']):?>
                    <p class="feedback-item__message"><?=$arItem['PROPERTY_MESSAGE_VALUE']?></p>
                    <?endif?>
                </div>
            <?endforeach?>
        </div>
        <div class="d-none template-path-for-ajax" data-template-path="<?=$this->GetFolder()?>"></div>
    </section>
<?endif?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");