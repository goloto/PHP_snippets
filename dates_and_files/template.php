<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>

<table class="table">

    <thead>
        <tr>
            <th>Код</th>
            <th>Название</th>
            <th>Статус</th>
            <th>Дата начала</th>
            <th>Дата завершения</th>
            <th>Файлы</th>
        </tr>
    </thead>

    <tbody>

        <? foreach ($arResult['ITEMS'] as $arItem): ?>

            <tr>
                <td class="item-center"><?=$arItem['PROPERTIES']['CODE']['VALUE']?></td>
                <td class="item-bold"><?=$arItem['NAME']?></td>
                <td class="item-center <?=$arItem['STATUS'] == 'Завершена' ? 'item-green' : 'item-red'?>">
                    <?=$arItem['STATUS']?>
                </td>
                <td class="item-center"><?=$arItem['ACTIVE_FROM']?></td>
                <td class="item-center"><?=$arItem['ACTIVE_TO']?></td>
                <td>
                    <? if (count($arItem['PROPERTIES']['FILES']['PROPERTY_VALUE_ID']) > 1): ?>
                        <ul>
                            <? foreach ($arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'] as $file): ?>
                                <li>
                                    <a href="<?=$file['SRC']?>"><?=$file['FILE_NAME']?></a>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    <? else: ?>
                        <a href="<?=$arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']['SRC']?>">
                            <?=$arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']['FILE_NAME']?>
                        </a>
                    <? endif ?>
                </td>
            </tr>

        <? endforeach; ?>

    </tbody>

</table>