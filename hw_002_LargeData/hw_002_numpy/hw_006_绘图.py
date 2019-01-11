import numpy as np
from matplotlib import pyplot as plt

# 文件
us_data = 'youtube_video_data/US_video_data_numbers.csv'
uk_data = 'youtube_video_data/GB_video_data_numbers.csv'

# 加载国家数据
us_data = np.loadtxt(us_data, delimiter=',', dtype=int)
uk_data = np.loadtxt(uk_data, delimiter=',', dtype=int)

# 数据处理
# print(us_data)
# 添加国家信息
# 构造全为0的数据
zeros_data = np.zeros((us_data.shape[0], 1)).astype(int)
ones_data = np.ones((uk_data.shape[0], 1)).astype(int)
# print(zeros_data)

# 分别添加一列全为0,1的数组 用来辨别数据
us_data = np.hstack((us_data, zeros_data))
uk_data = np.hstack((uk_data, ones_data))

# 拼接两组数据
final_data = np.vstack((us_data, uk_data))

# 评论的数据
t_us_comments = us_data[:-1]
print(t_us_comments.max(), t_us_comments.min())
d = 10000
bin_nums = (t_us_comments.max() - t_us_comments.min()) // d

# 大小
plt.figure(figsize=(20, 8), dpi=8)
plt.hist(t_us_comments, bin_nums)
plt.show()
