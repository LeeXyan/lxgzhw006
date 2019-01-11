from matplotlib import pyplot as plt

x = range(2, 26, 2)
y = [15, 13, 14.5, 17.20, 25, 26, 26, 27, 22, 18, 18, 15]

# set picture size
# figsize=(width,height)
# fig = plt.figure(figsize=(20, 8), dpi=80)

# draw
plt.plot(x, y)

# set x and y
_xtick_labels = [i / 2 for i in range(4, 49)]
plt.xticks(_xtick_labels[::3])
plt.yticks(range(min(y), max(y) + 1))

# show
plt.show()

# save image
# plt.savefig('./t1.svg')

"""
how to save picture
how to add description
"""
