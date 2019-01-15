<?php 
	// 四个文字的颜色都是随机生成的
	// 
	// 使用HTML和PHP嵌套实现效果
	// 
	
	$a1 = mt_rand(0,255);
	$b1 = mt_rand(0,255);
	$c1 = mt_rand(0,255);

	$a2 = mt_rand(0,255);
	$b2 = mt_rand(0,255);
	$c2 = mt_rand(0,255);


	$a3 = mt_rand(0,255);
	$b3 = mt_rand(0,255);
	$c3 = mt_rand(0,255);

	$a4 = mt_rand(0,255);
	$b4 = mt_rand(0,255);
	$c4 = mt_rand(0,255);

?>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>

	<body>
		<span style="color: rgb(
			<?php echo $a1; ?>,
			<?php echo $b1; ?>,
			<?php echo $c1; ?>
		);">北</span>

		<span style="color: rgb(
			<?php echo $a2; ?>,
			<?php echo $b2; ?>,
			<?php echo $c2; ?>
		);">京</span>

		<span style="color: rgb(
			<?php echo $a3; ?>,
			<?php echo $b3; ?>,
			<?php echo $c3; ?>
		);">你</span>

		<span style="color: rgb(
			<?php echo $a4; ?>,
			<?php echo $b4; ?>,
			<?php echo $c4; ?>
		);">好</span>
	</body>

</html>