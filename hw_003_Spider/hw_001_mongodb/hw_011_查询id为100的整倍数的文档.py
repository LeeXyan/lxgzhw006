from pymongo import MongoClient

client = MongoClient()
collection = client['test']['t3']

# 取得所有的数据
ret = collection.find()

# 将数据类型转换为列表
data_list = list(ret)

# 遍历列表,过滤后得到新的列表
data_list = [i for i in data_list if i['_id'] % 100 == 0 and i['_id'] != 0]

# 打印测试
print(data_list)
for i in data_list:
    print(i)
