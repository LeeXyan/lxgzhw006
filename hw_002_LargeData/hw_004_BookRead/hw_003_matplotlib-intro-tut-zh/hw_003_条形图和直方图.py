# 条形图
from matplotlib import pyplot as plt
from simhei import simhei

plt.bar([1, 3, 5, 6, 9], [5, 2, 7, 8, 2], label='案例1')
plt.bar([2, 4, 6, 8, 10], [8, 6, 2, 5, 6], label='案例2', color='g')

# 图例
plt.legend(prop=simhei)
plt.title('条形图', fontproperties=simhei)
plt.show()
