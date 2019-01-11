# 开发过程详细记录

### 建立model表
```python
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


```

### 数据库迁移

```
python manage.py makemigrations
python manage.py migrate
```

### 注册admin
```python
from django.contrib import admin
from django.utils.safestring import mark_safe

from . import models


# Register your models here.

# 书籍管理
class BookAdmin(admin.ModelAdmin):
    def deletes(self):
        return mark_safe("<a href=''>删除</a>")

    # 控制后台展示表格内容
    list_display = ['title', 'price', 'publishDate', 'publish', deletes]
    # 会将字段变成链接 点击可以编辑该字段
    list_display_links = ['price', 'title']
    # 会在右侧增加一个过滤选择器
    list_filter = ['price', 'title', 'authors', 'publish']
    # 可编辑 该字段直接变成输入框
    list_editable = ['title']
    # 搜索字段 会增加一个搜索框
    search_fields = ['title', 'price']


admin.site.register(models.Author)
admin.site.register(models.Publish)
admin.site.register(models.AuthorDetail)
admin.site.register(models.Book)

```
### 将setting里面的host改为* 然后运行
```
python manage.py runserver 0:8080
```

### 生成超级用户
```
python manage.py createsuperuser

```

### 访问 python.com:8080/admin
