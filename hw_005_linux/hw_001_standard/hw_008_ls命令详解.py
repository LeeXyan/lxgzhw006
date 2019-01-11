"""
ls 查看指定目录下的文件信息
"""

"""
常用方法

ls -lah 
    格式化列表输出当前文件内容
    
    
lxgzhw@ubuntu:~/PythonWork$ ls -lah
total 32K
drwxrwxr-x  8 lxgzhw lxgzhw 4.0K Jan 10 02:34 .
drwxr-xr-x 31 lxgzhw lxgzhw 4.0K Jan  9 04:36 ..
drwxrwxr-x 24 lxgzhw lxgzhw 4.0K Jan  9 01:31 hw_001_Django
drwxrwxr-x  9 lxgzhw lxgzhw 4.0K Jan  8 16:39 hw_002_LargeData
drwxrwxr-x  4 lxgzhw lxgzhw 4.0K Jan  8 17:09 hw_003_Spider
drwxrwxr-x  5 lxgzhw lxgzhw 4.0K Jan  9 04:13 hw_004_web
drwxrwxr-x  4 lxgzhw lxgzhw 4.0K Jan 10 02:36 hw_005_linux
drwxrwxr-x  2 lxgzhw lxgzhw 4.0K Jan  8 22:50 .idea

第一列,代表文件的类型
    d代表目录文件
    -代表普通文件
    c字符设备文件
    b块文件
    l连接文件
    s是socket文件
    p是管道文件4
    
第2-10列
    用户权限
    所属组权限
    其他人权限
第11列
    链接数量
之后
    用户名
    用户组
    大小
    日期
    文件名字
查找文件的命令
find / -type s

find 查询路径 文件类型 


ls -ltr
    列出当前目录下的文件,按时间逆向排序
    谁是最后修改的谁就排在最后
    
通配符
    * 任意多个字符
    ? 任意一个字符
"""
