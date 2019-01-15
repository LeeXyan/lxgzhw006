<?php
// 通过前端输入内容来实现查询语句


// 实现模糊查询
// 

// 先实现查询所有内容
// 

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

// 实际项目中，前端option传递的参数应该是从0开始的数字，需要建立一个数组，数组的内容为对应字段，通过接收前端传递的参数，作为数组的索引键位，调取数组中对应的数据，也就是选项中对应的字段


$a = $_POST["type"];



$b = ['id' , 'name' , 'age' , 'sex' , 'addr' , 'der' , 'pay'];

// 得到所需要模糊查询的字段

$type = $b[$a];



// echo $key;


// 特别强调：定义SQL语句时，外层一定用双引号，内层再用单引号，保证变量得到解析
// 
// 将SQL语句写为模糊查询语句

$query = "select * from use2 where {$type} like '%{$key}%'";

// 使用mysqli函数，来执行SQL语句
// 
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
			<td>部门</td>
			<td>薪酬</td>
		</tr>

<?php foreach ($return as  $value) {  ?>
		<tr>
			<td><?php echo $value[0] ?></td>
			<td><?php echo $value[1] ?></td>
			<td><?php echo $value[5] ?></td>
			<td><?php echo $value[6] ?></td>
		</tr>
	
<?php } ?>
	</table>
</body>
</html> 