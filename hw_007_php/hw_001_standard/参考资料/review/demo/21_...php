<?php
//不确定数量的参数(PHP5.6之后的写法)
function avg(...$a) {
	// echo '共有', count($a), '个参数<hr>';
	// echo '共有', func_num_args(), '个参数';
	$argNum = count($a);
	$sum = array_sum($a);
	// echo '和是', $sum, '<hr>';
	$avg = $sum / $argNum;
	return $avg;
}

echo avg(10, 20), '<hr>';
echo avg(10, 20, 30), '<hr>';
echo avg(10, 20, 50, 70), '<hr>';