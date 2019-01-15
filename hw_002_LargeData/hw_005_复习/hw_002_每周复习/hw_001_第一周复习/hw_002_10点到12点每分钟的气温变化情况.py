# 导入方法 plt random fontmanager
import matplotlib.pyplot as plt
from random import randint
from matplotlib import font_manager

# 设置字体
simhei = font_manager.FontProperties(fname='fonts/simhei.ttf')
# 获取数据
x = range(0, 120)
y = [randint(20, 50) for i in range(120)]

# 设置图片
plt.figure(figsize=(20, 8), dpi=80)
# 绘图
plt.plot(x, y)
# 调整刻度
x_tick = ['10点{}分'.format(i) for i in range(60)]
x_tick += ['11点{}分'.format(i) for i in range(60)]
# 取步长,数字和字符串一一对应,数据的长度一样
plt.xticks(list(x)[::3], x_tick[::3], rotation=45, fontproperties=simhei)
# 添加描述信息
plt.xlabel("时间", fontproperties=simhei)
plt.ylabel("温度 单位(℃)", fontproperties=simhei)
plt.title("10点到12点每分钟的气温变化表", fontproperties=simhei)

# 保存图片
plt.savefig('images/2.png')
# 展示
plt.show()
