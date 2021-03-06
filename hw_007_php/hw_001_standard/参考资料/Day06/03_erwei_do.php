<?php

// 二维数组的三种写法

// 1，常规写法，使用比较少
// 
$a = [
	["id" => 1, "name" => "李金星", "age" => "18", "sex" => "男", "addr" => "西安"],
	["id" => 2, "name" => "孔宁豪", "age" => "35", "sex" => "男", "addr" => "山西"],
	["id" => 3, "name" => "戴文龙", "age" => "20", "sex" => "男", "addr" => "杭州"],
	["id" => 4, "name" => "刘帅", "age" => "25", "sex" => "男", "addr" => "北京"],
	["id" => 5, "name" => "于帆", "age" => "22", "sex" => "男", "addr" => "青岛"],
	["id" => 6, "name" => "李博", "age" => "25", "sex" => "女", "addr" => "洛阳"],
];



// 2，项目写法，使用比较多
// 
// 初始化一个空数组，然后使用添加数组数据信息的形式，将二维数组，以不定义键位的形式，添加到空数组当中
// 

$a = [];

$a[] = ["id" => 1, "name" => "李金星", "age" => "18", "sex" => "男", "addr" => "西安"];

$a[] = ["id" => 2, "name" => "孔宁豪", "age" => "35", "sex" => "男", "addr" => "山西"];




// 3，数组转化时使用比较多
// 

$a = [];

$a[0]["id"] = 1;
$a[0]["name"] = "李金星";
$a[0]["age"] = 18;
$a[0]["sex"] = "男";
$a[0]["addr"] = "西安";

$a[1]["id"] = 2;
$a[1]["name"] = "孔宁豪";
$a[1]["age"] = 35;
$a[1]["sex"] = "男";
$a[1]["addr"] = "山西";