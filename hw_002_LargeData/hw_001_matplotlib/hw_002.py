import random
import matplotlib

from matplotlib import pyplot as plt

# font

# 120 minuture
x = range(0, 120)
# take 120 number form randint(20,35)
y = [random.randint(20, 35) for i in range(120)]

# set picture size
# figsize=(width,height)
fig = plt.figure(figsize=(20, 8), dpi=80)

# draw
plt.plot(x, y)

# set y to a string about minute time
_x = list(x)
# _xtick_labels = ['{}m'.format(i) for i in _x]
# Step size
_xtick_labels = ['10:{} am'.format(i) for i in range(60)]
_xtick_labels += ['11:{} am'.format(i) for i in range(60)]

# rotation=90 make lable rotation
plt.xticks(_x[::5], _xtick_labels[::5], rotation=-90)

# add description
plt.xlabel('time')
plt.ylabel('temperature unit(C)')
plt.title("10:00 am - 12:00 am Temperature change per minute")

# show
plt.show()

# save image
# plt.savefig('./t1.svg')

"""
how to save picture
how to add description
"""
