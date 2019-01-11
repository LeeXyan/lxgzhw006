from django.shortcuts import render

# Create your views here.
# 引入django自带的分页功能
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger

USER_LIST = []
# 模拟数据
for i in range(999):
    temp = {'name': 'root' + str(i), 'age': i}
    USER_LIST.append(temp)


def fenye(request):
    # 请求的页码数
    current_page = request.GET.get('p')
    print(type(current_page))
    # 页码 装这数据 每页显示的数量
    paginator = Paginator(USER_LIST, 10)
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
    return render(request, 'index.html',
                  {'posts': posts,
                   'mid_list': mid_list,
                   # 'left': left,
                   # 'right': right,
                   })


def index(request):
    book_list = []
    # 模拟数据
    for i in range(999):
        temp = {'name': 'root' + str(i), 'age': i}
        book_list.append(temp)
    # Book.objects.bulk_create(book_list)  #builk_create 是批量创建数据

    # print(Paginator.count) #总数据量
    # print(Paginator.num_pages) #分页数
    # print(Paginator.page_range) #显示的是页数的标记 就是按钮的数目

    # book_list = Book.objects.all()
    paginator = Paginator(book_list, 2)  # 设置每一页显示几条  创建一个panginator对象

    # try:
    #     current_num = int(request.GET.get('page',1))
    #
    #     book_list = paginator.page(current_num)

    # print(paginator.count)  #通过你创建的对象来调用pangnator的属性  这个是统计总数
    # print(paginator.num_pages)  #因为你上面设置了每一页显示两条  这个分页就会是总数除去每一页的显示的数量
    # print(paginator.page_range)
    # book_list = paginator.page(1)   #这个是对你的分页的数据进行取值  去除你的分过后的第一页
    # # book_list ，   paginator.page是取你的分页后的某一页
    # print(book_list)

    # book_list = Book.objects.all()
    # paginator = Paginator(book_list, 2)  # 设置每一页显示几条  创建一个panginator对象

    try:
        current_num = int(request.GET.get('page', 2))  # 当你在url内输入的?page = 页码数  显示你输入的页面数目 默认为第2页
        book_list = paginator.page(current_num)
    except EmptyPage:
        book_list = paginator.page(4)  # 当你输入的page是不存在的时候就会报错

    if paginator.num_pages > 11:  # 如果分页的数目大于11
        if current_num - 5 < 1:  # 你输入的值
            pageRange = range(1, 11)  # 按钮数
        elif current_num + 5 > paginator.num_pages:  # 按钮数加5大于分页数
            pageRange = range(current_num - 5, current_num + 1)  # 显示的按钮数

        else:
            pageRange = range(current_num - 5, current_num + 6)  # range求的是按钮数   如果你的按钮数小于分页数 那么就按照正常的分页数目来显示

    else:
        pageRange = paginator.page_range()  # 正常分配

    return render(request, 'index2.html', locals())
