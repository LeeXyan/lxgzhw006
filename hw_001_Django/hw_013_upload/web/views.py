from django.shortcuts import render


# Create your views here.
# 上传文件
def upload(request):
    if request.method == 'POST':
        file = request.FILES.get('file')
        # 保存文件
        print(file, type(file))
        # print(request.body)
        with open(file.name, 'wb') as f:
            for line in file.chunks():
                f.write(line)
    return render(request, 'upload.html')
