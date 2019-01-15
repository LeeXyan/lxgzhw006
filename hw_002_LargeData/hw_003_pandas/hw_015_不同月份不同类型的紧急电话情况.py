# coding=utf-8
import pandas as pd
from matplotlib import pyplot as plt
import numpy as np

df = pd.read_csv('data/911.csv')
# 获取分类情况
temp_list = df['title'].str.split(': ').tolist()
cate_list = [i[0] for i in temp_list]
# 添加一列
df['cate'] = pd.DataFrame(np.array(cate_list).reshape((df.shape[0], 1)))
# print(df.head(5))
# 按添加的列分组求和 得到不同类型紧急电话情况的总和
print(df.groupby(by='cate').count()['title'])

"""
不同月份电话次数的变化情况
不同月份不同类型电话的变化情况
"""
# 转换为时间索引
df['timeStamp'] = pd.to_datetime(df['timeStamp'])
df.set_index('timeStamp', inplace=True)  # 原地重采样
# print(df.head())

# 统计不同月份电话次数
count_by_month = df.resample('M').count()['title']
print(count_by_month.head())

# 画图
x = count_by_month.index
y = count_by_month.values

# datetime进行格式化
# for i in x:
#     print(dir(i))
#     break
x = [i.strftime('%Y%m%d') for i in x]  # 对每个时间进行格式化

plt.plot(range(len(x)), y)

plt.xticks(range(len(x)), x, rotation=45)
plt.show()
