"""
hw_005_绘制各大电影票房条形图
"""
# 导入方法
# coding=utf-8
from matplotlib import pyplot as plt
from matplotlib import font_manager

# 设置字体
simhei = font_manager.FontProperties(fname='fonts/simhei.ttf')
# 获取 数据
a = ["战狼2", "速度与激情8", "功夫瑜伽", "西游伏妖篇", "变形金刚5：最后的骑士", "摔跤吧！爸爸", "加勒比海盗5：死无对证", "金刚：骷髅岛", "极限特工：终极回归", "生化危机6：终章",
     "乘风破浪", "神偷奶爸3", "智取威虎山", "大闹天竺", "金刚狼3：殊死一战", "蜘蛛侠：英雄归来", "悟空传", "银河护卫队2", "情圣", "新木乃伊", ]
b = [56.01, 26.94, 17.53, 16.49, 15.45, 12.96, 11.8, 11.61, 11.28, 11.12, 10.49, 10.3, 8.75, 7.55, 7.32, 6.99, 6.88,
     6.86, 6.58, 6.23]

# 设置图像大小
plt.figure(figsize=(20, 8), dpi=80)
# 绘制条形图 bar 添加宽度width属性
# x轴是个数迭代器  y轴是数据 两者长度必须一致
plt.bar(range(len(a)), b, width=.3, color='gold')
# 设置x轴刻度
# 前两个参数是长度和可迭代对象
plt.xticks(range(len(a)), a, fontproperties=simhei, rotation=90)
# 添加描述信息
plt.xlabel('电影', fontproperties=simhei)
plt.ylabel('票房 单位(亿)', fontproperties=simhei)
plt.title('各大电影票房对比图', fontproperties=simhei)
# 网格
plt.grid()

# 保存图片
plt.savefig('images/{}.png'.format(__name__))

# 展示
plt.show()
print(__name__)
