<?

ob_start();
include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/content_to_include.php');
$content_to_include = ob_get_contents();
ob_end_clean();

$arResult['DETAIL_TEXT'] = str_replace('#content_to_include#', $content_to_include, $arResult['DETAIL_TEXT']);