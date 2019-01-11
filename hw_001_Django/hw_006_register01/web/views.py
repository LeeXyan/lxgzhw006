from django.shortcuts import render, redirect
from .models import User
from .forms import RegisterForm


# Create your views here.
def index(request):
    return render(request, 'index.html')


def register(request):
    if request.method == 'GET':
        # 实例化表单对象，里面包含验证码
        register_forms = RegisterForm()
        # 返回表单
        return render(request, 'register.html', {'register_forms': register_forms})
    if request.method == "POST":
        # 表单验证
        register_forms = RegisterForm(request.POST)
        if register_forms.is_valid():
            # 验证成功存储账号密码
            email = request.POST.get('name')
            password = request.POST.get('password')
            User.objects.create(name=email, password=password)
            return redirect(index)

        return render(request, 'register.html', {'register_forms': register_forms})

