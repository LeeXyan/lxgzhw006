# 设计过程详细记录

### 安装验证码插件

```
pip install django-simple-captcha
```

### settings里面加入
```
'captcha',
```

### 定义用户表
```python
from django.db import models
from django.contrib.auth.models import AbstractUser


class UserInfo(AbstractUser):
    """
    用户信息表
    """
    email = models.EmailField()
    password = models.CharField(max_length=32)

    def __str__(self):
        return self.username

    class Meta:
        verbose_name = "用户"
        verbose_name_plural = verbose_name

```

### 定义路由
```python
from django.contrib import admin
from django.urls import path, include, re_path
from web import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('captcha', include('captcha.urls')),
    re_path(r'^register/', views.register),
    re_path(r'^index/', views.index),
    re_path(r'^$', views.index),
]
```
### 定义视图

```python
from django.shortcuts import render
# Create your views here.
def index(request):
    return render(request, 'index.html')


def register(request):
    return render(request, 'register.html')

```

### 在settings文件里面添加
```
STATICFILES_DIRS = [
    os.path.join(BASE_DIR, "static")
]

# Django用户上传的都叫media文件
MEDIA_URL = "/media/"
# media配置，用户上传的文件都默认放在这个文件夹下
MEDIA_ROOT = os.path.join(BASE_DIR, "media")

# 告诉Django项目用哪张表做认证
AUTH_USER_MODEL = 'web.UserInfo'
```

### 同步数据库
```
python manage.py makemigrations
python manage.py migrate
```

### 定义表单
```python
from django import forms

from captcha.fields import CaptchaField


class RegisterForm(forms.Form):
    email = forms.EmailField(required=True)

    password = forms.CharField(required=True, min_length=5)

    captcha = CaptchaField(error_messages={"invalid": u"验证码错误"})

```

### 完善view方法
```python
from django.shortcuts import render
from .forms import RegisterForms
from .models import UserInfo


# Create your views here.
def index(request):
    return render(request, 'index.html')


def register(request):
    def get(self, request):
        # 实例化表单对象，里面包含验证码
        register_forms = RegisterForms()
        # 返回表单
        return render(request, 'register.html', {'register_forms': register_forms})

    def post(self, request):
        # 表单验证
        register_forms = RegisterForms(request.POST)
        if register_forms.is_valid():
            # 验证成功存储账号密码
            email = request.POST.get('email')
            password = request.POST.get('password')
            # 实例化对象存入数据
            user_pro = UserInfo()
            user_pro.email = email
            user_pro.password = password
            # 写入数据库
            user_pro.save()
            return render(request, 'register.html', {'msg': '注册成功'})
        else:

            return render(request, 'register.html', {'register_forms': register_forms})

```

### 完善register.html页面

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<h1>注册</h1>
<form action="/register" method="post">
    {% csrf_token %}
    <p>
        {{ register_forms.email.label }}
        {{ register_forms.email }}
    </p>
    <p>
        {{ register_forms.password.label }}
        {{ register_forms.password }}
    </p>
    <p>
        {{ register_forms.captcha.label }}
        {{ register_forms.captcha }}
    </p>
    <p>
        {{ msg }}
        {% for key,value in register_forms.errors.items %}
            {{ value }}
        {% endfor %}

    </p>
    <p>
        <input type="submit" value="submit">
    </p>
</form>
</body>
</html>
```