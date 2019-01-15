"""
hw_002_比较不同学科的录取情况
"""

import matplotlib.pyplot as plt

lables = ('Computer Science', 'Foreign Languages', 'Analytical Chemistry',
          'Education', 'Humanities', 'Physics', 'Biology', 'Math and Statistice', 'Engineering')
# print(lables)
sizes = [21, 4, 7, 7, 8, 9, 10, 15, 19]
colors = ['yellowgreen', 'gold', 'lightskyblue', 'lightcoral',
          'red', 'purple', '#f280de', 'orange', 'green']
explode = (0, 0, 0, 0, 0, 0, 0, 0, 0.1)
plt.pie(sizes, explode=explode, labels=lables, autopct='%1.1f%%', colors=colors)
plt.axis('equal')
plt.show()
