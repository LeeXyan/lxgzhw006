"""
hw_017_统计911不同月份不同类型的变化
"""
# coding=utf-8
import pandas as pd
from matplotlib import pyplot as plt
import numpy as np

df = pd.read_csv('data/911.csv')

"""
分析:
    分组
        分组以后再按月份划分
"""

# 把时间字符串转换为时间类型 设置为索引
# 转换为时间索引
df['timeStamp'] = pd.to_datetime(df['timeStamp'])
df.set_index('timeStamp', inplace=True)  # 原地重采样

# 添加列 表示分类
temp_list = df['title'].str.split(': ').tolist()
cate_list = [i[0] for i in temp_list]
df['cate'] = pd.DataFrame(np.array(cate_list).reshape((df.shape[0], 1)))


# 绘图方法
def plot_img(df, label):
    count_by_month = df.resample('M').count()['title']
    x = count_by_month.index
    y = count_by_month.values
    x = [i.strftime('%Y%m%d') for i in x]
    plt.plot(range(len(x)), y, label=label)


# 分组 按cate
for group_name, group_date in df.groupby(by='cate'):
    # 对不同的分类都进行绘图
    plot_img(group_date, group_name)

# plt.xticks(range(len(x)))
plt.legend(loc='best')
plt.show()
