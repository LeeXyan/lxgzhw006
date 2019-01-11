import random
import numpy as np

# 生产小数
t1 = np.array([random.random() for i in range(10)])
print(t1, t1.dtype)

# 保留小数2位 round在python自带的环境中也可以使用
print(np.round(t1, 2))
