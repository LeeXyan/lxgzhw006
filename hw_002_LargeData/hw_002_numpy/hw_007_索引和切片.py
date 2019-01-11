"""
读取csv文件案例
"""
import numpy as np

# 路径
us_file_path = './youtube_video_data/US_video_data_numbers.csv'
uk_file_path = './youtube_video_data/GB_video_data_numbers.csv'

# 指定路径,数据类型,分隔符
us = np.loadtxt(us_file_path, 'int', ',')
uk = np.loadtxt(uk_file_path, 'int', ',')


# 分割线
def xx():
    print('###' * 22)


# 取行
# print(uk, type(uk))
# print(uk[2])
# 取不连续的多行
# print(uk[[2, 8, 10]])
print(uk, len(uk))
print(len(uk) / 4)
# 转换尝试 行列
uk = uk.reshape(int(len(uk) / 4), 4)
print(uk)
# 取列
xx()
print(uk[1, :])

xx()
# 取多行和多列具体的值
print(uk[2, 3])

# 取第三行到第五行 第2列到第4列
xx()
# 取得的是行和列交叉点的位置
# 切片真神奇 就像截图一样 真的是切某一个区域
print(uk[2:5, 2:5])

# 取多个不相连的点 数组中取具体的点
xx()
print(uk[[0, 2], [0, 1]])
print(uk[[0, 2, 2], [0, 1, 3]])
