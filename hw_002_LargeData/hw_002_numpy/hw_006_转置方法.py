import numpy as np

t = np.arange(24).reshape((4, 6))

# 转置
print(t.transpose())

# 交换轴
print(t.swapaxes(1, 0))
