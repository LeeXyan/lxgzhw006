/*
*
* 浏览器和Node的能力不一样
*
* 写文件
* */

//导入模块
var fs = require('fs')

//写数据

fs.writeFile('./data/fsWrite.txt', 'hello node.js', function (error) {
    /*
    * 第一个参数是文件路径
    *   文件路径中的文件夹必须是已存在的
    * 第二个参数是文件内容
    * */
    if (error) {
        console.log(error)
    } else {
        console.log('写入成功')
    }
})

