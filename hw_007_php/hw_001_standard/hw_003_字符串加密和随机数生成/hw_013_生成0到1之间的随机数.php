<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 1:24 AM
 */
/**
 * 生成0~1随机小数
 * @param Int $min
 * @param Int $max
 * @return Float
 */
function randFloat($min = 0, $max = 1)
{
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

// 例子，创建5个0~1随机小数
for ($i = 0; $i < 5; $i++) {
    echo randFloat() . '<br>';
}