import pandas as pd
import numpy as np

file_path = './data/starbucks_store_worldwide.csv'
df = pd.read_csv(file_path)

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

# by=[df['Country'], df['State/Province']]
grouped = df['Brand'].groupby(by=[df['Country'], df['State/Province']]).count()
# print(grouped)
"""
Country  State/Province
AD       7                    1
AE       AJ                   2
         AZ                  48
         DU                  82
         FU                   2
         RK                   3
         SH                   6
         UQ                   1
AR       B                   21
         C                   73
         M                    5
         S                    3
         X                    6
AT       3                    1
         5                    3
         9                   14
AU       NSW                  9
         QLD                  8
         VIC                  5
AW       AW                   3
AZ       BA                   3
         SAB                  1
BE       BE                   4
         VAN                  1
         VBR                  2
         VLG                 10
         WAL                  2
BG       2                    1
         23                   4
BH       13                  16
                           ... 
US       MO                 188
         MS                  32
         MT                  36
         NC                 338
         ND                  13
         NE                  58
         NH                  29
         NJ                 261
         NM                  76
         NV                 253
         NY                 645
         OH                 378
         OK                  79
         OR                 359
         PA                 357
         RI                  27
         SC                 131
         SD                  25
         TN                 180
         TX                1042
         UT                 101
         VA                 432
         VT                   8
         WA                 757
         WI                 145
         WV                  25
         WY                  23
VN       HN                   6
         SG                  19
ZA       GT                   3
"""
# 取整列的数据
grouped = df[['Brand']].groupby(by=[df['Country'], df['State/Province']]).count()
print(grouped)
