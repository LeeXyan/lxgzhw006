from django.db import models


# Create your models here.
# 图片表
class IMG(models.Model):
    img = models.ImageField(upload_to='img')
    name = models.CharField(max_length=68, null=False)
