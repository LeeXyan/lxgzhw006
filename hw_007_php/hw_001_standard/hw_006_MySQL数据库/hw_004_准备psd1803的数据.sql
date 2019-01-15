show tables;
use php_01;


create table users(
id int primary key not null auto_increment,
name varchar(32) not null ,
age int not null,
gender varchar(6) not null ,
address varchar(32) not null ,
job varchar(20) not null ,
salary int not null
) charset=utf8;

#插入数据
insert into users( name, age, gender, address, job, salary) VALUES
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000),
       ('张大鹏',25,'男','北京','全栈',30000);