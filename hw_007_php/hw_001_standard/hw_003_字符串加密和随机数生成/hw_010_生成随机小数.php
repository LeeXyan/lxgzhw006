<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 1:12 AM
 */

//小数,先统一成相同的位数,然后随机生成两个小数小数部分

echo (random_int(333, 999) / 1000) . '<br>';
echo (mt_rand(333, 999) / 1000) . '<br>';

//怎么保留固定小数位

