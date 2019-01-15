<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:51 AM
 */
$str = "a b c d e f g";
$result = explode(" ", $str);
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<hr>';
$str = "lxg,是真的,很厉害,不断变强吧";
$result = explode(",", $str);
echo '<pre>';
print_r($result);
echo '</pre>';
