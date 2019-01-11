from django.shortcuts import render
import markdown
from django.views.generic.base import View

from blog.forms import MDEditorForm
from .models import Post


def PostView(request):
    post = Post.objects.all()
    for p in post:
        p.content = markdown.markdown(
            p.content,
            extensions=[
                'markdown.extensions.extra',
                'markdown.extensions.codehilite',  # 代码高亮
                'markdown.extensions.toc',
            ]
        )
    return render(request, 'index.html', {'post': post})


class IndexView(View):
    def get(self, request):
        form = MDEditorForm()
        return render(request, 'mdeditortest.html', {'form': form})
