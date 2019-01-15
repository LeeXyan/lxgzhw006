<?php

// 1,for循环中的break
// 在for循环当中，如果执行了break语句，终止之后的所有内容。包括之后的代码，以及之后的循环

for ($i = 0 ; $i < 10; $i++) {

	if ($i == 5) {
	 	break;
	 } 
	echo $i , "<br>";
	
}

// 2，continue 
//跳出当前循环，终止本次循环之后的程序执行，继续之后的循环程序执行
echo "<hr>";

for ($i = 0 ; $i < 10; $i++) {
	echo $i , "<br>";
	if ($i == 5) {
	 	continue ;
	 } 
}
