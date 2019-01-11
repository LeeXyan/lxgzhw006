"""
db.集合.update()

"""
"""
实例 被替换了
> db.test1000.update({'name':'dapeng'},{'name':'大鹏'})
WriteResult({ "nMatched" : 1, "nUpserted" : 0, "nModified" : 1 })
> db.test1000.find()
{ "_id" : ObjectId("5c35549d7ad0cf935d3c150d"), "name" : "大鹏" }
{ "_id" : ObjectId("5c3554f37ad0cf935d3c150e"), "nInserted" : 1 }
{ "_id" : ObjectId("5c3555417ad0cf935d3c150f"), "name" : "kongming", "age" : 12 }
{ "_id" : ObjectId("5c3555457ad0cf935d3c1510"), "name" : "kongming1", "age" : 12 }
{ "_id" : ObjectId("5c3555557ad0cf935d3c1511"), "name" : "kongming1", "age" : 12 }
> 
"""

"""
实例2 利用$set:只修改匹配到的值
> db.test1000.update({'name':'kongming'},{$set:{'name':'空明被修改'}})
WriteResult({ "nMatched" : 1, "nUpserted" : 0, "nModified" : 1 })
> db.test1000.find()
{ "_id" : ObjectId("5c35549d7ad0cf935d3c150d"), "name" : "大鹏" }
{ "_id" : ObjectId("5c3554f37ad0cf935d3c150e"), "nInserted" : 1 }
{ "_id" : ObjectId("5c3555417ad0cf935d3c150f"), "name" : "空明被修改", "age" : 12 }
{ "_id" : ObjectId("5c3555457ad0cf935d3c1510"), "name" : "kongming1", "age" : 12 }
{ "_id" : ObjectId("5c3555557ad0cf935d3c1511"), "name" : "kongming1", "age" : 12 }
> 

"""
"""
实例3  修改多条
db.test1000.update({'name':'kongming'},{$set:{'name':'空明被修改'}},{multi:true})
"""