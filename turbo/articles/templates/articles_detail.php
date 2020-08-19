<?foreach($arResult["ITEMS"] as $arItem):?>

    <?$APPLICATION->IncludeFile(
        '/turbo/item-open.php',
        array('link' => '/news/' . $arItem["CODE"] . '/'),
        array("MODE"=>"PHP"));
    ?>

    <header><h1><?=$arItem["NAME"]?></h1></header>

    <?
    $detail_text = $arItem["DETAIL_TEXT"];
    $detail_text = html_entity_decode($detail_text);
    $detail_text = str_replace('<br>', '<br/>', $detail_text);
    ?>

    <?=$detail_text;?>

    <? include($_SERVER["DOCUMENT_ROOT"] . '/turbo/item-close.php'); ?>

<?endforeach;?>
