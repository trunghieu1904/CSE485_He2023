<?php
function tinhTong($arr) {
    return array_sum($arr);
}

function tinhTich($arr) {
    return array_product($arr);
}

function tinhHieu($arr) {
    return $arr[0] - array_sum(array_slice($arr, 1));
}

function tinhThuong($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] == 0) {
            return "Không thể chia cho 0";
        }
        $result /= $arr[$i];
    }
    return $result;
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

$tong = tinhTong($arrs);
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong;

$tich = tinhTich($arrs);
echo "\nTích các phần tử = " . implode(" * ", $arrs) . " = " . $tich;

$hieu = tinhHieu($arrs);
echo "\nHiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu;

$thuong = tinhThuong($arrs);
echo "\nThương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong;
?>
