from django.db import models


# Create your models here.
# 管理员
class AdminUser(models.Model):
    # 用户名
    name = models.CharField(max_length=24)
    # 密码
    password = models.CharField(max_length=36)

    def __str__(self):
        return self.name


# 出版社
class Publisher(models.Model):
    # id
    id = models.AutoField(primary_key=True)
    # name 唯一 不可为空
    name = models.CharField(max_length=64, null=False, unique=True)
    # 城市
    city = models.CharField(max_length=64)
    # 邮箱
    email = models.EmailField()
    # 联系电话
    phone = models.BigIntegerField()

    def __str__(self):
        return self.name


"""
图书管理系统分析:
    一本书,只能有一个出版社
    一本书 有多个作者
    一个作者 能写多本书
"""


# 书籍表
class Books(models.Model):
    # id
    id = models.AutoField(primary_key=True)
    # 书名
    name = models.CharField(max_length=32)
    # 出版社
    publisher = models.ForeignKey(to='Publisher', to_field='id',
                                  on_delete=models.CASCADE)
    # 作者
    author = models.ForeignKey(to='Author', to_field='id',
                               on_delete=models.CASCADE)

    # 价格
    price = models.IntegerField()

    def __str__(self):
        return self.name


# 作者表
class Author(models.Model):
    # id
    id = models.AutoField(primary_key=True)
    # 姓名
    name = models.CharField(max_length=32)
    # 年龄
    age = models.IntegerField()
    # 性别 1 男 0 女
    gender = models.BooleanField()
    # 所在城市
    city = models.CharField(max_length=32)
    # 邮箱
    email = models.EmailField()
    # 联系电话
    phone = models.BigIntegerField()

    def __str__(self):
        return self.name
