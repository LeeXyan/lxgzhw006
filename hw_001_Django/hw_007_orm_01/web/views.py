from django.core.paginator import Paginator, PageNotAnInteger, EmptyPage
from django.shortcuts import render, redirect
from .models import UserInfo


# Create your views here.
# 展示所有的用户
def index(request):
    # 从数据库读取学生数据
    users = UserInfo.objects.all()
    # 打印测试
    print(users)  # 所有用户的列表
    print(users[0].name)
    return render(request, 'index.html', {
        'users': users,
    })


# 炫酷的后台管理系统
def myadmin(request):
    return render(request, 'my_admin/main.html')


def top(request):
    return render(request, 'my_admin/top.html')


def left(request):
    return render(request, 'my_admin/left.html')


# 数据显示
def right(request):
    """添加分页的功能"""
    users = UserInfo.objects.all()
    # 请求的页码数
    current_page = request.GET.get('p')
    print(type(current_page))
    # 页码 装这数据 每页显示的数量
    paginator = Paginator(users, 1)
    try:
        # posts装的是请求的当前页的数据
        posts = paginator.page(current_page)
    except PageNotAnInteger:
        posts = paginator.page(1)
        # left = posts.previous_page_number()
        # right = posts.next_page_number()
    except EmptyPage:
        posts = paginator.page(paginator.num_pages)
        # 将当前页的数据传给前端  内容有 我们规定的10条数据
        # 有三个基本的属性
        # 上一页posts.previous_page_number
        # 是否有上一页下一页 has_previous() has_next()
        # 当前页 posts.number
        # 总页数 posts.paginator.num_pages
        # 数据列表 posts.object_list
    mid_list = [i for i in range((int(current_page) - 5), (int(current_page) + 5))]
    # 去除小于0的情况
    mid_list = [i for i in mid_list if i > 0 and i < posts.paginator.num_pages]
    # 从数据库读取学生数据
    return render(request, 'my_admin/right.html', {
        'users': users,
        'posts': posts,
        'mid_list': mid_list,
    })


# 添加用户
def add(request):
    if request.method == 'POST':
        name = request.POST.get('name')
        print(name)
        UserInfo.objects.create(name=name)
        # 添加成功后跳转到数据展示页面
        return redirect(right)
    return render(request, 'my_admin/form.html')


# 删除用户
def delete(request):
    nid = request.GET.get('nid')
    print(nid)
    try:
        nid = int(nid)
        # 从数据库中查找并删除
        UserInfo.objects.filter(nid=nid).delete()
        # 删除成功以后跳转到数据展示页面
        return redirect(right)
    except Exception as e:
        print(e)
    return redirect(myadmin)


def admin_index(request):
    return render(request, 'my_admin/index.html')
