# 引入绘图方法
# coding=utf-8
import matplotlib.pyplot as plt

# 获取数据

x = range(2, 26, 2)
y = [15, 13, 14.5, 17, 20, 25, 26, 26, 27, 22, 18, 15]
# 设置图片大小

plt.figure(figsize=(20, 8), dpi=80)
# 绘图

plt.plot(x, y)

# 设置x轴的刻度
xtick = [i / 2 for i in range(4, 49)]
plt.xticks(range(0, 25))
plt.yticks(range(min(y), max(y) + 1))

# 保存图片
plt.savefig('images/1.png')

# 展示图片
plt.show()
