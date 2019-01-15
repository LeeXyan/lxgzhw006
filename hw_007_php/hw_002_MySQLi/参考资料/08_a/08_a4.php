<?php 

// 执行PHP修改数据页面
// 
$id = $_POST["id"];
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$addr = $_POST['addr'];
$der = $_POST['der'];
$pay = $_POST['pay'];

// echo $id;
// echo "<br>";
// echo $name;
// echo "<br>";
// echo $age;
// echo "<br>";
// echo $sex;
// echo "<br>";
// echo $addr;
// echo "<br>";
// echo $der;
// echo "<br>";
// echo $pay;
// echo "<br>";
// 

// 链接数据库，执行SQL语句。。。。。
// 

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);


// 执行修改语句，所有数据，都是前端数据传递来的参数
// 
// 修改的数据不是所有数据，只是前端出来id值的一条数据

// 执行的是修改数据操作，返回值是个布尔值

$query1 = "update use2 set name = '{$name}' , age = '{$age}' , sex = '{$sex}' , addr = '{$addr}' , der = '{$der}' , pay = '{$pay}' where id = '{$id}' ";


$result1 = mysqli_query($link , $query1);

var_dump($result1);


// 查询修改之后的数据，不是查询所有数据，只查询修改的数据，也就是id值是前端传递来的参数的数据


$query2 = "select * from use2 where id = '{$id}'";

$result2 = mysqli_query($link , $query2);

$return = mysqli_fetch_all($result2);

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
		
		</tr>
		<tr>
			<td><?php echo $return[0][0] ?></td>
			<td><?php echo $return[0][1] ?></td>
			<td><?php echo $return[0][2] ?></td>
			<td><?php echo $return[0][3] ?></td>
			<td><?php echo $return[0][4] ?></td>
			<td><?php echo $return[0][5] ?></td>
			<td><?php echo $return[0][6] ?></td>
		
		</tr>
	

	</table>
</body>
</html>