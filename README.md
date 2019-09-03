# webHook
web钩子自动更新代码

~~~
php函数exec执行的时候一般运行身份不是root 所以会有权限问题

修改 vim /etc/sudoers sudo 文件

	添加正对改文件执行不需要密码切换身份
	nginx ALL = NOPASSWD: /var/www/webHook/data/pull.sh


git项目->仓库设置->管理 Web 钩子->添加web钩子->添加配置
	配置：
		推送地址：http://hook.dayeshi.xin/xjj.php
		数据格式：application/x-www-form-urlencoded或者application/json
~~~