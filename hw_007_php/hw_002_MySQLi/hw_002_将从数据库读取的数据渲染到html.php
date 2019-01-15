<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 4:36 AM
 */

//配置参数
$host = '127.0.0.1';
$user = 'root';
$password = 'lxgzhw';
$database = 'php_01';
$port = 3306;

//连接数据库
$link = mysqli_connect($host, $user, $password, $database, $port);

//打印结果 成功返回一个对象
echo '<pre>';
print_r($link);
echo '</pre>';
/**
 * 通过函数连接数据库
 */

//2.执行sql语句
$query = 'select * from my_life';//将执行的语句赋值给一个变量

//执行sql语句的MySQLi函数为 mysqli_query()
//有两个参数
/**
 * 第一个参数
 *      $link
 *          之前连接数据库之后的执行结果
 * 第二个参数
 *      $query
 *          需要执行的sql语句
 *
 * 返回一个对象
 *      如果是增加 删除 修改 三种语句
 *          返回一个布尔值
 *      如果是查询语句
 *          返回查询结果
 */
$result = mysqli_query($link, $query);//返回值是什么呢 是一个对象

echo '<pre>';
print_r($result);
echo '</pre>';
/**
 * mysqli_result Object
 * (
 * [current_field] => 0
 * [field_count] => 1
 * [lengths] =>
 * [num_rows] => 33
 * [type] => 0
 * )
 *
 * 执行结果的数据类型为对象,需要转换为我们能够使用的数组
 * mysqli_fetch_all() 将直接结果转换为数组 这个方法用得最多
 *      参数就是sql语句执行结果
 */

$my_life = mysqli_fetch_all($result);
echo '<pre>';
print_r($my_life);
echo '</pre>';
//字符串被打印成了问号


//执行完了要关闭数据库
mssql_close($link);//参数是link 连接数据库的执行结果
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>hhhhhh</h1>
<table border="1px">
    <thead>
    <tr>
        <td>id</td>
        <td>名字</td>
        <td>认识时我的年龄</td>
        <td>年龄</td>
        <td>地点</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($my_life as $value) { ?>
        <tr>
            <!-- 方法二输出 -->
            <td><?php echo $value[0] ?></td>
            <td><?php echo $value[1] ?></td>
            <td><?php echo $value[2] ?></td>
            <td><?php echo $value[3] ?></td>
            <td><?php echo $value[4] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
