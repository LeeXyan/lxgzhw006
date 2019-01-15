<?php 

$a = [
	"喜洋洋" => "张宇宁" ,
	"我们2" => "陈奕迅2" ,
	"我们3" => "陈奕迅3" ,
	"我们4" => "陈奕迅4" ,
	"我们5" => "陈奕迅5" ,
	"我们6" => "陈奕迅6" ,
	"我们7" => "陈奕迅7" ,
	"我们8" => "陈奕迅8" ,
	"我们9" => "陈奕迅9" ,
	"我们10" => "陈奕10" ,
	"我们11" => "陈奕迅11" ,
];

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
			<td>歌手</td>
			<td>歌曲</td>
		</tr>
<?php foreach ($a as $k => $v){ ?>
		<tr>
			<td><?php echo $v; ?></td>
			<td><?php echo $k; ?></td>
		</tr>
<?php } ?>
	</table>
</body>
</html>