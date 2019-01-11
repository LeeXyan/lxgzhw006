"""
nan not a number 不是一个数字
inf 无穷的
-inf 负无穷大

"""
import numpy as np

print(np.nan == np.nan)
print(np.inf == np.inf)
"""
False
True
"""
"""
t1 = np.random.randint(10, 20, (4, 5))
"""
t1 = np.random.randint(0, 100, (10, 10))
# 统计不为0的数字
print(np.count_nonzero(t1))
# 统计是否是nan
print(np.isnan(t1))
"""
[[False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]
 [False False False False False False False False False False]]
"""
# 统计和
print(t1)
print(np.sum(t1, axis=0))
"""
[456 492 537 340 544 582 440 623 503 578]
"""
print(np.sum(t1, axis=1))
"""
[573 452 566 538 312 733 533 636 409 544]
"""
"""
axis=0  442
axis=1  564
564 是行的和--->>> axis=0表示每一列  axis=1 表示每一行
"""
print(55 + 65 + 84 + 11 + 72 + 97 + 9 + 47 + 39 + 85)
