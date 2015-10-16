<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' =>array(
		'__PUBLIC__'  => __ROOT__.'/Public',
		),

	//PDO专用定义
	// 'DB_TYPE' => 'PDO',
	// 'DB_USER' => 'root',
	// 'DB_PWD' => '',
	// 'DB_PREFIX' => 'manbu_',
	// 'DB_DSN' => 'mysql:host=localhost;dbname=manbu;charset=UTF8',

	//数据库配置信息
'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => 'localhost', // 服务器地址
'DB_NAME'   => 'manbu', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => '', // 密码
'DB_PORT'   => 3306, // 端口
'DB_PREFIX' => 'manbu_', // 数据库表前缀 
'DB_CHARSET'=> 'utf8', // 字符集
'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

);