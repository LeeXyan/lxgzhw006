from django.db import models


# Create your models here.
# 图片表
class IMG(models.Model):
    img = models.ImageField(upload_to='img')

# 管理员  zhangtao  zhangtao123456
