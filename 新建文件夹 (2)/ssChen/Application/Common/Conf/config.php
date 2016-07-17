<?php
return array(
	//'配置项'=>'配置值'
	'db_type' => 'mysql',
    'db_user' => 'root', 
	'db_pwd' => 'root', 
	'db_host' => 'localhost', 
	'db_port' => '3306',
    'db_name' => 'sschen',
	'db_charset' => 'utf8',
	'DB_PREFIX' => 'de_',
	 'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
	 'TMPL_CACHE_ON' =>  true, //模板编译缓存，开启后每次都会编译
	 define('APP_DEBUG',TRUE),
);