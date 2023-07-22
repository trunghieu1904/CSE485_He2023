<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

$result = "Màu {$arrs[0]} là màu yêu thích của {$names[0]}, ";
$result .= "{$arrs[3]} là màu yêu thích của {$names[1]}, ";
$result .= "{$arrs[2]} là màu yêu thích của {$names[2]}, ";
$result .= "còn màu yêu thích của tôi là màu {$arrs[3]}";

echo $result;
?>
