"""
Node是什么:
    学习的目标是打开黑盒子,和服务端进行交互
    打开服务端的工具很多:
        PHP
        Java
        Python
        C#
        Ruby
            国外出名
            国内比较小众
                GitHub就是Ruby做的
        .Net
        Node.js
    同样的东西可以做到相同的事情,但是他们的语法是不一样的
        Node.js
            采用JavaScript进行编程
    一个JavaScript,everywhere
        凡是能用Java来实现的,最终都会用JavaScript来实现
    org
        organization 组织
        一般结构的网站都是org结尾的
    io是输入输出的意思
官网解释:
    Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.
    Node.js 是 建立在 Chrome V8引擎上的JavaScript运行环境

    Node.js可以解析和执行JavaScript代码,就像浏览器一样,让JavaScript能够离开浏览器运行

    以前只有浏览器能够解析执行JavaScript代码:
        现在的JavaScript完全可以脱离浏览器来运行
        一切都归功于Node.js
浏览器中的JavaScript:
    EcmaScript:
        只包含了基本的语法
            if
            var
            function
            Object
            Array
    BOM
    DOM
Node.js中的JavaScript:
    没有BOM DOM:
        服务端是部操作页面的
    EcmaScript
    在Node这个JavaScript执行环境中,为JavaScript提供了一些服务器级别的操作API
        文件的读写
        网络服务的构建
        网络通信
        http服务器
        等处理...
    event-driven 事件驱动
    non-blocking I/O model 非阻塞IO模型(异步)
    lightweight and efficient 轻量和高效

    Node.js'package ecosystem,npm,is the largest ecosystem of open source libraries
    in the world

        npm是世界上最大的开源库生态系统
        绝大多数JavaScript相关的包都可以通过npm命令下载:
            为了让开发人员更方便的取下载使用
        npm install jquery

代码只是特定格式的字符串,引擎能够解析
    引擎类似于解释器
    Chrome的V8引擎是目前公认的解析代码最快最高效的
    Node.js的作者把Google Chrome中的V8引擎移植了出来,开发了一个独立的JavaScript运行时环境
"""
