<?php
header('content-type:text/html;charset=utf-8');
$array = ['GIF', 'JPG', 'JPEG', 'PNG'];
//将数组成员全部转换为小写字母
$array = array_map('strtolower', $array);
print_r($array);