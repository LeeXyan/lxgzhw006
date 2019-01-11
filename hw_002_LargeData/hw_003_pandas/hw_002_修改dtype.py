import pandas as pd

# 通过字典创建
temp_dict = {'name': 'dapeng', 'age': 30, 'tel': 18888888}
t3 = pd.Series(temp_dict)
print(t3)
