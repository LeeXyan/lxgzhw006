<?php

// 超链接传参，不管在什么位置，在get还是post的form表单中，超链接数据的接收方式，只能是$_GET


// $a = $_GET;

// echo "<pre>";
// print_r($a);
// echo "</pre>";



// 1，链接数据库

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);


// 2，执行SQL语句
// 
// 定义SQL语句
// 
// 接收前端传参

$key = $_POST['key'];


$a = $_POST["type"];

$b = ['id' , 'name' , 'age' , 'sex' , 'addr' , 'der' , 'pay'];

$type = $b[$a];


// 将SQL语句写为模糊查询语句

$query = "select * from use2 where {$type} like '%{$key}%'";


// 执行的是查询select语句，返回的结果会是一个对象

$result =  mysqli_query($link , $query);



// 3,将执行结果(查询语句是对象) ， 转化为数组
// 

$return = mysqli_fetch_all($result);

echo "<pre>";
print_r($return);
echo "</pre>";

// 4,关闭数据库
// 
mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1px">
		<tr>
			<td>序号</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>城市</td>
			<td>部门</td>
			<td>薪酬</td>
			<td>删除</td>
			<td>修改</td>
		</tr>

<?php foreach ($return as  $value) {  ?>
		<tr>
			<td><?php echo $value[0] ?></td>
			<td><?php echo $value[1] ?></td>
			<td><?php echo $value[2] ?></td>
			<td><?php echo $value[3] ?></td>
			<td><?php echo $value[4] ?></td>
			<td><?php echo $value[5] ?></td>
			<td><?php echo $value[6] ?></td>
			
<!-- 添加超链接a，其作用有2个 -->
<!-- 1，点击跳转到执行删除操作的页面 -->
<!-- 2，跳转页面的同时，实现传递参数的效果 -->


<!-- 参数是点击的超链接，对应的数据的id值 

通过foreach遍历数组，生成table表格时，同时给超链接赋予，当前数据的id值，通过echo $value[0] ,还必须要给超链接的传参符合键值对的形式

键位 = 数据

-->


			<td><a href="08_a2.php?id=<?php echo $value[0] ?>">删除</a></td>


			<td><a href="08_a3.php?id=<?php echo $value[0] ?>">修改</a></td>
		</tr>
	
<?php } ?>
	</table>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html> 