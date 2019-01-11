import numpy as np
# axis=0 表示列 axis=1 表示行 axis=None表示所有数据
t1 = np.arange(12).reshape((3, 4)).astype('float')
t1[1, 2:] = np.nan
print(t1)
# 遍历
for i in range(t1.shape[1]):  # 遍历每一列
    temp_col = t1[:, i]  # 当前的这一列
    nan_num = np.count_nonzero(temp_col != temp_col)
    if nan_num != 0:  # 不为0 说明有nan
        # 不为nan的数组
        temp_not_nan_col = temp_col[temp_col == temp_col]
        # 把是nan的值修改为均值
        temp_col[np.isnan(temp_col)] = temp_not_nan_col.mean()
print('--' * 22)
print(t1)
