"""
join 默认情况下就是把行索引相同的数据合并在一起


"""
import pandas as pd
import numpy as np

# 两行四列
df1 = pd.DataFrame(np.ones((2, 4)), index=['A', 'B'], columns=list('abcd'))

# print(df1)
"""
     a    b    c    d
A  1.0  1.0  1.0  1.0
B  1.0  1.0  1.0  1.0
"""
df2 = pd.DataFrame(np.zeros((3, 3)), index=['A', 'B', 'C'], columns=list('xyz'))

# print(df2)
"""
     x    y    z
A  0.0  0.0  0.0
B  0.0  0.0  0.0
C  0.0  0.0  0.0
"""

# print(df1.join(df2))
"""
     a    b    c    d    x    y    z
A  1.0  1.0  1.0  1.0  0.0  0.0  0.0
B  1.0  1.0  1.0  1.0  0.0  0.0  0.0
进行行合并,以行数少的为准
"""

"""
按照列进行合并

"""
# print(df1.merge(df2))
df3 = pd.DataFrame(np.zeros((3, 3)), index=['A', 'B', 'C'], columns=list('abc'))
# print(df3)
"""
     a    b    c
A  0.0  0.0  0.0
B  0.0  0.0  0.0
C  0.0  0.0  0.0
"""
# print(df1.merge(df3))
"""
默认情况下取并集
"""
# df3.loc[1, 'a'] = 1
# print(df1.merge(df3, on='a'))
"""
     a  b_x  c_x    d  b_y  c_y
0  1.0  1.0  1.0  1.0  NaN  NaN
1  1.0  1.0  1.0  1.0  NaN  NaN
"""
# 需要reshape  zeros和ones不需要
df3 = pd.DataFrame(np.arange(9).reshape((3, 3)), columns=list('fax'))
# print(df3)
"""
   f  a  x
0  0  1  2
1  3  4  5
2  6  7  8
"""
# print(df1.merge(df3, on='a'))
"""
     a    b    c    d  f  x
0  1.0  1.0  1.0  1.0  0  2
1  1.0  1.0  1.0  1.0  0  2

相当于MySQL中的内连接
"""
print(df1.merge(df3, on='a', how='outer'))
"""
按列合并的交集
     a    b    c    d  f  x
0  1.0  1.0  1.0  1.0  0  2
1  1.0  1.0  1.0  1.0  0  2
2  4.0  NaN  NaN  NaN  3  5
3  7.0  NaN  NaN  NaN  6  8
"""
print('---' * 22)
print('---' * 22)
print(df1.merge(df3, on='a', how='left'))
print('---' * 22)
print(df1.merge(df3, on='a', how='right'))
