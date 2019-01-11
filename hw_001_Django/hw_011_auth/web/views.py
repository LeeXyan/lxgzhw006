from django.contrib import auth
from django.contrib.auth.decorators import login_required
from django.http import HttpResponse
from django.shortcuts import render, redirect
from .models import User
from functools import wraps


# 登录装饰器
def check_login(f):
    @wraps(f)
    def inner(request, *args, **kwargs):
        # 如果session中有值 就执行代码 没有就跳转到登录页面
        if request.session.get('is_login') == '1':
            return f(request, *args, **kwargs)
        else:
            return redirect(login)

    return inner


# Create your views here.
# @check_login
# 系统装饰器 需要指定跳转页面
@login_required
def index(request):
    user_id = request.session.get('user_id')
    user = User.objects.filter(id=user_id).first()
    return render(request, 'index.html', {
        'user': user,
    })


# 登录
def login(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        try:
            user = User.objects.filter(username=username, password=password).first()
            if user:
                # 登录成功 生成session
                request.session['is_login'] = '1'
                request.session['user_id'] = user.id
                # 生成特殊的字符串
                # 在数据库的session表中对应一个session value
                # 在响应中,浏览器写了一个cookie
                return redirect(index)
        except Exception as e:
            print(e)
    return render(request, 'login.html')


# 系统验证登录
def auth_login(request):
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        # 判断用户名和密码
        user = auth.authenticate(username=username, password=password)
        # 将登录用户封装到request.user
        auth.login(request, user)
        if user:
            return redirect('/auth_index.html/')
    return render(request, 'auth_login.html')


def auth_index(request):
    return render(request, 'auth_index.html', {
        'user': request.user,
    })


# 注销
def logout(request):
    # 相当于 request.session.flush()
    auth.logout(request)
    return redirect(auth_login)


# 创建普通用户
def register(request):
    from django.contrib.auth.models import User
    # AuthUser.objects.create(username='hanlemeng', password='hanlemeng')
    # 无需重写Author类,也可以创建新用户
    User.objects.create_user(username='hanlemeng1', password='hanlemeng1')
    """
    修改密码
    set_password(新密码)
    """
    return HttpResponse('ok')

# 修改密码
