<?php
header("Content-Type: text/html; charset=utf-8");
// 通过mysqli函数，查询MySQL数据库中，psd1803数据库中，use2表结构的数据，需要字段id，name，der ，pay四个字段的数据，以table 表格形式，呈现在页面中
//

// 1，需要连接数据库
// 2，执行SQL语句
// 3，将执行结果(对象)，转化为数组
// 4，关闭数据库
// 5，在页面中生成表格
//

// 1，链接数据库

$host = "localhost";
$user = "root";
$password = "lxgzhw";
$database = "php_01";
$port = 3306;

$link = mysqli_connect($host, $user, $password, $database, $port);


// 2，执行SQL语句
//
// 定义SQL语句

// $query = "select `id` , `name` , `der` , `pay` from use2";

$query = "select * from users";

//解决中文问题的办法
$link->query('set names utf8') or die('query字符集错误');
// 执行SQL语句
//$result = mysqli_query("set names 'utf8'");
$result = mysqli_query($link, $query);


// 3，将对象转化为数组
//
$return = mysqli_fetch_all($result);

// 4,关闭数据库
//
echo "<pre>";
print_r($return);
echo "</pre>";

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
    <?php foreach ($return as $value) { ?>
        <tr>

            <!-- 方法一的输出 -->
            <!-- <td><?php echo $value[0] ?></td>
			<td><?php echo $value[1] ?></td>
			<td><?php echo $value[2] ?></td>
			<td><?php echo $value[3] ?></td> -->


            <!-- 方法二输出 -->
            <td><?php echo $value[0] ?></td>
            <td><?php echo $value[1] ?></td>
            <td><?php echo $value[5] ?></td>
            <td><?php echo $value[6] ?></td>

        </tr>


    <?php } ?>

</table>
</body>
</html>


<!-- 方法一，查询内容少，效率会高，但是不利于后期的维护 -->

<!-- 方法二，查询内容多，效率稍低，但是利于后期维护 -->