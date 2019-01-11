from django.contrib import admin
from .models import Publisher, Author, AdminUser, Books

# Register your models here.

admin.site.register(Publisher)
admin.site.register(Author)
admin.site.register(AdminUser)
admin.site.register(Books)
