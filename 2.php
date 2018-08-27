1.掌握PHP的系统
系统：有很多，例如：康盛的产品（uchome、supesite、discuzX等），帝国系统、DEDE（织梦）、ecshop等

2.AJAX的优势是什么？
ajax是异步传输技术，可以通过javascript实现，也可以通过JQuery框架实现，实现局部刷新，减轻了服务器的压力，也提高了用户体验。

3.安全对一套程序来说至关重要，请说说在开发中应该注意哪些安全机制？

（1）使用验证码防止注册机灌水。

（2）使用预处理，绑定参数，参数过滤转义 防止sql注入

（3）使用token防止远程提交，使用token验证登录状态。

4、在程序的开发中，如何提高程序的运行效率？

（1）优化SQL语句，查询语句中尽量不使用select *，用哪个字段查哪个字段；少用子查询可用表连接代替；少用模糊查询。

（2）数据表中创建索引。

（3）对程序中经常用到的数据生成缓存（比如使用redis缓存数据，比如使用ob进行动态页面静态化等等）。

（4）对mysql做主从复制，读写分离。（提高mysq执行效率和查询速度）

（5）使用nginx做负载均衡。（将访问压力平均分配到多态服务器）

