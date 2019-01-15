<?php
// 1，验证程序是从HTML页面跳转而来的



// isset()函数，是检验变量是否存在的函数，如果变量存在，返回true，不存在返回false


// 如果isset($_POST['numb1'] 是true，证明前端传参存在，证明此页面是HTML跳转而来，带有前端参数，

// 	是false，证明参数不存在，是直接运行的PHP程序

if(!isset($_POST['numb1'])){
	die("请从HTML执行页面，不要直接运行PHP");
}


// 2，验证输入有内容
// 
// empty() 判断变量是否被赋值，作为判断为空的条件比较多，null，空字符串，0 0.0 "0"
// 
// 
// is_null()，判断变量的值是否是null，一般不使用做非空判断，用其检查变量赋值是否指null
// 
// 如果empty()是true，代表没有内容

// var_dump(empty($_POST['numb1']));
// 
// if(is_null(var)){

// }

// empty此验证不严谨，后期通过正则验证，判断严谨


if (empty($_POST['numb1']) || empty($_POST['numb2'])) {
	exit("输入数据不能为空，请重新输入");	
}



$a = $_POST['numb1'];
$b = $_POST['numb2'];
$c = $_POST['type'];

// echo $a , $b , $c;
// 
// 





switch ($c) {
	case '0':
		if($b == 0){
			die("除数不能为零，请重新输入");

			// 与die语句作用完全一样
			// exit("除数不能为零，请重新输入");
		}

		echo $a/$b;
	
		case '1':
		if($b == 0){
			exit("除数不能为零，请重新输入");
		}

		echo $a%$b;

		case '2':

		// echo $a**$b;

		echo pow($a, $b);

		case '3':

		echo 绝对值函数;

		case '4':

		echo 平方根;

	default:
		die("输入数据有误，请重新检查");
		break;
}