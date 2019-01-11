import pandas as pd

# 通过字典创建
temp_dict = {'name': 'dapeng', 'age': 30, 'tel': 18888888}
t3 = pd.Series(temp_dict)
print(t3)


def show():
    print('--' * 22)


# 通过索引取值
print(t3[0])
print(t3['name'])
show()
# 取不连续的多行
print(t3[:3])
show()
print(t3[2:3])
show()
print(t3[['name', 'tel']])
