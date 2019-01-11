"""
dir方法


dir() 传入一个变量名字可以查看对象的所有属性和方法
"""

print(dir(list))


def demo():
    """文档说明"""
    print('hello')


# 获取文档说明
print(demo.__doc__)
