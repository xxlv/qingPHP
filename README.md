> qingPHP
> by xxlv  lvxiang119@gmail.com

##### 框架分为如下四个部分

-  初始化配置环境
-  MVC执行
- 页面渲染
- 响应HTTP


------
**初始化配置环境**
- 0.0 加载配置文件到内存

**启动MVC初始化**

- 1.0 获取请求并包装成R（请求资源封装对象）
- 1.1  HTTP模块构造请求
- 1.2 Parser模块启动，将Req生成R资源
- 1.3 MVC模块将R资源生成Response
- 1.3.1 Boot模块将R资源接管
- 1.3.2 Boot使用MVCHandle对象执行R资源
- 1.3.2.1 模块加载器从R资源中读取模块并加载

**执行MVC**
- 1.3.2.2 执行模块boot方法
- 1.3.2.3 执行控制器init方法
- 1.3.2.4 执行Action的init方法
- 1.3.2.5 执行Action体
- 1.3.2.5 获取viewModel

**渲染开始**
- 2.0 初始化view引擎
- 2.0.1 将viewModel注入view中
- 2.0.2 获取html

**HTTP响应开始**
- 3.1.0执行action onEnd方法
- 3.1.1 执行Controller onEnd方法
- 3.1.2 执行moudle的onEnd方法
- 3.1.3 执行application的OnEnd方法
- 3.2 构造http响应并返回

