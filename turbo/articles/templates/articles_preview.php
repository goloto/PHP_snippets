<ul>

    <?foreach($arResult["ITEMS"] as $arItem):?>

        <li>
            <b><?=$arItem["DISPLAY_ACTIVE_FROM"]?></b> -
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" data-turbo="true"><?=$arItem["NAME"]?></a>
        </li>

    <?endforeach;?>

</ul>
