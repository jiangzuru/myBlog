<?php
return array(
	//'配置项'=>'配置值'
    'MODULE_ALLOW_LIST' => array('Blog'),
    'DEFAULT_MODULE'     => 'Blog', //默认模块
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'myblog', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_PARAMS' => array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
);