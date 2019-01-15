<?php

// 如果在cmd中，执行查询数据操作，需要几个步骤

// 1，登录MySQL数据库
// 2，指定使用的数据库
// 3，使用SQL语句，实现查询效果
// 4，执行SQL语句，cmd会有一个反馈信息
// 5，关闭数据库
// 
// 

// 1,链接数据库
// mysqli_connect()函数，通过给定的参数来登录MySQL数据库
// 
// 参数：1，$host 链接数据库的地址 
//          数据：127.0.0.1  本地数据库地址
//                localhost 

//       2，$user 登录MySQL数据库的账号
//          数据：root

//       3，$password 登录MySQL数据库的密码
//          数据："" 空字符串

//       4，$database 指定使用的数据库
//          数据：psd1803

//       5，$port 指定MySQL监听端口
//          数据：3306


// MySQLi执行过程


// 1，通过mysqli_connect()链接MySQL数据库，指定使用数据库



$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;



$link =  mysqli_connect($host , $user , $password ,$database , $port);


// 如果数据库链接成功，PHP会返回一个数据类型为对象的链接结果


echo "<pre>";
print_r($link);
echo "</pre>";


// 2，执行SQL语句
// 
// 定义需要执行的SQL语句，将其赋值给一个变量

$query = "select * from use2";


// 执行SQL语句的MySQLi函数为
// mysqli_query()，有两个参数

// 1，$link 之前链接数据库函数的执行结果

// 2，$query 需要执行的SQL语句
// 
// 
 // 执行结果 查询语句返回的结果是一个对象
 //          增删改语句返回的结果是一个布尔值
// 
// 
$result = mysqli_query($link , $query);

echo "<pre>";
print_r($result);
echo "</pre>";


// 3，将执行结果(数据类型为对象) 转化为数组
// mysqli_fetch_all()，将直接结果对象转化为数据
// 参数：$result
// 转化结果为：一维索引二维索引的数组
// 数组之中，包含数据信息，但是没有字段名称



$return = mysqli_fetch_all($result);


echo "<pre>";
print_r($return);
echo "</pre>";


// 4，关闭数据库
// mysqli_close(),关闭数据库
// 参数：$link , 链接数据库，执行结果
mysqli_close($link);

// 数据库关闭之后，不能再执行mysqli函数，但是已经将执行结果赋值给变量，变量可以继续使用

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
<?php foreach ($return as $key => $value) { ?>
		<tr>
			<td><?php echo $value[0]; ?></td>
			<td><?php echo $value[1]; ?></td>
			<td><?php echo $value[2]; ?></td>
			<td><?php echo $value[3]; ?></td>
			<td><?php echo $value[4]; ?></td>
			<td><?php echo $value[5]; ?></td>
			<td><?php echo $value[6]; ?></td>
		</tr>
<?php } ?>
	</table>
</body>
</html>