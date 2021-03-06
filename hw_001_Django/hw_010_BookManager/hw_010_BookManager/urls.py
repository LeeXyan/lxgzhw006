"""hw_010_BookManager URL Configuration

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
from web import views

urlpatterns = [
    path('admin/', admin.site.urls),
    re_path(r'^$', views.login),
    re_path(r'^index.html/$', views.index),
    re_path(r'^books.html?\w+', views.books),

    # 出版社操作
    re_path(r'^add_publisher.html/$', views.add_publisher),
    re_path(r'^delete_publisher.html?\w+', views.delete_publisher),
    re_path(r'^update_publisher.html?\w+$', views.update_publisher),

]
