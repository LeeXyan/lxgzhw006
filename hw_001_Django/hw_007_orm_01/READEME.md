# 工作笔记

### 创建用户表

```python
# 用户表
class UserInfo(models.Model):
    """用户表"""
    nid = models.AutoField(primary_key=True)  # 自增字段 设置为主键
    # 姓名
    name = models.CharField(max_length=32, null=False)  # 不能为空
    
```

### 数据表的增删查改
- 通过操作类来进行
- 如果修改了表结构,需要重新migration+migrate

### 执行命令
    python manage.py makemigrations 生成数据库改动文件
    python manage.py migrate 根据修改文件去数据库执行修改
    
### 操作数据行