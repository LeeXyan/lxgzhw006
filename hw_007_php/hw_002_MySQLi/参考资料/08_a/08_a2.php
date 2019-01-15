<?php
// 接收超链接的传参
// 
// 超链接传参的接收方式只能是$_GET

$num = $_GET["id"];

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);

// 根据超链接传参，获取需要删除数据的id值，执行删除SQL语句


$query1 = "delete from use2 where `id` = '{$num}' ";

$result1 = mysqli_query($link , $query1);


// 执行删除语句之后，在重新查询新的表结构中的数据

$query2 = "select * from use2";

$result2 = mysqli_query($link , $query2);

$return = mysqli_fetch_all($result2);

mysqli_close($link);

?>

<!-- 根据新的数据，生成新的表格 -->


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
		
		</tr>
	
<?php } ?>
	</table>
</body>
</html> 


<!-- 步骤： -->

<!-- 1，通过前端实现模糊查询，在查询结果之后，多输出一列内容，内容为超链接，超链接的字体内容为删除 -->


<!-- 2，给超链接添加传参内容，传递的参数为当前数据的id值 -->

<!-- 3，点击跳转新的页面，在新页面中完成删除操作， -->

<!-- 4，完成删除操作之后，在执行一次查询操作，查询删除内容之后的新表结构，将查询结果输出到页面中 -->


