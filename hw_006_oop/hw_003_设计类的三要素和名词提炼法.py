"""
类的设计
    在使用面对对象开发之前,应该首先分析需求,确定一下,程序中需要包含哪些类

在程序开发中,要设计一个类,通常需要满足以下三个要素:
    1.类名满足大驼峰命名法
    2.属性这类事物具有什么特征
    3.方法:具有什么样的方法

类名的确定:
    名词提炼法
    在分析需求的是否,出现了哪些名词
    对对象的特征描述,通常可以定义为属性
    对象具体的行为,通常可以定义为方法

练习:
    小明今年18岁,身高1.75,每天早上跑完步,会去吃东西
    小美今年17岁,身高1.65,小美部跑步,小美喜欢吃东西

    ====>>>>>>>>>>>>>
    定义一个Person类:
        属性:
            name名字
            age年龄
            height身高
        方法:
            run()跑步
            eat()吃
    需求中没有涉及的属性和方法,在涉及类时是不需要提现的

练习2:
    一只换色的狗狗叫大黄
    看见生人汪汪叫
    看见熟人摇尾巴

    ======>>>>>>>>>
    Dog()狗类:
        属性:
            name名字
            color颜色
        方法:
            say()汪汪叫
            tail()摇尾巴
"""