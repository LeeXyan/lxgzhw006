# 引入方法 plt font_manager
# coding=utf-8
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 设置字体
simhei = font_manager.FontProperties(fname='fonts/simhei.ttf')
# 获取数据
y_3 = [11, 17, 16, 11, 12, 11, 12, 6, 6, 7, 8, 9, 12, 15, 14, 17, 18, 21, 16, 17, 20, 14, 15, 15, 15, 19, 21, 22, 22,
       22, 23]
y_10 = [26, 26, 28, 19, 21, 17, 16, 19, 18, 20, 20, 19, 22, 23, 17, 20, 21, 20, 22, 15, 11, 15, 5, 13, 17, 10, 11, 13,
        12, 13, 6]

x_3 = range(1, 32)
x_10 = range(51, 82)

# 设置图像大小
plt.figure(figsize=(20, 8), dpi=80)
# 绘图
# 使用scatter方法绘制散点图,和之前绘制折线图plot的唯一区别
# 传2个数据 分别是3月份和10月份 添加label属性
plt.scatter(x_3, y_3, label='3月份')
plt.scatter(x_10, y_10, label='10月份')
# x轴的刻度
x_ = list(x_3) + list(x_10)
x_tick = ['3月{}日'.format(i) for i in x_3]
x_tick += ['10月{}日'.format(i - 50) for i in x_10]
# 按步长3取
plt.xticks(x_[::3], x_tick[::3], fontproperties=simhei, rotation=45)

# 添加图例
plt.legend(loc='upper left', prop=simhei)
# 添加描述信息
plt.xlabel('时间', fontproperties=simhei)
plt.ylabel('温度', fontproperties=simhei)
plt.title('3月份和10月份的气温变化对比图', fontproperties=simhei)
# 保存图片
plt.savefig('images/4.png')
# 展示
plt.show()
