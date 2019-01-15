<?php

// 1，为什么需要分页显示

// 查询数据库，返回的信息数量，往往非常庞大，往往不可能一次性的全部显示出来，此时需要按照需求，输出查询内容
// 
//使用limit来实现此效果
// 
//该语句，将所有数据，按照需求，分成不同部分，每次只输出部分之内的数据
//
//第一个参数是显示的第一条数据的序号，第二个参数是所显示数据的数量


$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);


// 第一次查询
// 获取use2的所有数据数量，聚合函数

$query1 = "select count(*) from use2";

$result1 = mysqli_query($link , $query1);

$return1 = mysqli_fetch_all($result1);



// 总数据数量

$lineSum = $return1[0][0];

// 设定每页输出数据数量

$line = 3;

// 每页显示5条数据，总页数
// 总页数，就是超链接的数量

$pagSum = ceil($lineSum/$line);



// 第二次查询，查询use2中的所有数据
// 
//第一次进入当前页面，没有$_GET 传参，需要默认指定从第一页开始显示 
//
//
// 

// 当前if判断语句，获取到正确的，线束内容的页数，通过计算，获取limit语句的第一个参数


if(isset($_GET["pag"])){

	$x = $_GET["pag"];

}else{

	$x = 1;
}


// 根据当前页面数据，设定超链接的输出范围
// 
if($x < 6){
// 当左侧超出最小值1时
	$min = 1;
	$max = 10;
}elseif ($x+4 > $pagSum  ){
// 当右侧超出最大值最大页数时
	$min = $pagSum-9;
	$max = $pagSum;
}else{
// 其他正常时
	$min = $x - 5;
	$max = $x + 4;
}










// 计算分页显示，第一条数据的序号，也就是分页显示limit语句的第一个参数

$pag = ($x-1)*$line;


$query2 = "select * from use2 limit {$pag} , {$line} ";

$result2 = mysqli_query($link , $query2);

$return2 = mysqli_fetch_all($result2); 





mysqli_close($link);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 先生成对应的页数 -->
<!-- 目前使用超链接替代按钮效果 -->
<!-- 使用for循环实现 -->

<!-- 上一页，实现效果，是将当前需要显示的页面数据，-1传递给PHP程序，但是如果已经是第一页了，就不能再-1，否者limit语句中，第一个参数的计算就会出现错误数值，因此添加if判断，如果当前页面不是第一页，那么传参就执行-1操作，如果是第一页，就给超链接传参设定固定参数1 -->


<!-- 首页，超链接传参1
最后一页，超链接传参是$pagSum -->



<a href="01_fenye.php?pag=<?php 

if($x == 1){
	$x1 = 1;
}else{
	$x1 = $x-1;
}

echo $x1;



?>">上一页</a>




<!-- 下一页与上一页原理基本相同，当页面已经是最后一页，那么传递的参数就一直是最后一页，如果不是最后一页，再执行传参+1 -->


<a href="01_fenye.php?pag=<?php 

if($x == $pagSum){
	$x2 = $pagSum;
}else{
	$x2 = $x+1;
}

echo $x2;


?>">下一页</a>

<br>

<?php for ($i= $min; $i <= $max ; $i++) { ?>


<!-- 点击超链接，跳转当前页面，并且传递数据，该数据为，分页显示limit语句，第一个参数计算的数据 -->

	<a href="01_fenye.php?pag=<?php echo $i ?>">第<?php echo $i ?>页</a>

<?php } ?>




<table border="1px">
		<tr>
			<td>序号</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>城市</td>
			<td>部门</td>
			<td>薪酬</td>
		</tr>

<?php foreach ($return2 as  $value) {  ?>
		<tr>
			<td><?php echo $value[0] ?></td>
			<td><?php echo $value[1] ?></td>
			<td><?php echo $value[2] ?></td>
			<td><?php echo $value[3] ?></td>
			<td><?php echo $value[4] ?></td>
			<td><?php echo $value[5] ?></td>
			<td><?php echo $value[6] ?></td>
		
		</tr>
	
<?php } ?>

	</table>
</body>
</html>


<!-- 分页显示的核心，limit语句的两个参数 -->

<!-- 核心中的核心，是limit语句的第一个参数，该参数决定显示内容的起始数据 -->

<!-- 第二个参数，决定总页数，通过设定每次显示的数据数量来决定的 -->