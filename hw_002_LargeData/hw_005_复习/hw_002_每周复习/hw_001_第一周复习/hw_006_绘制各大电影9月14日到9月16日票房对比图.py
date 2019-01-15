"""
hw_006_绘制各大电影9月14日到9月16日票房对比图
"""
print(__file__)
# 提取当前文件名字的方法
strs = __file__.split('/')
print(strs[-1][:-3])
# 简化方法
image_name = __file__.split('/')[-1][:-3]
print(image_name)

"""
开始绘图
"""
# 引入方法
# coding=utf-8
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 设置字体
simhei = font_manager.FontProperties(fname='fonts/simhei.ttf')
# 获取数据
a = ["猩球崛起3：终极之战", "敦刻尔克", "蜘蛛侠：英雄归来", "战狼2"]
b_16 = [15746, 312, 4497, 319]
b_15 = [12357, 156, 2045, 168]
b_14 = [2358, 399, 2358, 362]

# 设置间隔
bar_width = 0.2

# 设置x轴每日显示数据
x_14 = list(range(len(a)))
x_15 = [i + bar_width for i in x_14]  # 位置偏移1个间隔
x_16 = [i + bar_width * 2 for i in x_14]  # 位置偏移2个间隔

# 设置图像大小
plt.figure(figsize=(20, 8), dpi=80)
# 绘制bar条形图 3个
# x轴是长度可迭代对象 y轴是一组数据
plt.bar(range(len(a)), b_14, width=bar_width, label='9月14日')
plt.bar(x_15, b_15, width=bar_width, label='9月15日')
plt.bar(x_16, b_16, width=bar_width, label='9月16日')
# 设置图例
plt.legend(prop=simhei)

# 设置x轴的刻度
plt.xticks(x_15, a, fontproperties=simhei)  # 取中间位置
# 添加网格
plt.grid()
# 添加描述信息
plt.xlabel('电影', fontproperties=simhei)
plt.ylabel('票房 单位(亿)', fontproperties=simhei)
plt.title('9月14日-9月16日各大电影票房对比图', fontproperties=simhei)
# 保存图片
plt.savefig('images/{}.png'.format(image_name))
# 展示图片
plt.show()
