<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 12:32 AM
 */
$a = '333';

echo md5($a);
echo '<br>';
//官方案例
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}

//md5是不可逆的 无法还原,没有解密

//可以将客户或者前端输入的内容转换为另一种形式,存储在数据库中

//因为就32位,而且开发时间已经很长,md5已经不再具有安全性能,一般项目中推荐sha1算法
//32位的16进制数
//优点 密文 位数统一

