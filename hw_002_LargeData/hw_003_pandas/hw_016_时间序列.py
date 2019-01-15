"""
hw_016_时间序列
"""

"""
pd.date_range(开始时间,结束时间,个数,频率)
"""
import pandas as pd

date_time = pd.date_range(start='20171230', end='20190114', freq='D')
# 每隔10天
date_time_10 = pd.date_range(start='20171230', end='20190114', freq='10D')

# 生成指定天数
date_time_2 = pd.date_range(start='20171230', periods=10, freq='10D')
print(date_time)
print(date_time_10)
print(date_time_2)

"""
关于频率的缩写

"""
