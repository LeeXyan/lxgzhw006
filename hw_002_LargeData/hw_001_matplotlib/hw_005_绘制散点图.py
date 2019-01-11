# coding=utf-8
from matplotlib import pyplot as plt
from matplotlib import font_manager

my_font = font_manager.FontProperties(fname="simhei.ttf")
# y_3 = [11, 17, 16, 11, 12, 11, 12, 6, 6, 7, 8, 9, 12, 15, 14, 17, 18, 21, 16, 17, 20, 14, 15, 15, 15, 19, 21, 22, 22,
#        22, 23]
# 三月
march = [11, 17, 16, 11, 12, 11, 12, 6, 6, 7, 8, 9, 12, 15, 14, 17, 18, 21, 16, 17, 20, 14, 15, 15, 15, 19, 21, 22, 22,
         22, 23]

# 十月
october = [26, 26, 28, 19, 21, 17, 16, 19, 18, 20, 20, 19, 22, 23, 17, 20, 21, 20, 22, 15, 11, 15, 5, 13, 17, 10, 11,
           13,
           12, 13, 6]

x_3 = range(1, 32)
x_10 = range(51, 82)

# 设置图形大小
plt.figure(figsize=(20, 8), dpi=80)

# 使用scatter方法绘制散点图,和之前绘制折线图的唯一区别
# 折线图用plot
plt.scatter(x_3, march, label="3月份")
plt.scatter(x_10, october, label="10月份")

# 调整x轴的刻度
_x = list(x_3) + list(x_10)  # 两个月份相加
_xtick_labels = ["3月{}日".format(i) for i in x_3]  # 三月份的
_xtick_labels += ["10月{}日".format(i - 50) for i in x_10]  # 十月份的
# 步长为3 旋转45度 文字倾斜
plt.xticks(_x[::3], _xtick_labels[::3], fontproperties=my_font, rotation=45)

# 添加图例
# loc="upper left" 显示位置
plt.legend(loc="upper left", prop=my_font)

# 添加描述信息 指定字体
plt.xlabel("时间", fontproperties=my_font)
plt.ylabel("温度", fontproperties=my_font)
plt.title("标题", fontproperties=my_font)
# 展示
plt.show()
