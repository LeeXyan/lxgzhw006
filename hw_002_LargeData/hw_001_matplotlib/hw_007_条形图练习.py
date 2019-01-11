# 引入方法 plt font_manager
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 设置字体 f.FP
simhei = font_manager.FontProperties(fname='simhei.ttf')
# 导入数据
a = ["猩球崛起3：终极之战", "敦刻尔克", "蜘蛛侠：英雄归来", "战狼2"]
b_16 = [15746, 312, 4497, 319]
b_15 = [12357, 156, 2045, 168]
b_14 = [2358, 399, 2358, 362]

# 设置条形图宽度
bar_width = 0.3

# 分别设置每天的显示位置
x_14 = list(range(len(a)))  # 长度
x_15 = [i + bar_width for i in x_14]  # 2倍长度
x_16 = [i + bar_width * 2 for i in x_14]  # 3倍长度

# 设置图形大小
plt.figure(figsize=(20, 8), dpi=80)
"""
def bar(
        x, height, width=0.8, bottom=None, *, align='center',
        data=None, **kwargs):
"""
# x轴数据 y轴数据 宽度 图例 14日
plt.bar(range(len(a)), b_14, width=bar_width, label='9月14日')
# x轴数据 y轴数据 宽度 图例 15日
plt.bar(x_15, b_15, width=bar_width, label='9月15日')
# x轴数据 y轴数据 宽度 图例 16日
plt.bar(x_16, b_16, width=bar_width, label='9月16日')
# 设置图例
plt.legend(prop=simhei)
# 设置x轴的刻度 每个刻度的位置 每个刻度的名字  字体
plt.xticks(x_15, a, fontproperties=simhei)
# 展示数据
plt.show()
