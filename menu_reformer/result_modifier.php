<?
$arDepthLevels = array();
$arNewMenu = array();

foreach($arResult as $arItem) {
    $arDepthLevels[$arItem['DEPTH_LEVEL']][] = $arItem;
}

$levelsCount = count($arDepthLevels);

foreach ($arDepthLevels as $arItems) {
    foreach($arItems as $arItem) {
        switch (count($arItem['CHAIN']))
        {
            case 1:
                $newElement = array();
                $newElement['NAME'] = $arItem['TEXT'];
                $newElement['LINK'] = $arItem['LINK'];

                $arNewMenu[$arItem['TEXT']] = $newElement;
                break;
            case 2:
                $newElement = array();
                $newElement['NAME'] = $arItem['TEXT'];
                $newElement['LINK'] = $arItem['LINK'];

                $arNewMenu[$arItem['CHAIN'][0]]['ELEMENTS'][$arItem['TEXT']] = $newElement;
                break;
            case 3:
                $newElement = array();
                $newElement['NAME'] = $arItem['TEXT'];
                $newElement['LINK'] = $arItem['LINK'];

                $arNewMenu[$arItem['CHAIN'][0]]['ELEMENTS'][$arItem['CHAIN'][1]]['ELEMENTS'][$arItem['TEXT']] = $newElement;
                break;
        }
    }
}

$arResult = $arNewMenu;