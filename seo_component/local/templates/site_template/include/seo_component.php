<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<?
$curPage = $APPLICATION->GetCurPage();
$curDir  = $APPLICATION->GetCurDir();
$seoURL  = $curDir;

if(substr($curPage,-5) == ".html") {
    $seoURL = $curPage;
}

global $APPLICATION;

$APPLICATION->IncludeComponent('custom:seo', "", array(
    "IBLOCK_ID" => 10,
    "FILTER"    => array("NAME" => $seoURL),
    "SELECT"    => array("PROPERTY_*"),
));
?>