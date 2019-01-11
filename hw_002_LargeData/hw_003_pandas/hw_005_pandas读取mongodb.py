from pymongo import MongoClient
import pandas as pd

client = MongoClient()  # 默认情况下本地读取
collecton = client['douban']['tv1']
data = list(collecton.find())
t1 = data[0]
t1 = pd.Series(t1)
print(t1)
