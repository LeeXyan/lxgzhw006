/*
* 浏览器中的JavaScript是没有文件操作能力的
* 但是Node中的JavaScript具有文件操作的能力
*
*
* fs是file-system的简写,就是文件系统的意思
* 在Node中要进行文件操作,就必须引入fs这个核心模块
* 在fs这个核心模块中,就提供了文件操作的API
* 列入:fs.readFile就是用来读取文件的
* */
//使用require加载模块
var fs = require('fs')

//读取文件 要读取的文件路径,回调函数
//读取失败 error是错误对象,成功error是null data同理
fs.readFile('READEME.md', function (error, data) {
    console.log(data.toString())
    //<Buffer 23 20 4e ...
    //data 是一对Buffer类型的16进制的数据
    console.log(error)
    //null
})