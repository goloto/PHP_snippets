<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){die();}?>

<?
CModule::IncludeModule("iblock");

$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
$arSelect = array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE");

if($arParams['SORT_BY'] && $arParams['SORT_ORDER']) $arOrder = array($arParams['SORT_BY'] => $arParams['SORT_ORDER']);
else $arOrder = array('SORT' => 'ASC');
if($arParams["SELECT"]) $arSelect = array_merge($arSelect, $arParams["SELECT"]);
if($arParams["FILTER"]) foreach($arParams['FILTER'] as $key=>$val) $arFilter[$key] = $val;

$arNavParams = false;

$rsItems  = CIBlockElement::GetList($arOrder, $arFilter, false, $arNavParams, $arSelect);

$arResult = array();
$ITEMS = array();

$i = 0;
while($ob = $rsItems->GetNextElement()){
    $ITEMS[$i]          = $ob->GetFields();
    $ITEMS[$i]["PROPS"] = $ob->GetProperties();
    $i++;
}

if(count($ITEMS) == 1){

    $arResult = $ITEMS[0];

    $H1          = $arResult["PROPS"]['H1']['VALUE'];
    $TITLE       = $arResult["PROPS"]['TITLE']['VALUE'];
    $KEYWORDS    = $arResult["PROPS"]['KEYWORDS']['VALUE'];
    $DESCRIPTION = $arResult["PROPS"]['DESCRIPTION']['VALUE'];

    IF($H1){
        $APPLICATION->SetTitle($H1);
    }

    IF($TITLE){
        $APPLICATION->SetPageProperty("title", $TITLE);
    }

    IF($KEYWORDS){
        $APPLICATION->SetPageProperty("keywords", $KEYWORDS);
    }

    IF($DESCRIPTION){
        $APPLICATION->SetPageProperty("description", $DESCRIPTION);
    }

    $this->IncludeComponentTemplate();  
}

?>
