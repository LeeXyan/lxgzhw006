"""
采用散点图
"""

"""
参考代码
# coding=utf-8
from hw_001_matplotlib import pyplot as plt
from hw_001_matplotlib import font_manager

my_font = font_manager.FontProperties(fname="simhei.ttf")
# y_3 = [11, 17, 16, 11, 12, 11, 12, 6, 6, 7, 8, 9, 12, 15, 14, 17, 18, 21, 16, 17, 20, 14, 15, 15, 15, 19, 21, 22, 22,
#        22, 23]
# 三月
march = [11, 17, 16, 11, 12, 11, 12, 6, 6, 7, 8, 9, 12, 15, 14, 17, 18, 21, 16, 17, 20, 14, 15, 15, 15, 19, 21, 22, 22,
         22, 23]

# 十月
october = [26, 26, 28, 19, 21, 17, 16, 19, 18, 20, 20, 19, 22, 23, 17, 20, 21, 20, 22, 15, 11, 15, 5, 13, 17, 10, 11,
           13,
           12, 13, 6]

x_3 = range(1, 32)
x_10 = range(51, 82)

# 设置图形大小
plt.figure(figsize=(20, 8), dpi=80)

# 使用scatter方法绘制散点图,和之前绘制折线图的唯一区别
# 折线图用plot
plt.scatter(x_3, march, label="3月份")
plt.scatter(x_10, october, label="10月份")

# 调整x轴的刻度
_x = list(x_3) + list(x_10)  # 两个月份相加
_xtick_labels = ["3月{}日".format(i) for i in x_3]  # 三月份的
_xtick_labels += ["10月{}日".format(i - 50) for i in x_10]  # 十月份的
# 步长为3 旋转45度 文字倾斜
plt.xticks(_x[::3], _xtick_labels[::3], fontproperties=my_font, rotation=45)

# 添加图例
# loc="upper left" 显示位置
plt.legend(loc="upper left", prop=my_font)

# 添加描述信息 指定字体
plt.xlabel("时间", fontproperties=my_font)
plt.ylabel("温度", fontproperties=my_font)
plt.title("标题", fontproperties=my_font)
# 展示
plt.show()

"""
"""
读取csv文件案例
"""
import numpy as np
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 字体
simhei = font_manager.FontProperties(fname='simhei.ttf')
# 路径
us_file_path = './youtube_video_data/US_video_data_numbers.csv'
gb_file_path = './youtube_video_data/GB_video_data_numbers.csv'

# 指定路径,数据类型,分隔符
us = np.loadtxt(us_file_path, 'int', ',')
gb = np.loadtxt(gb_file_path, 'int', ',')
"""
数据
    点击 喜欢 不喜欢 评论
"""
# 英国数据
gb = gb.reshape(int(len(gb) / 4), 4)
# 美国数据
us = us.reshape(int(len(us) / 4), 4)

# 取英国的点击数
gb_click = gb[:, 1]
# print(gb_click)

# x轴的数据 每一部视频
x = range(0, len(gb_click))
# y轴的数据为点击数
y = gb_click
print(len(x), len(y))
print(max(y))
print(min(y))

# 绘制
plt.plot(x, y)
# 网格
plt.grid()
# 刻度
_xtick_labels = [i for i in x if i % 40 == 0]
_xtick_labels += [400]
# _ytick_labels = [i for i in y]
# _ytick_labels += max(y)
# _ytick_labels = [min(y), int((min(y) + max(y)) / 2), max(y)]
# 设置y的刻度
y1 = min(y)
y3 = max(y)
y2 = int((y1 + y3) / 2)

_ytick_labels = [y1, y2, y3]
print(_ytick_labels)
plt.xticks(_xtick_labels)
# plt.yticks(y[::200])
plt.yticks(_ytick_labels)

# 添加描述信息
# 添加描述信息 指定字体
plt.xlabel("英国youtube视频", fontproperties=simhei)
plt.ylabel("点击量(千万)", fontproperties=simhei)
plt.title("英国400部YouTube视频播放量对比图", fontproperties=simhei)

# 展示
plt.show()
