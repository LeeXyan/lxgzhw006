# 轴域（Axes）即两条坐标轴围城的区域。

import matplotlib.pyplot as plt
from simhei import simhei

x = [1, 2, 3]
y = [5, 7, 4]

x2 = [1, 2, 3]
y2 = [10, 14, 12]

plt.plot(x, y, label='第一条线')
plt.plot(x2, y2, label='第二条线')

# 描述信息
plt.xlabel("x坐标", fontproperties=simhei)
plt.ylabel('y坐标', fontproperties=simhei)
plt.title('折线图', fontproperties=simhei)

plt.grid()
plt.legend(prop=simhei)
plt.show()
