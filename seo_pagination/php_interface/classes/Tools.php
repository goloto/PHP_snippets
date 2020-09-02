<?php


class Tools
{
    public static function seoPagination() {
        if (isset($_GET['PAGEN_1']) && intval($_GET['PAGEN_1']) > 0) {
            $title = $GLOBALS['APPLICATION']->GetPageProperty('title');

            $GLOBALS['APPLICATION']->SetPageProperty('title', $title.' :: Страница '.intval($_GET['PAGEN_1']));
        }
    }
}