"""
axis=0 表示列 axis=1 表示行 axis=None表示所有数据


以下方法,默认返回所有数据的统计结果.可以指定行和列
求和
    t.sum(axis=None)
均值
    t.mean
中值
    np.median(t)
最大值
    t.max
最小值
    t.min
极差
    np.ptp(t)
标准差
    t.std()
"""
# t1 = np.random.randint(10, 20, (4, 5))

import numpy as np

t = np.random.randint(0, 100, (10, 10))
print(t.std())
print(t.sum())
print(t.max())
print(t.min())
# 标准差计算离散程度
print(t.mean())
print(np.median(t))
