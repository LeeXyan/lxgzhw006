from django.contrib import auth
from django.http import JsonResponse, HttpResponse
from django.shortcuts import render
from .forms import RegisterForm
from . import models
# Create your views here.

# 使用极验华东验证码的登录
from geetest import GeetestLib


# 首页
def index(request):
    return render(request, 'index.html')


# 注册
def register(request):
    if request.method == 'POST':
        # 字典
        ret = {'status': 0, 'msg': ''}
        form_obj = RegisterForm(request.POST)  # 把request里面的数据传到form里面
        # 校验
        if form_obj.is_valid():
            # 通过
            form_obj.cleaned_data.pop('re_password')  # 把重复密码从数据列表中去除
            # 添加新用户
            models.UserInfo.objects.create_user(**form_obj.cleaned_data)
            # return HttpResponse('注册成功!')
            # 返回json数据
            ret['msg'] = '/index.html'
            return JsonResponse(ret)
        else:
            # return render(request, 'register.html', {
            #     'form_obj': form_obj,
            # })
            ret['status'] = 1
            ret['msg'] = form_obj.errors  # 将错误传回去
            return JsonResponse(ret)
    # 生成form对象
    form_obj = RegisterForm()
    return render(request, 'register.html', {
        'form_obj': form_obj,
    })


# 检查用户名是否已被注册
def check_username_exist(request):
    ret = {'status': 0, 'msg': ''}
    username = request.GET.get('username')
    is_exist = models.UserInfo.objects.filter(username=username)
    if is_exist:
        ret['status'] = 1
        ret['msg'] = '该用户名已被注册'
    return JsonResponse(ret)


"""
1.获取验证码
2.校验验证码
"""


def login(request):
    # if request.is_ajax():  # 如果是AJAX请求
    if request.method == "POST":
        # 初始化一个给AJAX返回的数据
        ret = {"status": 0, "msg": ""}
        # 从提交过来的数据中 取到用户名和密码
        username = request.POST.get("username")
        pwd = request.POST.get("password")
        # 获取极验 滑动验证码相关的参数
        gt = GeetestLib(pc_geetest_id, pc_geetest_key)
        challenge = request.POST.get(gt.FN_CHALLENGE, '')
        validate = request.POST.get(gt.FN_VALIDATE, '')
        seccode = request.POST.get(gt.FN_SECCODE, '')
        status = request.session[gt.GT_STATUS_SESSION_KEY]
        user_id = request.session["user_id"]

        if status:
            result = g
            t.success_validate(challenge, validate, seccode, user_id)
        else:
            result = gt.failback_validate(challenge, validate, seccode)
        if result:
            # 验证码正确
            # 利用auth模块做用户名和密码的校验
            user = auth.authenticate(username=username, password=pwd)
            if user:
                # 用户名密码正确
                # 给用户做登录
                auth.login(request, user)  # 把用户传到全局
                ret["msg"] = "/index.html"
            else:
                # 用户名密码错误
                ret["status"] = 1
                ret["msg"] = "用户名或密码错误！"
        else:
            ret["status"] = 1
            ret["msg"] = "验证码错误"

        return JsonResponse(ret)
    return render(request, "login.html")


# 请在官网申请ID使用，示例ID不可使用
pc_geetest_id = "d25d66e1eba4a79b97cbe360f4932617"
pc_geetest_key = "5adc3a6f063632aff82ea78a16db6b03"


# 处理极验 获取验证码的视图
def get_geetest(request):
    user_id = 'lxgzhw@163.com'
    gt = GeetestLib(pc_geetest_id, pc_geetest_key)
    status = gt.pre_process(user_id)
    request.session[gt.GT_STATUS_SESSION_KEY] = status
    request.session["user_id"] = user_id
    response_str = gt.get_response_str()
    return HttpResponse(response_str)
