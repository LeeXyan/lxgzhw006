/*
* web 服务级别的hello world
*
* 服务器相关
*
* 使用Node很有成就感的一件事
*
* 可以使用Node非常轻松的构建一个web服务器
*
* 在Node中专门提供了一个核心模块:http
*
* http这个模块的职责就是帮你创建编写服务器
*
*
* 步骤:
*   1.导入模块
* */

var http = require('http')

//创建一个web服务器
var server = http.createServer()

//服务器提供服务:对数据的服务
//发请求
//接收请求
//处理请求
//给个反馈 发送响应
server.on('request', function (request, response) {
    //注册request请求事件 客户端请求过来,就会自动触发request请求事件
    //然后执行回调函数
    console.log('收到,请求路径是:' + request.url)
    //request请求  response响应
    //response有一个方法,write,可以用来给客户端发送响应数据
    //write可以使用多次,但是,最后一定要使用end来结束响应
    response.write('ok')
    //每次修改代码都需要重启
    response.write('node.js')
    response.write('end')

    //调用end
    response.end()//目的是告诉服务器返回给客户端

})
//绑定端口号,启动服务器
server.listen(3000, function () {
    console.log('启动成功')
})

//能够从其他电脑访问,但是没有数据