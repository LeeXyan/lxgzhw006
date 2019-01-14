<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 2:41 AM
 */

//hw_016_PHP中的转义符和HTML中的字符实体的使用

$a = "北京今天下雨了,\"有点\"冷\n\t啊";
echo $a;

//直接输出的内容,用HTML的字符实体更合适

/***
 * 浏览器执行的是HTML语言
 *
 */
echo '<br>北京今天有点冷啊';

echo '<br><b style="color: orangered">北京今天下雨了,有点冷啊</b>';


//如果是标签的属性值,就用转义符