<?php

// 将列表的信息，存储在数据库中，通过PHP程序，读取数据库中的数据信息，此数据信息为数组形式或者对象形式居多，数组形式可以通过foreach循环自动读取信息，写入列表中
// 

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

foreach ($variable as $key => $value) {
	

	此处是foreach 的循环体

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ol>

<!-- 此处等于是在HTML当中执行了一个foreach循环语句 -->

<!-- 分开写，等于是将一个foreach语句分成两次在HTML中输出，中间的部分仍然是foreach语句的循环体，只是HTML的部分PHP不负责解析，会让HTML直接执行输出到页面中，我们只需要负责PHP输出的部分的内容就可以了 -->

<?php foreach ($a as $k => $v) { ?>
	<li>
		歌曲名称：<?php echo $k ; ?>
		歌手名称：<?php echo $v ; ?>
	</li>

	

<?php } ?>	
	</ol>
</body>
</html>