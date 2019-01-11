from pymongo import MongoClient

client = MongoClient()
collection = client['test']['t3']

data_list = [{'_id': i, 'name': 'py{}'.format(i)} for i in range(1000)]

collection.insert_many(data_list)
