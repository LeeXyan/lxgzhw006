import pandas as pd
import numpy as np

file_path = './data/starbucks_store_worldwide.csv'
df = pd.read_csv(file_path)
# print(df.head(1))
# print(df.info())
"""
[1 rows x 13 columns]
<class 'pandas.core.frame.DataFrame'>
RangeIndex: 25600 entries, 0 to 25599
Data columns (total 13 columns):
Brand             25600 non-null object
Store Number      25600 non-null object
Store Name        25600 non-null object
Ownership Type    25600 non-null object
Street Address    25598 non-null object
City              25585 non-null object
State/Province    25600 non-null object
Country           25600 non-null object
Postcode          24078 non-null object
Phone Number      18739 non-null object
Timezone          25600 non-null object
Longitude         25599 non-null float64
Latitude          25599 non-null float64
dtypes: float64(2), object(11)
memory usage: 2.5+ MB
None
"""
# 按照国家进行分组
grouped = df.groupby(by='Country')
# print(grouped)
"""
<pandas.core.groupby.groupby.DataFrameGroupBy object at 0x7f57f4ad39e8>
"""
# 可以进行遍历
# for i in grouped:
#     print(i)
#     print("---" * 22)
"""
------------------------------------------------------------------
('ZA',            Brand  Store Number   ...    Longitude Latitude
25597  Starbucks  47608-253804   ...        28.04   -26.15
25598  Starbucks  47640-253809   ...        28.28   -25.79
25599  Starbucks  47609-253286   ...        28.11   -26.02

[3 rows x 13 columns])
------------------------------------------------------------------
一个元组
"""
# for i, j in grouped:
#     print("===" * 22)
#
#     print(i)
#     print("---" * 22)
#
#     print(j)
#     print("===" * 22)
"""
==================================================================
ZA
------------------------------------------------------------------
           Brand  Store Number   ...    Longitude Latitude
25597  Starbucks  47608-253804   ...        28.04   -26.15
25598  Starbucks  47640-253809   ...        28.28   -25.79
25599  Starbucks  47609-253286   ...        28.11   -26.02

[3 rows x 13 columns]
==================================================================
"""

# 调用聚合方法
# print(grouped['Brand'].count())
"""
SG      130
SK        3
SV       11
TH      289
TR      326
TT        3
TW      394
US    13608
VN       25
ZA        3
...........
"""

# 中国和美国哪个国家星巴克多
country_count = grouped['Brand'].count()
print(country_count['US'])
print(country_count['CN'])
# 中国是否比美国多
print(country_count['CN'] > country_count['US'])
