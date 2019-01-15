"""
hw_001_学生花费在计算机上的时间对比
"""
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt

# 读取数据
students = pd.read_csv('./data/ucdavis.csv')
# print(students)

# 作图
g = sns.FacetGrid(students, hue='gender', palette='Set1', size=6)
g.map(plt.scatter, 'gpa', 'computer', s=250, linewidth=0.65,
      edgecolor='white')
g.add_legend()
