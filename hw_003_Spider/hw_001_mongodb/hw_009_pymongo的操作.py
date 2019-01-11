# mongodb的客户端
from pymongo import MongoClient

# 实例化client 建立连接
client = MongoClient(host='127.0.0.1', port=27017)  # 本机可以不写
collection = client['test']['lxgzhw']

# 插入数据
# collection.insert_one({'name': '张大鹏', 'age': 33})

# 插入多条数据 列表里面装字典
# data_list = [{'name': 'test{}'.format(i)} for i in range(10)]
# collection.insert_many(data_list)

# 查询1个记录
# t = collection.find_one({'name': '张大鹏'})
# print(t)

# 查询多条记录
t = collection.find({'name': '张大鹏'})
print(list(t))
