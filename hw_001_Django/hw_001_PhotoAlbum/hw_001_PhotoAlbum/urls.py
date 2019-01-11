from django.contrib import admin
from django.urls import path, re_path
from web import views
from django.views.static import serve  # 导入相关静态文件处理的views控制包
from hw_001_PhotoAlbum.settings import MEDIA_ROOT  # 导入项目文件夹中setting中的MEDIA_ROOT绝对路径

urlpatterns = [
    path('admin/', admin.site.urls),
    re_path(r'^$', views.index),
    re_path(r'^index.html/$', views.index),
    re_path(r'^about.html/$', views.about),
    re_path(r'^services.html/$', views.service),
    re_path(r'^portfolio.html/$', views.portfolio),
    re_path(r'^contact.html/$', views.contact),
    re_path(r'^media/(?P<path>.*)$', serve, {"document_root": MEDIA_ROOT}),
]
