"""
remove方法,会默认删除所有匹配到的数据
> db.test1000.insert({'name':'zhangdapeng'})
WriteResult({ "nInserted" : 1 })
> db.test1000.find()
{ "_id" : ObjectId("5c35592e648171cce9135dd4"), "name" : "zhangdapeng" }
> db.test1000.insert({'name':'zhangdapeng'})
WriteResult({ "nInserted" : 1 })
> db.test1000.find()
{ "_id" : ObjectId("5c35592e648171cce9135dd4"), "name" : "zhangdapeng" }
{ "_id" : ObjectId("5c355944648171cce9135dd5"), "name" : "zhangdapeng" }
> db.test1000.remove({'name':'zhangdapeng'})
WriteResult({ "nRemoved" : 2 })
> db.test1000.find()
"""
