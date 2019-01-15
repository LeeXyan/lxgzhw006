<?php

// 今天中午吃啥选择：

// 1吃麦辣鸡

// 2吃肯德基

// 3吃黄焖鸡

// 4吃宫保鸡

// 5吃大盘鸡

// 其他：吃啥吃，减肥

$a = mt_rand(1 , 10);

// if ($a ==1) {
// 	echo "今天中午吃麦辣鸡";
// }elseif ($a == 2) {
// 	echo "今天中午吃肯德基";
// }elseif ($a == 3) {
// 	echo "今天中午吃黄焖鸡";
// }elseif ($a == 4) {
// 	echo "今天中午吃宫保鸡";
// }elseif ($a == 5) {
// 	echo "今天中午吃大盘鸡";
// }else{
// 	echo "吃啥吃，减肥吧";
// }
// 

switch ($a) {
	case '1':
		echo "今天中午吃麦辣鸡";
		break;
	case '2':
		echo "今天中午吃肯德基";
		break;
	case '3':
		echo "今天中午吃麦辣鸡";
		break;
	case '4':
		echo "今天中午吃宫保鸡";
		break;
	case '5':
		echo "今天中午吃大盘鸡";
		break;
	default:
		echo "吃啥吃，减肥吧";
		break;
}