<?php

// 第一个函数，实现生产一维关联二维索引数组
// 
function newFils(){
	$f = [];
	$ff = [];
	foreach ($_FILES as $value) {
		$f = $value;
	}
	// 如果是多文件上传，$f,应该是一个二维数组
	// 如果是单文件上传，$f,应该是一个一维数组

	if (is_array($f["size"])){
		// 如果结果为true，证明正在执行多文件上传，$f数组，是一个一维关联，二维索引的数组，需要转化为一维索引，二维关联的数组
		
		foreach ($f as $k => $v) {
			foreach ($v as $kk => $vv) {
				$ff[$kk][$k] = $vv;
			}
		}


	}else{
		// 如果结果为false，证明我们正在执行单文件上传，$f数组，就是一个一维数组，还需要转化为二维数组

		$ff[] = $f;	

	
	}

	return $ff;
}



// echo "<pre>";
// print_r(newFils());
// echo "</pre>";


// 第二个函数，判断临时上传文件是否成功
// 比如还可以加：文件个数，
// 

function yanzheng($arr){
	foreach ($arr as $v) {
		if (!( $v["error"] === 0 )){
			die("临时文件上传失败");
		}
	}
}




// 实现文件上传
// 

function fileUpload($arr){
	$ff = [];

	foreach ($arr as  $v) {
		// 1,获取扩展名
		$exp = strtolower(substr($v["name"] , strrpos($v["name"] , ".")+1));

		// 2，生成新的文件名
		// 
		$nf = md5(microtime(true)+mt_rand(1000,9999));
		$nwefile = $nf . "." . $exp;

		// 3，文件上传
		// 第一个参数是临时文件路径
		// 第二个上传到服务器的路径
		

		move_uploaded_file($v["tmp_name"] , "upload/".$nwefile);

		// 将新文件名生成一个数组，返回数组
		// 
		$ff[] = $nwefile ;
	}

	return $ff;
}


