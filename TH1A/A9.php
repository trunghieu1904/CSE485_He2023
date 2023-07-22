<?php
function convertToLowerCase($arr) {
    return array_map(function ($value) {
        return is_string($value) ? strtolower($value) : $value;
    }, $arr);
}

$arrs1 = ['a', 'b', 'ABC'];
$arrs2 = ['1', 'B', 'C', 'E'];
$arrs3 = ['a', 0, null, false];

$result1 = convertToLowerCase($arrs1);
$result2 = convertToLowerCase($arrs2);
$result3 = convertToLowerCase($arrs3);

echo "Kết quả mảng 1: ";
print_r($result1);

echo "<Kết quả mảng 2: ";
print_r($result2);

echo "Kết quả mảng 3: ";
print_r($result3);
?>
