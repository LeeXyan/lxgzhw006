import numpy as np

l = [i for i in range(100)]

# 生成一个numpy的数组
np_l = np.array(l)
print(np_l)

# 维度转换
print(np_l.reshape((4, 25)))

# numpy也带有数组生产方法
np_1 = np.arange(0, 100)
print(np_1)

np2 = np.arange(0, 6)
np3 = np.arange(4, 44)
print(np2 + np3)
