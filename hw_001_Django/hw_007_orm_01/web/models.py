from django.db import models


# Create your models here.
# 用户表
class UserInfo(models.Model):
    """用户表"""
    nid = models.AutoField(primary_key=True)  # 自增字段 设置为主键
    # 姓名
    name = models.CharField(max_length=32, null=False)  # 不能为空

    # str
    def __str__(self):
        return self.name
