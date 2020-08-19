<?

$GLOBALS['SITE_INFO'] = array(
    "DOMAIN"    => "https://DOMAIN",
    "SITE_NAME" => "SITE NAME",
    "PHONE"     => "COMPANY PHONE NUMBER",
    "EMAIL"     => "COMPANY E-MAIL",
    "EMAIL_ADD" => "ADDITIONAL COMPANY E-MAIL",
    "COMPANY"   => "COMPANY NAME",
    "LABEL"     => "COMPANY LABEL",
    "LOGO"      => "LOGO URL",
    "LOGO_TEXT" => "COMPANY LOGO TEXT",
    "ADDRESS"   => "COMPANY ADDRESS",
    "WORKTIME"  => "COMPANY WORKTIME",
    "COPYRIGHT" => "COMPANY COPYRIGHT",
    "COORDS"    => "COMPANY COORDINATES",
);

$GLOBALS['ORGANIZATION_SCHEMA'] = [
    '@type' => 'Organization',
    'name' => $GLOBALS['SITE_INFO']['COPYRIGHT'],
    'logo' => [
        '@type' => 'ImageObject',
        'url' => $GLOBALS['SITE_INFO']['LOGO']
    ],
    'address' => $GLOBALS['SITE_INFO']['ADDRESS'],
    'email' => $GLOBALS['SITE_INFO']['EMAIL'],
    'telephone' => $GLOBALS['SITE_INFO']['PHONE']
];