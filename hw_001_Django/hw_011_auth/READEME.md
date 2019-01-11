### 创建超级用户
    python manage.py createsuperuser
    
### 创建普通用户
```python
# 创建普通用户
def register(request):
    from django.contrib.auth.models import User
    # User.objects.create(username='hanlemeng', password='hanlemeng')
    # 无需重写Author类,也可以创建新用户
    User.objects.create_user(username='hanlemeng1', password='hanlemeng1')

    return HttpResponse('ok')

```

### 装饰器需要指定跳转url
    LOGIN_URL='/login.html'
    
### 如何拓展auth表
- 新建一张新的表
- 添加一个 一对一的字段 关联auth.models.User表

### 继承重写的autho表和原来的用法一样