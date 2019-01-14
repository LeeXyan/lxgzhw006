<?php
header('content-type:text/html;charset=utf-8');
//1.SESSION内的数据默认以文件形式存储到服务器上;
//2.文件默认的保存位置为操作系统的临时目录(windows系统为c:\windows\temp目录;)
session_start();
$_SESSION['userId'] = 1;
$_SESSION['username'] = 'Rose';
$_SESSION['salary'] = 7125.99;
$_SESSION['sex'] = true;