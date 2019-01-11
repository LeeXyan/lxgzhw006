from django.core.paginator import Paginator, PageNotAnInteger, EmptyPage
from django.shortcuts import render, redirect
from .models import AdminUser, Publisher, Books, Author
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
def login(request):
    # 进行登录验证,如果验证通过,就让其进入后台管理系统
    if request.method == "POST":
        name = request.POST.get("name")
        password = request.POST.get("password")
        result = AdminUser.objects.filter(name=name, password=password)
        if result:
            # 生成session
            request.session['is_login'] = '1'
            # 验证通过,跳转到后台首页
            return redirect(index)
    return render(request, 'index.html')


@check_login
def index(request):
    return render(request, 'main-page.html')


# 展示图书
def books(request):
    # 将出版社渲染到页面
    publishers = Publisher.objects.all()
    # 将所有书籍渲染到页面
    book_list = Books.objects.all()
    """添加分页的功能"""
    # 请求的页码数
    current_page = request.GET.get('p')
    print(type(current_page))
    # 页码 装这数据 每页显示的数量
    paginator = Paginator(publishers, 1)
    try:
        # posts装的是请求的当前页的数据
        posts = paginator.page(current_page)
    except PageNotAnInteger:
        posts = paginator.page(1)
    except EmptyPage:
        posts = paginator.page(paginator.num_pages)
    mid_list = [i for i in range((int(current_page) - 5), (int(current_page) + 5))]
    # 去除小于0的情况
    mid_list = [i for i in mid_list if i > 0 and i < posts.paginator.num_pages]

    return render(request, 'books.html', {
        'publishers': publishers,
        'posts': posts,
        'mid_list': mid_list,
        'current': int(current_page),
        'book_list': book_list,
    })


# 出版社的相关操作

# 增加
def add_publisher(request):
    if request.method == "POST":
        # 提取参数 添加到数据库
        name = request.POST.get('name')
        city = request.POST.get('city')
        email = request.POST.get('email')
        phone = request.POST.get('phone')
        try:
            Publisher.objects.create(name=name, city=city, email=email, phone=phone)
            print("添加出版社成功")
            return redirect(books)
        except Exception as e:
            print(e)
    return render(request, 'add_publisher.html')


# 删除
def delete_publisher(request):
    # 获取要删除的id 从数据库删除
    nid = request.GET.get('nid')
    Publisher.objects.filter(id=nid).delete()
    return redirect(books)


# 修改

def update_publisher(request):
    # 如果是post提交,就修改数据
    if request.method == "POST":
        nid = request.POST.get('nid')
        # 提取参数 添加到数据库
        name = request.POST.get('name')
        city = request.POST.get('city')
        email = request.POST.get('email')
        phone = request.POST.get('phone')
        try:
            Publisher.objects.filter(id=nid).update(name=name, city=city, email=email, phone=phone)
            print("修改出版社成功")
            return redirect(books)
        except Exception as e:
            print(e)
    nid = request.GET.get('nid')
    # 根据id把数据查出来渲染到页面,方便修改
    publisher = Publisher.objects.filter(id=nid).first()
    return render(request, 'update_publisher.html', {
        'nid': nid,
        'publisher': publisher,
    })
