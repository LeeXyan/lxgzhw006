# plt
import random

import matplotlib
from matplotlib import pyplot as plt

# simhei = hw_001_matplotlib.font_manager.FontProperties(fname='/home/lxgzhw/Documents/program_font/simhei.ttf')
simhei = matplotlib.font_manager.FontProperties(fname='simhei.ttf')
# x y
# age x
age = [int(i) for i in range(11, 31)]

# friends y
friends = [1, 0, 1, 1, 2, 4, 3, 2, 3, 4, 4, 5, 6, 5, 4, 4, 1, 1, 1, 1]
# anthor
friends1 = [random.randint(1, 5) for i in range(20)]
# print(len(age))
# print(len(friends))
# plot
# ls linestyle
# lw line width
plt.plot(age, friends, label='self', color='red', ls='--', lw='3')
plt.plot(age, friends1, label='Deskmate')

# tick  lable
# _xtick_lables = ['{}age'.format(i) for i in age]
# plt.xticks(_xtick_lables)
plt.xticks(age)

# Grid drawing
plt.grid(alpha=0.2)

plt.legend(prop=simhei)
# show
plt.show()
