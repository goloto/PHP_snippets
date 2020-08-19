<?

$schema = [
    '@context' => 'http://schema.org',
    '@type' => 'Article',
    'name' => $arResult['NAME'],
    'headline' => $arResult['NAME'],
    'author' => $GLOBALS['ORGANIZATION_SCHEMA'],
    'image' => $arResult['PREVIEW_PICTURE']['SRC'],
    'publisher' => $GLOBALS['ORGANIZATION_SCHEMA'],
    'datePublished' => str_replace('.', '-', $arResult['DATE']),
    'dateModified' => str_replace('.', '-', $arResult['TIMESTAMP_X']),
    "mainEntityOfPage" => [
        "@type" => "WebPage",
        "@id" => $GLOBALS['SITE_INFO']['DOMAIN']
    ],
];

echo '<script type=\'application/ld+json\'>' . json_encode(Tools::encode_array($schema)) . '</script>';