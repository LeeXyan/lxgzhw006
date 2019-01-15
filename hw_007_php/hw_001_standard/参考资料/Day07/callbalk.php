<?php

// 通过函数名称，在一个函数用调用另一个函数
// 

// $a = "var_dump";

// var_dump();

// $a();
// 

function jia($a , $b){
	return $a+$b;
}

function jian($a , $b){
	return $a-$b;
}

function cheng($a , $b){
	return $a*$b;
}

function chu($a , $b){
	if($b != 0){
		return $a/$b ; 
	}
}


function jisuan($a , $b , $c){
	$d = $c;
	return $d($a , $b); 
}


echo jisuan(10,2,"chu"); 