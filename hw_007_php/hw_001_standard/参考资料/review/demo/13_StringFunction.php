<?php
header('content-type:text/html;charset=utf-8');
//与字符串相关的经典面试题
$str = 'zEnd_ConTROLLEr_fRonT';
$str = strtolower($str); //zend_controller_front
$str = str_replace('_', ' ', $str); //zend controller front
$str = ucwords($str); //Zend Controller Front
$str = str_replace(' ', '_', $str); //Zend_Controller_Front
echo $str;
//转换成"Zend_Controller_Front"
//将以下字符串内的特殊符号替换为对应的HTML实体
$html = <<<CDATA
A>B
B<A
Tom&John
He said:"I'm fine"
CDATA;
$html = str_replace('&', '&amp;', $html);
$html = str_replace('>', '&gt;', $html);
$html = str_replace('<', '&lt;', $html);
$html = str_replace('"', '&quot;', $html);
$html = str_replace('\'', '&#39;', $html);
$html = str_replace(' ', '&nbsp;', $html);
echo $html;
//将以下字符串内的特殊符号替换为对应的HTML实体
$html = <<<CDATA
A>B
B<A
Tom&John
He said:"I'm fine"
CDATA;
$html = str_replace(['&', '>', '<', '"', '\''], ['&amp;', '&gt;', '&lt;', '&quot;', '&#39;'], $html);
echo $html;

//将以下字符串内的特殊符号替换为对应的HTML实体
$html = <<<CDATA
A>B
B<A
Tom&John
He said:"I'm fine"
CDATA;
$html = htmlspecialchars($html, ENT_QUOTES);

echo $html;

echo str_replace(['-', '_'], null, $str);

//获取文件扩展名(至少要5种方法)
$filename = 'asdfiafasdfa.Jpg';

$extension = strtolower(substr($filename, strrpos($filename, '.') + 1));
echo $extension;