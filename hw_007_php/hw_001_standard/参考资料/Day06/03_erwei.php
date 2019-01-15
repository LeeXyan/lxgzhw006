<?php

// 二位数组：数组的数据信息，也是一个数组
// 
// PHP当中所使用的二维数组，一定是，一维是索引数组，二维是关联数组，并且关联数组的键位必须一致
// 

// 编号，姓名，年龄，性别，地址

$a = [
	["id" => 1, "name" => "李金星", "age" => "18", "sex" => "男", "addr" => "西安"],
	["id" => 2, "name" => "孔宁豪", "age" => "35", "sex" => "男", "addr" => "山西"],
	["id" => 3, "name" => "戴文龙", "age" => "20", "sex" => "男", "addr" => "杭州"],
	["id" => 4, "name" => "刘帅", "age" => "25", "sex" => "男", "addr" => "北京"],
	["id" => 5, "name" => "于帆", "age" => "22", "sex" => "男", "addr" => "青岛"],
	["id" => 6, "name" => "李博", "age" => "25", "sex" => "女", "addr" => "洛阳"],
];

echo "<pre>";
print_r($a);
echo "</pre>";



foreach ($a as $k => $v) {
	// echo "<pre>";
	// print_r($v); 
	// echo "</pre>"; 
	// echo "<hr>";
	foreach ($v as $kk => $vv) {
		// echo $kk , " " , $vv , "<hr>";	
	}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--	<table border="1px">
		<tr>
			<td>学号</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>地址</td>
		</tr>
<?php foreach ($a as $k => $v) { ?>
		<tr>
			<td><?php echo $v["id"] ?></td>
			<td><?php echo $v["name"] ?></td>
			<td><?php echo $v["age"] ?></td>
			<td><?php echo $v["sex"] ?></td>
			<td><?php echo $v["addr"] ?></td>
		</tr>



<?php } ?>
	</table>
-->
	<table border="1px">
		<tr>
			<td>学号</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>地址</td>
		</tr>
<?php foreach ($a as $k => $v) { ?>
		<tr>
			<?php foreach ($v as $kk => $vv) { ?>
                <td><?php echo $vv; ?></td>
			<?php } ?>
		</tr>
<?php } ?>
	</table>
</body>
</html> 