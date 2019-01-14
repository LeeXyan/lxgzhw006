<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 1:48 AM
 */

//hw_015_页面中输出一句话

//我说:"无论风语,'我'不止步."

$str = '我说:"无论风语,\'我\'不止步."';
echo $str;

//转义符  对于特殊字符 用\进行转义
/**
 * \n
 * \r
 * \v
 * \f
 * \\
 * \$
 * \'
 * \"
 *
 */

function show()
{
    echo '<br>';
}

show();
echo '\\n';
show();
echo '\'';
show();
echo '\"';
show();
echo '\\t';
show();