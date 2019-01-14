<?php
//PHP5.6之前的版本实现不确定参数的自定义函数
function avg(){
	echo '共有' , func_num_args() , '个参数<br>';
	print_r(func_get_args());
	echo func_get_arg(0);
	echo '<hr>';
	
}

echo avg(10,20);
echo avg(30,20,30);
echo avg(1000,20,30,40);
echo avg(88,20,30,40,50);

/**
 *PHP5.6之后使用...来表示不确定数量的参数
 *在调用函数时,所有的实参以索引数组形式传递给该形参
 *PHP5.5之后只能通过func_num_args、func_get_args及
 *func_get_arg函数的组合来确定参数及参数信息;
 *使用...语法可以使代码阅读者直观感受该函数/方法是可以
 *带有不确定数量的参数的,而无需关心函数/方法的代码段； 
 */