"""
shell
命令解析器
    工作中都是远程的方式取操作
    两台主机:
        远程服务器
        自己的笔记本
    对输入的命令进行解析
    解析器:
        python是一种解释器
        终端也有自己的解释器
    流程:
        1.终端输入命令
        2.shell命令解释器进行解释
        3.内核处理解释结果
        4.调用系统硬件开始工作
        5.将计算结果返回给终端
    echo $PATH:
        shel命令都是去这个配置的目录找
    如何查看当前环境的shell
        echo $SHELL
    如何查看系统下有哪些shell
        cat /etc/shells
"""
"""
查看系统下的shell
    cat /etc/shells
    结果:
        /bin/sh
        /bin/dash
        /bin/bash
        /bin/rbash

"""
"""
Linux系统结构:
    硬件:
        内核层:
            shell层:
                应用层:
                    用户.

"""