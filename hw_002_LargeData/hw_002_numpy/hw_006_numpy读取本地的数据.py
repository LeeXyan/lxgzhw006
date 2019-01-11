"""
pandas读取数据是最强大的
numpy只是了解


csv 逗号分割值文件

np.loadtxt(文件的路径,dtype=类型,delimiter=分隔符,
skiprows=跳过哪些行,usecols=使用哪些列,unpack=是否转置)
"""

"""
读取csv文件案例
"""
import numpy as np

# 路径
us_file_path = './youtube_video_data/US_video_data_numbers.csv'
gb_file_path = './youtube_video_data/GB_video_data_numbers.csv'

# 指定路径,数据类型,分隔符
us = np.loadtxt(us_file_path, 'int', ',', unpack=True)
gb = np.loadtxt(gb_file_path, 'int', ',', unpack=False)

# unpack=True 转置 按照对角线旋转180度  让行变成了列
print(us)
print(gb)

# 结合之前所学的matplotlib把英国和美国的数据呈现出来
"""
数据
    点击 喜欢 不喜欢 评论
"""
