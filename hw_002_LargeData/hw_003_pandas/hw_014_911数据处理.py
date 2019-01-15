# coding=utf-8
import pandas as pd
from matplotlib import pyplot as plt
import numpy as np

df = pd.read_csv('data/911.csv')

# print(df.head(10))
# print(df.info())
"""
[5 rows x 9 columns]
<class 'pandas.core.frame.DataFrame'>
RangeIndex: 249737 entries, 0 to 249736
Data columns (total 9 columns):
lat          249737 non-null float64
lng          249737 non-null float64
desc         249737 non-null object
zip          219391 non-null float64
title        249737 non-null object
timeStamp    249737 non-null object
twp          249644 non-null object
addr         249737 non-null object
e            249737 non-null int64
dtypes: float64(3), int64(1), object(5)
memory usage: 17.1+ MB
None
"""
# 获取分类情况
addr = df['title'].str.split(': ')
# print(addr, type(addr))
"""
249727                [Fire, GAS-ODOR/LEAK]
249728        [Traffic, VEHICLE ACCIDENT -]
249729     [EMS, UNKNOWN MEDICAL EMERGENCY]
249730             [EMS, CARDIAC EMERGENCY]
249731        [Traffic, VEHICLE ACCIDENT -]
249732                      [EMS, OVERDOSE]
249733                   [EMS, FALL VICTIM]
249734              [EMS, VEHICLE ACCIDENT]
249735                   [Fire, FIRE ALARM]
249736        [Traffic, VEHICLE ACCIDENT -]
Name: title, Length: 249737, dtype: object
"""
addr = addr.tolist()
# 提取series列表里面的数据
cate_list = list(set([i[0] for i in addr]))
# print(cate_list)
# ['EMS', 'Fire', 'Traffic']
# Traffic 交通

# 构造全为0的数组
zeros_df = pd.DataFrame(np.zeros((df.shape[0], len(cate_list))), columns=cate_list)

# 赋值
for cate in cate_list:
    # 行和列
    zeros_df[cate][df['title'].str.contains(cate)] = 1
# print(df['title'].str.contains(cate))
# break

# print(zeros_df)
# for i in range(df.shape[0]):
#     zeros_df.loc[i, addr[i][0]] = 1
# print(zeros_df)
# 不同类型的数据求和
sum_ret = zeros_df.sum(axis=0)
print(sum_ret)

# 不同月份,不同类型的紧急电话情况
"""
月份在时间戳里面
"""
