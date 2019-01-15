<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 4:36 AM
 */

//配置参数
$host = '127.0.0.1';
$user = 'root';
$password = 'lxgzhw';
$database = 'php_01';
$port = 3306;

//连接数据库
$link = mysqli_connect($host, $user, $password, $database, $port);

//打印结果 成功返回一个对象
echo '<pre>';
print_r($link);
echo '</pre>';