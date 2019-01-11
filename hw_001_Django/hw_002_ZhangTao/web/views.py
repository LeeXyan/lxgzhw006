from django.shortcuts import render
from .models import IMG


# Create your views here.
def index(request):
    # 从数据库获取所有的图片 平铺到网站
    images = IMG.objects.all().values('img')
    # print(images)
    # 测试为空的代码
    # images = ''
    return render(request, 'index.html', {
        'images': images,
    })
