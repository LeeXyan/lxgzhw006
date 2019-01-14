<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:59 AM
 */
// intval boolval  strval floatval

$a = 333;
function show()
{
    echo '<br>';
}

//并没有永久转化,除非有变量接收
show();
echo boolval($a);
show();
echo strval($a);
show();
echo floatval($a);
show();
//打印测试
var_dump($a);