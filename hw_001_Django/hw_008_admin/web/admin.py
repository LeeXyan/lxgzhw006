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
    list_filter = ['price', 'title']
    # 可编辑 该字段直接变成输入框
    # list_editable = ['title']
    # 搜索字段 会增加一个搜索框
    search_fields = ['title', 'price']


admin.site.register(models.Author)
admin.site.register(models.Publish)
admin.site.register(models.AuthorDetail)
admin.site.register(models.Book, BookAdmin)
