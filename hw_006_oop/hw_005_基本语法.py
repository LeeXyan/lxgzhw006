"""
定义值包含方法的类

"""


class Hello():
    """文档说明"""

    def show(self):
        pass

    def method(self):
        pass


print(Hello.__doc__)
print(max.__doc__)

# 创建对象
h = Hello()
