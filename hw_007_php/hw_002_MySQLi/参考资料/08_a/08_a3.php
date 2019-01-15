<?php

// 负责修改页面的PHP文件
// 

// 1，接收传参的id值
// 

$num = $_GET['id'];

// 2，根据id 数值，查询数据库中相应的数据
// 

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);


$query = "select * from use2 where id = '{$num}' ";

$result = mysqli_query($link , $query);

$return = mysqli_fetch_all($result);


echo "<pre>";
print_r($return);
echo "</pre>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- 页面当中加载SQL语句的查询结果，将其添加在页面的input的value属性值，作为默认的数值，出现在页面当中 -->




	<form action="08_a4.php" method="post">
		<!-- 输出id值，但是不希望id值被修改，直接输出在页面中 -->

		序号：<?php echo $num ?><br>

		<!-- 因为查询结果只有一条，不再需要循环遍历获取数据，只需要通过唯一一组数据的双层下标，获取数据 -->

		姓名：<input type="text" value="<?php echo $return[0][1]; ?>" name="name" ><br>
		年龄：<input type="text" value="<?php echo $return[0][2]; ?>" name="age"><br>
		性别：<input type="text" value="<?php echo $return[0][3]; ?>" name= "sex"><br>
		城市：<input type="text" value="<?php echo $return[0][4]; ?>" name="addr"><br>
		部门：<input type="text" value="<?php echo $return[0][5]; ?>" name="der"><br>
		薪资：<input type="text" value="<?php echo $return[0][6]; ?>" name="pay"><br>

		<!-- 通过input，type，hidden，向后台传递id数值 -->
		<!-- 防止id被修改 -->

		<input type="hidden" name="id" value="<?php echo $num; ?>">

		<button type="submit">修改</button>
	</form>
</body>
</html>