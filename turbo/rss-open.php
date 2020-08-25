<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$GLOBALS['APPLICATION']->RestartBuffer();

global $APPLICATION;

header( 'Content-type: text/xml; charset=cp1251' );

echo '<?xml version="1.0" encoding="Windows-1251"?>'
?>

<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     version="2.0">
    <channel>

        <title>SITE TITLE</title>
        <link><?=$GLOBALS['SITE_INFO']['DOMAIN']?></link>
        <description>SITE DESCRIPTION</description>
        <language>ru</language>
        <generator>PAGES GENERATOR</generator>

        <turbo:analytics type="Yandex" id="YMETRICS_ID"></turbo:analytics>
        <turbo:analytics id="GOOGLE_ID" type="GOOGLE_ID"> </turbo:analytics>