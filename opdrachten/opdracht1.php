function createArray($length) {
    if ($length < 5) {
        $length = 5;
    }
    $array = array();
    for ($i = 0; $i < $length; $i++) {
        $array[] = $i;
    }
    return $array;
}
