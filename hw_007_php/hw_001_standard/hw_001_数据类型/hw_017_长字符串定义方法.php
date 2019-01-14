<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 2:48 AM
 */
//hw_017_Heredoc和Nowdoc长字符串定界符

//Note: string 最大可以达到 2GB

//看效果
//table标签

$b = '张大鹏';
//abc 长字符串的名字 可以不添加转义符 类似于python中的""""""三双引号 变量也会被解析
$a = <<<abc


 <table border="1px" cellspacing="0" cellpadding="10px">


 		<tr>
 			<th rowspan="2">北京1</th>
 			<th colspan="2">上海1</th>

 			<th><span style="color:red;">重庆1</span></th>
 			<th>天津1</th>
 		</tr>

 		<tr>


 			<td>上海2</td>
 			<td>广州2</td>
 			<td>重庆2</td>
 			<!--变量用大括号 类似于DJango的模板渲染-->
 			<td>{$b}</td>
 		</tr>

 		<tr>
 			<td>北京3</td>
 			<td>上海3</td>
 			<td>广州3</td>
 			<td>重庆3</td>
 			<td>天津3</td>
 		</tr>

 		<tr>
 			<td>北京4</td>
 			<td>上海4</td>
 			<td>广州4</td>
 			<td>重庆4</td>
 			<td>天津4</td>
 		</tr>

 		<caption>城&nbsp;市</caption>
 	</table>
abc;

echo $a;

//00  39
//如果变量被引起来,变量doc内变量就不会被解析了

//总结
/**
 * 不管是是Heredoc还是Nowdoc,都不需要PHP的转义符
 * 但是,有可能需要HTML的字符实体,但是很有可能需要HTML的字符实体
 * 长字符串定界符,赋值符号之后,跟的是<<<字符串名字
 *      如果字符串名字没有被引号引起来,就是Heredoc
 *          内部的变量可以解析
 *      如果字符串名字被引号引起来了,就是Nowdoc
 *          内部的变量无法正常解析
 *
 */