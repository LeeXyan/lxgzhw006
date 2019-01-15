<?php


echo "<pre>";
print_r($_FILES);
echo "</pre>";

// foreach循环中，as之后，只写一个变量，那么该变量接收的是，数据，不是键位
//  
foreach ($_FILES as $value) {
	$a = $value;
}

echo "<pre>";
print_r($a);
echo "</pre>";

// 将$a ,转化为一维索引，二维关联的数组
// 
// 熟悉文件上传，HTML和PHP的写法