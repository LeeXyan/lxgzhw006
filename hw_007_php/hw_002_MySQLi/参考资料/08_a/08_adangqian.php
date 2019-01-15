<?php
// 从HTML页面跳转到当前页面之后，
// 1，实现模糊查询结果的table表格
// 	模糊查询内容，删除选项，修改选项


// 2，点击修改选项，跳转到修改页面，传递点击当前数据的id值

// 3，点击删除，跳转到当前页面，继续之前的模糊查询，将删除了选择的数据之后的新结果，输出到当前页面之中
// 	在执行模糊查询之前，先要执行删除选择数据的操作


// 实现过程：

// 	点击超链接跳转至当前本页面时，之前通过post传递的数据都不存在了，点击超链接是，除了之前的传参id，还需要要之前模糊查询的参数一起通过get方式传递







// 将数据库链接放在PHP程序的最上方，如果从超链接跳转，需要先执行删除操作





$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "psd1803";
$port = 3306;

$link = mysqli_connect($host,$user,$password,$database,$port);












// 从HTML跳转，直接模糊查询，
// 
// 如果是超链接，先删除相应数据，再执行模糊查询
// 
// 
// 输出表格
// 
// 
// 


// 判断页面是否是从超链接跳转而来，如果不是，正常执行之下的程序，如果是，通过超链接给$key和$a 赋值



if(isset($_GET["id"])){
	// 如果是通过超链接跳转至此页面，通过$_GET 给变量赋值

	$key = $_GET["key"];
	$a = $_GET["a"];
	$id = $_GET["id"];

// 添加删除数据操作
// 

$query2 = "delete from use2 where id = '{$id}' ";

$bool = mysqli_query($link , $query2);

// 删除成功，继续之后的操作

if(!$bool){
	die("删除失败");
}



}else{
// 如果页面不是从超链接而来，正常通过$_POST 给变量赋值

	$key = $_POST["key"];

	$a = $_POST["type"];


}










// 用过$_GET当中有无数据，来判断当前页面是从HTML跳转而来，还是从超链接跳转而来
// 
// 
// 通过HTML跳转，是通过form表单中的button来实现的，只有$_POST参数，没有$_GET参数

// 通过超链接跳转，那就会多添加一个$_GET参数
// 
// 
// 当从HTML跳转而来，带有$_POST 参数，没有$_GET参数，此时，页面只需要执行模糊查询，输出查询结果的table表格，不需要$_GET参数，对于程序的执行没有影响
// 
// 
//当从超链接跳转至当前页面，需要$_POST 参数，$_GET参数 都需要，超链接只有$_GET，影响PHP程序的后续执行 



$b= ["id" , "name" , "age" , "sex" , "addr" , "der" , "pay"];

$type = $b[$a];

// echo $key , $type;
// 
// 


// var_dump($_GET["id"]);
// var_dump($_GET["key"]);
// var_dump($_GET["a"]);




$query = "select * from use2 where `{$type}` like '%{$key}%' ";

$result = mysqli_query($link , $query);

$return = mysqli_fetch_all($result);

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

<!-- 
超链接点击可以传递参数，传递方式只能是get，接收数据一定要使用$_GET

超链接传递参数，与之前的路径之间，用?做间隔

超链接一次可以传递多个参数，每个参数之间使用&符号作为间隔

超链接传参方式为键值对，键位区分大小写 -->
<!-- 传参方式一定要是变量，不能是$_POST["type"],第二次从超链接跳转而来，$_POST传参方式是不存在的 -->


			<td><a href="08_adangqian.php?
			id=<?php echo $value[0]; ?>
			&key=<?php echo $key; ?>
			&a=<?php echo  $a ?>">删除</a></td>


			
			<td><a href="08_a3.php?id=<?php echo $value[0] ?>">修改</a></td>
		</tr>
	
<?php } ?>
	</table>
</body>
</html> 