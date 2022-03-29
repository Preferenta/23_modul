<?php

function getPartsFromFullname() {
$str = 'Иванов Иван Иванович';
$arr = &$str;
$arr2 = explode(' ', $arr);

$keys = ['surname', 'name', 'patronomyc'];
$array = array_combine($keys, $arr2);
print_r($array);
}
getPartsFromFullname();
?>