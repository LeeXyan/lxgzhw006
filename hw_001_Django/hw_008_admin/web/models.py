from django.db import models


# Create your models here.
# 作者表
class Author(models.Model):
    # id
    nid = models.AutoField(primary_key=True)
    # name
    name = models.CharField(max_length=32)
    # age
    age = models.IntegerField()
    # 一对一 AuthorDetail
    authorDetail = models.OneToOneField(to='AuthorDetail',
                                        on_delete=models.CASCADE)

    # str
    def __str__(self):
        return self.name


# 作者详情表
class AuthorDetail(models.Model):
    # id
    nid = models.AutoField(primary_key=True)
    # birthday Date
    birthday = models.DateField()
    # telephone BigInt
    telephone = models.BigIntegerField()
    # addr
    addr = models.CharField(max_length=32)

    def __str__(self):
        return "作者信息"


# 出版社表
class Publish(models.Model):
    # id
    nid = models.AutoField(primary_key=True)
    # name
    name = models.CharField(max_length=32)
    # city
    city = models.CharField(max_length=32)
    # email
    email = models.EmailField()

    # str
    def __str__(self):
        return self.name


# 书籍表
class Book(models.Model):
    # nid
    nid = models.AutoField(primary_key=True)
    # title
    title = models.CharField(max_length=32)
    # publishDate
    publishDate = models.DateField()
    # price
    price = models.IntegerField()
    # 与Publish建立一对多
    publish = models.ForeignKey(to='Publish',
                                   to_field='nid',
                                   on_delete=models.CASCADE)
    # 与Author建立多对多
    author = models.ManyToManyField(to='Author',
                                    )

    # str
    def __str__(self):
        return self.title
