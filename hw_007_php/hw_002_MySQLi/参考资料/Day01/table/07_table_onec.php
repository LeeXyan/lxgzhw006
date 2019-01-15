<?php 

// 1，接收前端数据
// 

$name = $_POST["un"];
$age = $_POST["age"];
$a = $_POST["sex"];
$pic = $_FILES["pic"];

$b = ['男' , '女' , '保密'];

$sex = $b[$a];



// 2，数据规范验证
// 
// 
// 
// 
// 
// 


// echo $name , $age , $sex;
// echo "<pre>";
// print_r($pic);
// echo "</pre>";
// 
// 数据库不能直接保存图片格式的文件，只能存储图片的路径,并且该字段数据不能重复

// 在cmd中建立表结构

// create table ziliao(
// `id` int key auto_increment,
// `name` varchar(30) not null,
// `age` tinyint(3) unsigned default 0, 
// `sex` varchar(2) not null default "保密",
// `pic` varchar(50) unique 
// ); 
// 

// 实现图片上传

// 判断临时文件上传成功

if(!($pic["error"] === 0)){
	die("图片上传失败");
}


// 1，获取扩展名



$exp = strtolower(substr($pic['name'], strrpos($pic['name'], ".")+1));

// 2，生成唯一文件名

$nf = md5(microtime(true)+mt_rand(1000,99999));

$newFile = $nf . "." . $exp;

// 3，上传文件

move_uploaded_file($pic["tmp_name"], "upload/".$newFile);



// 3，定义SQL语句，实现数据写入数据库

// 如果可以保证，PHP文件位置，图片文件位置都不发生相对改变，那么图片数据存入数据库时，可以增加项目路径，否则最好只存，文件名称
// 


// 链接数据库

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host , $user , $password , $database , $port);

// 定义SQL语句，并执行

$query1 = "insert ziliao value (null , '{$name}' , '{$age}' , '{$sex}' , '{$newFile}')";


$result1 = mysqli_query($link , $query1);

if (!$result1) {
	exit("资料输入失败");
}


// 再定义一次SQL，查询数据库当中的内容
// 只显示最新加入的数据
// 实现思路
// 最新写入的数据，一定是所有数据中的最后一条，一定是id数据最大的那个数据
// 
// 通过聚合函数+子查询来实现


// $query2 = "select * from ziliao where `id` = (select max(`id`) from ziliao)";

// 
// 

// 需要查询最新插入的数据，可以通过聚合函数+子查询来实现，也可以通过mysqli函数 mysqli_insert_id来实现
// 
// 返回的数据中是新增数据的id值

$num =  mysqli_insert_id($link);

// echo $num;
// 

$query2 = "select * from ziliao where `id` = {$num} ";

$result2 = mysqli_query($link , $query2);

$return = mysqli_fetch_all($result2);


echo "<pre>";
print_r($return);

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
			<td>照片</td>
		</tr> 

<!-- 因为查询结果只有一条数据，完全可以通过两层键位找到相应数据，不再需要通过foreach遍历 -->

 		<tr>
			<td><?php echo $return[0][0] ?></td>
			<td><?php echo $return[0][1] ?></td>
			<td><?php echo $return[0][2] ?></td>
			<td><?php echo $return[0][3] ?></td>
			<td><img src="upload/<?php echo $return[0][4] ?>" alt="" width = "40px"></td>
		</tr>


	</table>
</body>
</html>  