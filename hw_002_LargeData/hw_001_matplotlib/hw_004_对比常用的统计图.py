"""
折线图

直方图

数据分析总结
    基础概念
        什么是数据分析
            把大量的数据进行统计和整理,得出结论,为后续的决策提供数据支持
        annaconda
            安装
                Linux
                创建环境
    hw_001_matplotlib
        plt.plot绘制折线图
            from hw_001_matplotlib import pyplot as plt
            设置图形图形大小
                plt.figure(figsise=(20,8),dpi=80)
            绘图
                plt.plot(x,y)
                    x:所有的坐标的x的值
                    y.所有的坐标的y的值
            调整x轴发的刻度
                plt.xticks
                    调整间距
                        传一个参数,步长合适即可
                    添加字符串到x轴
                        传入两个参数,分别是两个可迭代的对象,数字和字符串最终会一一对应
            展示
                plt.show()
            保存
                plt.savefig('file_path)
            显示中文
                simhei = hw_001_matplotlib.font_manager.FontProperties(fname='simhei.ttf')
                使用
                    要显示中文的地方添加 fontproperties=simhei
                    图例中用prop=simhei来接收
        一个图中回执多个图形
            plt.plot()调用多次
            图例
                展示当前这个图形到底是哪个
                plt.plot(age, friends, label='self', color='red', ls='--', lw='3')
                plt.plot(age, friends1, label='Deskmate')
                plt.legend(prop=simhei)
        图形的样式
            color
            ls:linstyle
            lw:linewidth
        网格
            plt.grid(alpha=0.4,linestyle='--')
"""
