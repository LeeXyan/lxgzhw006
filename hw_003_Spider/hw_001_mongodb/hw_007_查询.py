"""
默认查询所有
    > db.test1000.find()
    { "_id" : ObjectId("5c3559ab648171cce9135dd6"), "name" : "zhangdapeng" }
    { "_id" : ObjectId("5c3559af648171cce9135dd7"), "name" : "zhangdapeng1" }
    { "_id" : ObjectId("5c3559b2648171cce9135dd8"), "name" : "zhangdapeng2" }
    { "_id" : ObjectId("5c3559b4648171cce9135dd9"), "name" : "zhangdapeng3" }

查询匹配参数
    > db.test1000.find({'name':'zhangdapeng'})
    { "_id" : ObjectId("5c3559ab648171cce9135dd6"), "name" : "zhangdapeng" }
    >

"""

"""
小于$lt
小于等于$lte
大于$gt
大于等于$gte
不等于$ne

查询年龄小于等于18岁的
    > db.test1000.find({age:{$lte:18}})
    { "_id" : ObjectId("5c355a61648171cce9135dda"), "name" : "zhangdapeng3", "age" : 18 }
    { "_id" : ObjectId("5c355a69648171cce9135ddc"), "name" : "zhangdapeng3", "age" : 17 }
    > 
查询年龄大于等于18岁的
    > db.test1000.find({age:{$gte:18}})
    { "_id" : ObjectId("5c355a61648171cce9135dda"), "name" : "zhangdapeng3", "age" : 18 }
    { "_id" : ObjectId("5c355a65648171cce9135ddb"), "name" : "zhangdapeng3", "age" : 19 }

范围 $in $nin不在某个范围类
    > db.test1000.find({age:{$in:[17,18,19]}})
    { "_id" : ObjectId("5c355a61648171cce9135dda"), "name" : "zhangdapeng3", "age" : 18 }
    { "_id" : ObjectId("5c355a65648171cce9135ddb"), "name" : "zhangdapeng3", "age" : 19 }
    { "_id" : ObjectId("5c355a69648171cce9135ddc"), "name" : "zhangdapeng3", "age" : 17 }


逻辑查询
    并且关系直接用,逗号
    或关系$or
        > db.test1000.find({$or:[{'age':18},{'age':19}]})
        { "_id" : ObjectId("5c355a61648171cce9135dda"), "name" : "zhangdapeng3", "age" : 18 }
        { "_id" : ObjectId("5c355a65648171cce9135ddb"), "name" : "zhangdapeng3", "age" : 19 }
        > 
正则表达式
    直接用两个/正则表达式就行/  
    > db.test1000.find({'name':/zhangdapeng*/})
    { "_id" : ObjectId("5c3559ab648171cce9135dd6"), "name" : "zhangdapeng" }
    { "_id" : ObjectId("5c3559af648171cce9135dd7"), "name" : "zhangdapeng1" }
    { "_id" : ObjectId("5c3559b2648171cce9135dd8"), "name" : "zhangdapeng2" }
    { "_id" : ObjectId("5c3559b4648171cce9135dd9"), "name" : "zhangdapeng3" }
    { "_id" : ObjectId("5c355a61648171cce9135dda"), "name" : "zhangdapeng3", "age" : 18 }
    { "_id" : ObjectId("5c355a65648171cce9135ddb"), "name" : "zhangdapeng3", "age" : 19 }
    { "_id" : ObjectId("5c355a69648171cce9135ddc"), "name" : "zhangdapeng3", "age" : 17 }
    > 
限制内容-输出控制
    find().limit(数字)
    find().skip(数字)
    同时使用可以实现翻页
        find().skip(5).limit(20)
        
自定义查询
    db.stu.find({
        $where:function(){
            return this.age>30;
        }
    })
"""
