<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

echo "Các số từ 100 đến 200 và chia hết cho 5 trong mảng:\n";
foreach ($array as $number) {
    if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
        echo $number . "\n";
    }
}
?>
