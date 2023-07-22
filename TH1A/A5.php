<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

$valueB = $a['b']['o']['b'];
echo "Giá trị = $valueB mà có key là b";

$valueC = $a['a']['c'];
echo "\nGiá trị = $valueC mà có key là c";

$infoA = $a['a'];
echo "\nThông tin của phần tử có key là a: ";
print_r($infoA);
?>
