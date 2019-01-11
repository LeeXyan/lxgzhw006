from django.contrib import admin
from .models import IMG


# Register your models here.
class ImgAdmin(admin.ModelAdmin):
    list_display = ('img',)


admin.site.register(IMG, ImgAdmin)
