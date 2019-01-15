<?php 

// 使用一个函数，完成单文件，多文件上传
// 


// 单文件上传，$_FILES，是一个二维数组，多文件上传，是一个三维数组
// 
// 
// 先foreach遍历 $_FILES ，生成一个新的额数组，新的数组 $f['name']是不是数组，如果是数组，证明 $_FILES 是个三维数组，是多文件上传，否则是单文件上传
// 
// 

// 最终，这一个函数，将被拆分成3个函数


function fileUpLoad(){


$f = [];
$ff = [];
$fff = [];

foreach ($_FILES as $value) {
	$f = $value;
}


// 实现数组转化，将所有形式的数组，都转化为一维索引，二维关联的数组


if( is_array($f["name"])){
	foreach ($f as $k => $value) {
		foreach ($value as $kk => $vv) {
			$ff[$kk][$k] = $vv;
		}
	}
	
}else{

	$ff[] = $f; 
}

// 临时文件是否上传成功
foreach ($ff as  $value) {
	if (!($value["error"] === 0)) {
		die("临时文件上传失败");
	}
}


// 使用foreach完成文件上传
// 
foreach ($ff as $v) {
	// 1,扩展名
	$exp = strtolower(substr($v['name'] , strrpos($v["name"] , ".")+1 ));


	// 2,生成新的文件名
	// 
	$nf = md5(microtime(true)+mt_rand(1000,9999) );

	$nwefile = $nf . "." . $exp;
	
	// 3，文件上传
	// 
	
	move_uploaded_file($v["tmp_name"] , "upload/".$nwefile);

	// 此处需要返回值是新文件的文件名称
	$fff[] = $nwefile;


}

	return $fff;


}

fileUpLoad();