<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLengthString = '';
$minLengthString = $array[0];

foreach ($array as $str) {
    if (strlen($str) > strlen($maxLengthString)) {
        $maxLengthString = $str;
    }

    if (strlen($str) < strlen($minLengthString)) {
        $minLengthString = $str;
    }
}

echo "Chuỗi lớn nhất là $maxLengthString, độ dài = " . strlen($maxLengthString) . "\n";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = " . strlen($minLengthString) . "\n";
?>
