<?php

// 验证PHP程序是从HTML页面跳转而来，不是从PHP程序直接运行的，确保有前端输入的参数

if(!isset($_POST['numb1'])){
	die("请从HTML执行页面，不要直接运行PHP");
}


// 确保输入内容非空
// 
if (empty($_POST['numb1']) || empty($_POST['numb2'])) {
	exit("输入数据不能为空，请重新输入");	
}


$x =$_POST['numb1'];
$y =$_POST['numb2'];
// 
// if($x > $y){
// 	$a = $y;
// 	$b = $x;
// }

// $a = $x;
// $b = $y;

// $a = min($x , $y);
// $b = max($x , $y);

$c = 0;

// for ($i = $a ; $i <= $b ; $i++) { 
// 	$c += $i ;
// }
// 

if ($x <= $y) {
	for ($i= $x ; $i <= $y ; $i++) { 
		$c += $i;
	}
}else{
	for ($i= $y ; $i <= $x ; $i++) { 
		$c += $i;
}





echo  $c;