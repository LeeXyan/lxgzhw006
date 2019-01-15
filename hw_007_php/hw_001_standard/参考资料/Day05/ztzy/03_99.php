<?php

// 双层for循环，for循环的循环体中，包含着另一个for循环，外层for循环，每执行一次，内层for循环执行一次所有的完整循环

// 例如：外层循环为3次，内层循环为5次，外层完整执行完3次循环，内层循环等于执行15次


// 99乘法表的关键在于：
// 	1，认清内层循环和外层循环
// 	2，认清循环的起始数值和结束数值


// $i的起始值是9，结束值是1,
// $j的起始值是1，结束值是$i


for ($i = 9; $i >= 1 ; $i--) { 
	
	for ($j = 1 ; $j <= $i; $j++) { 
		echo $j , "*" , $i , "=" , $j*$i , " ";
	}

	echo "<br>";
}


echo "<hr>";


// $i的起始值是1，结束值是9,
// $j的起始值是$i，结束值是1


for ($i = 1 ; $i <= 9  ; $i++) { 
	
	for ($j = $i ; $j >= 1; $j--) { 
		echo $j , "*" , $i , "=" , $j*$i , " ";
	}

	echo "<br>";
}

echo "<hr>";


$i的起始值是9，结束值是1,
$j的起始值是$i，结束值是1


for ($i = 9 ; $i >= 1  ; $i--) { 
	
	for ($j = $i ; $j >= 1; $j--) { 
		echo "<div style=\" display:inline-block; width:60px; border:1px solid red ; text-align: center; margin:0 5px 5px 0; \">";
		echo $j , "*" , $i , "=" , $j*$i , " ";
		echo "</div>";
	}

	echo "<br>";
}