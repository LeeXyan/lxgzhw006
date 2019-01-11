"""
简单
快速
机器学习的基础

什么是numpy
    一个在python中做科学计算的基础库
    重在数值计算,也是大部分python科学计算库的基础库
    多用于在大型,多维数组上执行数值运算

numpy创建数组,矩阵
    import numpy as np
    np.array(一个数组)
    np.array(开始数字,结束数字)
"""
import numpy as np

# 用arange来生产 最快的方法
np1 = np.arange(0, 3)
print(np1)
l = [i for i in range(3)]
print(l)

# 用array()来生产
print(np.array(range(10)))

# 打印存放的数据类型
print(np1.dtype)

# 生产数据的时候指定⑦数据类型
"""
dtype
    float
    int8
    int32
    int64
    bool
"""
t4 = np.array(range(1, 4), dtype=float)
print(t4, t4.dtype)

# 生产布尔类型
t5 = np.array([1, 1, 1, 0, 0], dtype=bool)
print(t5, t5.dtype)

# 数据类型转换
print(t5.astype('int'))
