<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/12/19
 * Time: 5:44 AM
 */

//标量数据类型:数据当中只能存储一个数据

$a = 100;

echo $a;

function show()
{
    echo '<br>';
}

show();
$a = 200;
echo $a;
//变量会随着数据的变化而变化,始终只有一个值
