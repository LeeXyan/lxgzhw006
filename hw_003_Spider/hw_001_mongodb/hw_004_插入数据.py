"""
插入数据
    db.test1000.insert({'name':'dapeng','age':1000})
查询
    db.test1000.find()
结果
    { "_id" : ObjectId("5c35549d7ad0cf935d3c150d"), "name" : "dapeng", "age" : 1000 }


"""
"""
存在则报错的提示
> db.test1000.insert({ "_id" : ObjectId("5c3555557ad0cf935d3c1511"), "name" : "kongming1", "age" : 12 })
WriteResult({
        "nInserted" : 0,
        "writeError" : {
                "code" : 11000,
                "errmsg" : "insertDocument :: caused by :: 11000 E11000 duplicate key error index: test1.test1000.$_id_  dup key: { : ObjectId('5c3555557ad0cf935d3c1511') }"
        }
})
"""

"""
用save不会报错,会更新数据
> db.test1000.save({ "_id" : ObjectId("5c3555557ad0cf935d3c1511"), "name" : "kongming1", "age" : 12 })
WriteResult({ "nMatched" : 1, "nUpserted" : 0, "nModified" : 0 })
"""
