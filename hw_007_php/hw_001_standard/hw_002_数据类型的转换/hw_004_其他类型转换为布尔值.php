<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:17 AM
 */

//方法 boolval()

echo '<br>';
//为fals的一般情况
var_dump(boolval(0));
echo '<br>';
var_dump(boolval(0.00));
echo '<br>';
var_dump(boolval($a));
echo '<br>';
var_dump(boolval(null));
echo '<br>';
var_dump(boolval('0'));
echo '<br>';
var_dump(boolval('0.00'));//这个居然为真 要注意