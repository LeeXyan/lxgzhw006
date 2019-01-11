"""hw_012_bbs URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, re_path
from blog import views

urlpatterns = [
    path('admin/', admin.site.urls),
    re_path(r'^login.html', views.login),
    re_path(r'^index.html', views.index),
    re_path(r'^$', views.index),
    re_path(r'^register.html', views.register),
    # 极验滑动验证码 获取验证码的url
    re_path(r'^pc-geetest/register', views.get_geetest),
    # 检查用户名是否已被注册
    re_path(r'^check_username_exist/', views.check_username_exist),
]
