import pandas as pd
import numpy as np

file_path = './data/starbucks_store_worldwide.csv'
df = pd.read_csv(file_path)

# 按照国家进行分组
grouped = df.groupby(by='Country')
country_count = grouped['Brand'].count()

print(df.info())
"""
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
"""
# 统计中国每个省份
china_data = df[df['Country'] == 'CN']

# 分组可以传一个数组
grouped = china_data.groupby(by='State/Province').count()['Brand']
print(grouped)
