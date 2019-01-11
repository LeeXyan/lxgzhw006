"""
form表单的作用
    生产Html代码
    验证
    把验证错误显示在页面上,并且保留原始的数据

form表单的基本使用
    导入模块

"""
from django.core.exceptions import ValidationError
from . import models

"""
bbs用到的form类
"""
from django import forms


# 定义一个注册的form类
class RegisterForm(forms.Form):
    # 用户名
    username = forms.CharField(
        max_length=16,
        label='用户名',
        # 样式
        widget=forms.widgets.TextInput(
            attrs={
                'class': 'form-control',
            }
        ),
        # 错误信息
        error_messages={
            'max_length': '用户名不嗯给你超过16位',
            'required': '用户名不能为空',
        }
    )
    # 密码
    password = forms.CharField(
        min_length=6,
        label='密码',
        widget=forms.widgets.PasswordInput(
            # 密码输入框
            # attrs={'class':'form-contrl'}
            attrs={
                'class': 'form-control',
            }
        ),
        # 错误信息
        error_messages={
            'max_length': '密码最低6位',
            'required': '密码不能为空',
        }
    )
    # 确认密码
    re_password = forms.CharField(
        max_length=16,
        label='确认密码',
        widget=forms.widgets.PasswordInput(
            # 密码输入框
            # attrs={'class':'form-contrl'}
            attrs={
                'class': 'form-control',
            }
        ),
        # 错误信息
        error_messages={
            'max_length': '密码最低6位',
            'required': '密码不能为空',
        }
    )
    # 邮箱
    email = forms.EmailField(
        label='邮箱',
        widget=forms.widgets.EmailInput(
            attrs={
                'class': 'form-control',
            }
        ),
        # 错误信息
        error_messages={
            'invalid': '邮箱格式不正确',
        }
    )

    # 重写全局的钩子函数,对确认密码做校验
    def clean(self):
        password = self.cleaned_data.get('password')
        re_password = self.cleaned_data.get('re_password')
        if re_password and re_password != password:
            # 加一个异常
            self.add_error('re_password', ValidationError('两次密码部一致'))
        else:
            return self.cleaned_data

    # 重写email钩子函数
    def clean_email(self):
        email = self.cleaned_data.get('email')
        is_exist = models.UserInfo.objects.filter(email=email)
        if is_exist:
            # 表示邮箱已存在
            self.add_error('email', ValidationError('邮箱已存在'))

    # 重写username钩子函数
    def clean_username(self):
        username = self.cleaned_data.get('username')
        is_exist = models.UserInfo.objects.filter(username=username)
        if is_exist:
            # 表示邮箱已存在
            self.add_error('username', ValidationError('用户名已存在'))
