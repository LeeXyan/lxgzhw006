from django import forms

from captcha.fields import CaptchaField


class RegisterForm(forms.Form):
    name = forms.CharField(required=True)

    password = forms.CharField(required=True, min_length=5)

    captcha = CaptchaField(error_messages={"invalid": u"验证码错误"})
