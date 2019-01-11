"""
Linux常见目录结构和作用
"""

"""
Linux一切皆文件

插入U盘
    本质上是将U盘挂载到目录
    操作目录等同于操作U盘
"""

"""
Linux目录结构是倒立的树状结构

bin目录
    二进制文件
    可执行程序
    存放了常用的命令
sbin目录
    超级管理员目录
    ifconfig
    shutdown
    reboot
    halt
dev设备目录
    硬盘
    显卡
    显示器
    字符设备文件
    块设备文件
        需要先cd /dev/input
        sudo cat mouse0
        移动鼠标就会显示输入
    Linux下一切皆文件,没有不是文件的
lib目录
    Linux运行的时候需要加载的一些动态库
    库是函数的集合
        把功能相近的常用的函数写在一个库里面
    学习Python实际上就是学习各种类库
mnt目录
    手动挂载目录,如U盘等
media目录
    外设的自动挂载目录,如光驱等
root目录
    Linux的超级用户的家目录
usr目录
    unix system resource
    类似于Windows的program files目录
    软件一般会装到这里
    
    python没有头文件
    games目录 有一个小火车的游戏
    
etc目录
    存放配置文件的目录
    /etc/passwd
        用户的密码存放目录
    /etc/group
        组的信息
    /etc/profile
        系统的配置信息
    用户级别的配置文件是家目录下的.bashrc
      
opt目录
    安装第三方应用程序
home目录
    用户的家目录  
man的常用方法
    1 ls 系统命令
    2 fopen c语言的库函数
    5 passwd 文件格式
"""
