<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:05 AM
 */
//hw_014_四个字颜色的随机变化

//是个文字的颜色都是随机生成的,使用HTML和PHP嵌套实现效果

$color1 = mt_rand(0, 255);
$color2 = mt_rand(0, 255);
$color3 = mt_rand(0, 255);

$color11 = mt_rand(0, 255);
$color22 = mt_rand(0, 255);
$color33 = mt_rand(0, 255);

$color111 = mt_rand(0, 255);
$color222 = mt_rand(0, 255);
$color333 = mt_rand(0, 255);

$color1111 = mt_rand(0, 255);
$color2222 = mt_rand(0, 255);
$color3333 = mt_rand(0, 255);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <span style="color: rgb(
    <?php echo $color1 ?>,
    <?php echo $color2 ?>,
    <?php echo $color3 ?>
            )">北</span>
    <span style="color: rgb(
    <?php echo $color11 ?>,
    <?php echo $color22 ?>,
    <?php echo $color33 ?>
            )">京</span>
    <span style="color: rgb(
    <?php echo $color111 ?>,
    <?php echo $color222 ?>,
    <?php echo $color333 ?>
            )">你</span>
    <span style="color: rgb(
    <?php echo $color1111 ?>,
    <?php echo $color2222 ?>,
    <?php echo $color3333 ?>
            )">好</span>
</p>
</body>
</html>

<!--重复代码这么多,咋想的-->