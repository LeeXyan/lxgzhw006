#hw_002_user2表格的相关操作.sql

show tables;

desc user2;

#添加一个字段
alter table user2
  add column age int not null;

#把字段添加到指定的位置 name的后面
alter table user2
  add column gender bool not null default true after name;

#添加一个不需要的字段
alter table user2
  add column delete1 varchar(32);

#删除不需要的字段
alter table user2
  drop column delete1;

# 调整字段 把age调整到name后面
alter table user2
  change age age int not null after name;

