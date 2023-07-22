<?php
$arrs=['PHP', 'HTML','CSS','JS'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>tên khóa học</th>
        </tr>
        <?php
        foreach ($arrs as $key=>$value){
        ?>
        <tr>
            <td>
                <?php echo $value ?>
            </td>
        </tr>
        <?php }
        ?>
    </table>
</body>
</html>