<?php

CModule::AddAutoloadClasses('',
    array(
        "Tools" => "/local/php_interface/classes/Tools.php"
    )
);

AddEventHandler('main', 'OnEpilog', 'Tools::seoPagination');