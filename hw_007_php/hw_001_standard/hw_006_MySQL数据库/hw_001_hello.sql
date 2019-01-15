show tables;

# 修改编码格式
alter database php_01 default character set = utf8;

# 使用数据库
use php_01;

select database();#查看当前正在使用的数据库

# 建立表
create table user1
(
  name varchar(30)#后面可以有约束条件 不是必须的
);#至少要有一个字段

#查看所有的表格
show tables;

#插入数据
insert into user1(name) value ('张大鹏');

#查看数据
select name
from user1;

#插入多条数据
insert into user1(name)
values ('张大鹏'),
       ('空明'),
       ('夕颜');

#修改表结构
# alter table user1 engine =my

alter table user1
  character set = utf8;

#查看表的信息
show create table user1;
desc user1;

# 创建表的同时指定字符集
create table user2
(
  id   int primary key,
  name varchar(32) not null
) charset = utf8;

show tables;

