<?

class Tools {
    public static function encode_array($array) {
        foreach ($array as $key => $item) {
            if (is_array($item)) {
                $array[$key] = Tools::encode_array($item);
            } else {
                $array[$key] = mb_convert_encoding($item, 'UTF-8', 'Windows-1251');
            }
        }
        return $array;
    }
}