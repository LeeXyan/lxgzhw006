<?php

// 封装第一个函数99乘法表
// 

// for ($i= 1; $i <= 9 ; $i++) { 
// 	for ($j= 1; $j <=$i ; $j++) { 
// 		echo "<div style=\" display:inline-block; width:90px; border:1px solid blue; text-align:center; margin: 0px 5px 5px 0;  \" >";

// 		echo $j , "*" , $i , "=" , $j*$i;

// 		echo "</div>";
// 	}
// 	echo "<br>";
// }

// 说明函数的作用
// 输出乘法表

// 说明参数：
// 
// @param int $a 乘法表第二个乘数设定，设定的是结束值
// @param int $b 乘法表第二个乘数设定，设定的是起始值，默认值为1
// @param int $c 乘法表第一个乘数设定，设定的是起始值，默认值为1
// $return 无返回值，结果直接输出页面


function jiucjiu($a , $b = 1 , $c = 1 ){


	for ($i= $b; $i <= $a ; $i++) { 
		for ($j= $c; $j <=$i ; $j++) { 
			echo "<div style=\" display:inline-block; width:90px; border:1px solid blue; text-align:center; margin: 0px 5px 5px 0;  \" >";

			echo $j , "*" , $i , "=" , $j*$i;

			echo "</div>";
		}
		echo "<br>";
	}

}

jiucjiu(9 , 5);


// 函数封装的过程
// 
// 1，先将执行程序完成
// 2，将执行程序，放入function之中
// 3，查找可变的量，设定为参数
// 4，检查是否有需要设定为可选参数的变量
// 5，设定返回值，或者检查是否需要返回值
// 6，对于参数的判断和验证
// 7，添加函数说明
// 8，测试运行