"""
从家到工作地点需要的时间,绘制成直方图

绘制直方图的参数:
    所有的数据的可迭代对象
    组距 num_bins
"""

"""
参考代码

# coding=utf-8
from hw_001_matplotlib import pyplot as plt
from hw_001_matplotlib import font_manager

interval = [0,5,10,15,20,25,30,35,40,45,60,90]
width = [5,5,5,5,5,5,5,5,5,15,30,60]
quantity = [836,2737,3723,3926,3596,1438,3273,642,824,613,215,47]


print(len(interval),len(width),len(quantity))

#设置图形大小
plt.figure(figsize=(20,8),dpi=80)



plt.bar(range(12),quantity,width=1)

#设置x轴的刻度
_x = [i-0.5 for i in range(13)]
_xtick_labels =  interval+[150]
plt.xticks(_x,_xtick_labels)

plt.grid(alpha=0.4)
plt.show()

"""

"""
实战代码
"""
# coding=utf-8
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 时间段
interval = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 60, 90]
# 组距
width = [5, 5, 5, 5, 5, 5, 5, 5, 5, 15, 30, 60]
# 离家距离
quantity = [836, 2737, 3723, 3926, 3596, 1438, 3273, 642, 824, 613, 215, 47]
# width=1 使得所有条形图能够连在一起
plt.bar(range(len(quantity)), quantity, width=1)
# 设置x轴的刻度
_x_label = [i - 0.5 for i in range(len(quantity) + 1)]
_xtick_labels = interval + [150]
plt.xticks(_x_label, _xtick_labels)

# 显示网格
plt.grid()

plt.show()

"""
直方图的更多应用场景

用户的年龄分布状态
一段时间内点击次数的分布状态
用户活跃时间的分布状态
"""