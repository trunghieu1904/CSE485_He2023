<?php

function convertToUppercase($arr) {
    return array_map(function ($value) {
        return is_string($value) ? strtolower($value) : $value;
    }, $arr);
}

$arrs1 = ['a', 'b', 'ABC'];
$arrs2 = ['1', 'b', 'c', 'd'];
$arrs3 = ['a', 0, null, false];

$result1 = convertToUppercase($arrs1);
$result2 = convertToUppercase($arrs2);
$result3 = convertToUppercase($arrs3);

echo "Kết quả mảng 1: ";
print_r($result1);

echo "Kết quả mảng 2: ";
print_r($result2);

echo "Kết quả mảng 3: ";
print_r($result3);
?>