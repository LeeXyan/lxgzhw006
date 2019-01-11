"""
show dbs
    查看所有的数据库
db
    查看当前的数据库
use db_name
    切换数据库
db.dropDatabase()
    删除数据库
    删除的是正在使用的数据库
mongodb没有创建数据库,直接用use就行,如果没有就会新建

"""

"""
mongodb里面没有表的概念,类似的概念是集合

手动创建集合
    db.createCollection(name,options)
    db.createCollection('stu')
    db.createCollection('stu',{capped:true,size:10})
        capped
            是否设置上限
            默认是false,不设置上限
            一般是不需要设置
查看集合
    show collections
删除集合
    db.集合名字.drop()

"""
