import pandas as pd

# 创建数组
t = pd.Series([1, 2, 22, 33, 44, 123, 111])
print(t, type(t))
"""
带标签的数组
0      1
1      2
2     22
3     33
4     44
5    123
6    111
dtype: int64 <class 'pandas.core.series.Series'>
"""

# 创建pandas病设置索引
t1 = pd.Series([22, 33, 44, 123, 111], index=list('abcde'))
print(t1)
"""
a     22
b     33
c     44
d    123
e    111
dtype: int64
"""
# 通过字典创建
temp_dict = {'name': 'dapeng', 'age': 30, 'tel': 18888888}
t3 = pd.Series(temp_dict)
print(t3)
"""
name      dapeng
age           30
tel     18888888
dtype: object
"""
