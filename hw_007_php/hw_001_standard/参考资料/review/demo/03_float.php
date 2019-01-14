<?php
header('content-type:text/html;charset=utf-8');
var_dump((0.1 + 0.7) * 10 == 8);
echo '<hr>';
//浮点数存储时的值(序列化)
echo serialize((0.1 + 0.7) * 10);
echo '<hr>';
echo serialize(8);
echo '<hr>';
echo serialize('Tom');
echo '<hr>';
echo serialize(true);
echo '<hr>';
echo serialize(false);
echo '<hr>';
echo serialize(null);
echo '<hr>';
// 反序列化
echo '反序列化';
var_dump(unserialize('i:5;'));
echo '<hr>';
var_dump(unserialize('s:4:"Rose";'));
echo '<hr>';
var_dump(unserialize('d:9.7999999999999991;'));
echo '<hr>';