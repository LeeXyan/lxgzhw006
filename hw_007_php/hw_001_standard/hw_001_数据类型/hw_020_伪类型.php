<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 3:59 AM
 */

//hw_020_伪类型 认为对于几种数据类型的统称


/**
 * mixed
 * mixed 说明一个参数可以接受多种不同的（但不一定是所有的）类型。
 *
 * 例如 gettype() 可以接受所有的 PHP 类型，str_replace() 可以接受字符串和数组。
 *
 * number
 * number 说明一个参数可以是 integer 或者 float。
 *
 *
 * callback
 * 回调函数类型
 *
 * 一个函数的名称作为另一个函数的参数使用
 *
 * 文档中在 PHP 5.4 引入 callable 类型之前使用 了 callback 伪类型。二者含义完全相同。
 *
 *
 * array|object
 * array|object 意思是参数既可以是 array 也可以是 object。
 *
 *
 * void
 * void 作为返回类型意味着函数的返回值是无用的。void 作为参数列表意味着函数不接受任何参数。
 *
 * 例如 ： echo
 *
 *
 *
 * ...
 * 在函数原型中，$... 表示等等的意思。当一个函数可以接受任意个参数时使用此变量名。
 */

//mixed number  callback array|object void ... 总共6种伪类型