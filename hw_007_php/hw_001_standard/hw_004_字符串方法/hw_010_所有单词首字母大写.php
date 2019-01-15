<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 3:10 AM
 */

//只能分辨以空格隔开的
$str = 'Hello I love you, it is really';
echo ucwords($str);
echo '<hr>';
//只能分辨以空格隔开的
$str = 'Hello,I,love,you, it,is really';
echo ucwords($str);
