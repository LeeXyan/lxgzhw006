"""
hw_003_11到31岁每年交女朋友个数的变化表
"""

# 引入方法 plt font_manager
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 设置字体
simhei = font_manager.FontProperties(fname='fonts/simhei.ttf')
# 获取数据
y = [1, 0, 1, 1, 2, 4, 3, 2, 3, 4, 4, 5, 6, 5, 4, 3, 3, 1, 1, 1]
x = range(11, 31)

# 设置图形大小
plt.figure(figsize=(20, 8), dpi=80)

# 绘图
plt.plot(x, y)

# 设置刻度
x_tick = ['{}岁'.format(i) for i in x]
plt.xticks(x, x_tick, fontproperties=simhei)
plt.yticks(range(min(y), max(y) + 1))

# 绘制网格
plt.grid()
# 添加描述信息
plt.xlabel("年龄", fontproperties=simhei)
plt.ylabel("每年交女朋友数量", fontproperties=simhei)
plt.title("11到31岁每年交女朋友数量变化表", fontproperties=simhei)
# 保存
plt.savefig('images/3.png')

# 展示
plt.show()
