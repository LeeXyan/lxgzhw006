# matplotlib学习笔记

### show chinese word

```
git clone https://github.com/tracyone/program_font && cd program_font && ./install.sh
fc-list :lang=zh
```

### more line
```python
# plt
# plt
import random

from matplotlib import pyplot as plt

# x y
# age x
age = [int(i) for i in range(11, 31)]

# friends y
friends = [1, 0, 1, 1, 2, 4, 3, 2, 3, 4, 4, 5, 6, 5, 4, 4, 1, 1, 1, 1]
# anthor
friends1 = [random.randint(1, 5) for i in range(20)]
# print(len(age))
# print(len(friends))
# plot
plt.plot(age, friends, label='self')
plt.plot(age, friends1, label='Deskmate')

# tick  lable
# _xtick_lables = ['{}age'.format(i) for i in age]
# plt.xticks(_xtick_lables)
plt.xticks(age)

# Grid drawing
plt.grid(alpha=0.2)

plt.legend()
# show
plt.show()


```