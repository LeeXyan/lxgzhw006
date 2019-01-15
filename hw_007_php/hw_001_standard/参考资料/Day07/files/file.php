<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";
// 
// 将三维数组转化为二维数组

foreach ($_FILES as  $value) {
	$f = $value;
}

// 判断临时文件上传是否成功

foreach ($f["error"] as $value) {
	if(!($value === 0) ){
		die("临时文件上传失败");
	}
}

// 数组转换
// 
$ff = [];

foreach ($f as $k => $v) {
	foreach ($v as $kk => $vv) {
		$ff[$kk][$k] = $vv ;
	}
}

// echo "<pre>";
// print_r($ff);
// echo "</pre>";
// 

// 现在有四个文件，需要使用foreach循环上传文件
// 

foreach ($ff as $k => $v) {
	// 1,获取扩展名
	$exp = strtolower(substr($v["name"] , strrpos($v["name"] , ".")+1));

	// 2,生成文件名
	$nf = md5(microtime(true)+mt_rand(1000,9999));

	$nwefile = $nf . "." . $exp ;

	// 3,文件上传
	$cheng = move_uploaded_file($v["tmp_name"] , "upload/".$nwefile);
}

echo $cheng ? "上传成功" : "上传失败" ;