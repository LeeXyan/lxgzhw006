import pandas as pd
import numpy as np

# 可以通过传递一个list对象来创建一个Series
s = pd.Series([1, 3, 5, np.nan, 6, 8])
# print(s)

# 通过传递一个 numpyarray，时间索引以及列标签来创建一个DataFrame
dates = pd.date_range('20130101', periods=6)
# print(dates)
# np.random.randn(6, 4)
df = pd.DataFrame(np.random.randn(6, 4), index=dates, columns=list('ABCD'))
print(df)
