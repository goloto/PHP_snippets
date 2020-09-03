<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) { die(); } ?>

<?
use \Bitrix\Main\Type\DateTime;

foreach ($arResult['ITEMS'] as &$arItem) {

    $currentDate    = new DateTime();
    $activeFromDate = new DateTime($arItem['ACTIVE_FROM']);
    $activeToDate   = new DateTime($arItem['ACTIVE_TO']);

    $arItem['ACTIVE_FROM'] = $activeFromDate->format("d.m.Y H:i");
    $arItem['ACTIVE_TO']   = $activeToDate->format("d.m.Y H:i");

    $arItem['STATUS'] = $currentDate < $activeToDate ? 'Не завершена' : 'Завершена';

    if (count($arItem['PROPERTIES']['FILES']['PROPERTY_VALUE_ID']) > 1) {

        foreach ($arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'] as &$file) {

            if (mb_strlen($file['FILE_NAME']) > 20) {

                $file['FILE_NAME'] = str_replace(
                    mb_substr($file['FILE_NAME'], 20),
                    '...',
                    $file['FILE_NAME']
                );
            }
        }
    }
    else {

        $oldFileName = $arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']['FILE_NAME'];

        if (mb_strlen($oldFileName) > 20) {

            $newFileName = str_replace(
                mb_substr($oldFileName, 20),
                '...',
                $oldFileName);
            $arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']['FILE_NAME'] = $newFileName;
        }
    }

}