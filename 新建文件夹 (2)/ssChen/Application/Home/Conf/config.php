<?php
return array(
'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'=>array(
    	'__JS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/js',
    	'__CSS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/css',
        '__IMG__'=>__ROOT__.'/Public/'.MODULE_NAME.'/img',
        '__PLUGIN__'=>__ROOT__.'/Public/plugin/',
		'__IMGVIDEO__'=>__ROOT__.'/Public/Admin/images/video/',
 	    '__ADMINCSS__'=>__ROOT__.'/Public/Admin/css',
         '__ADMINJS__'=>__ROOT__.'/Public/Admin/js',
         '__ADMINIMG__'=>__ROOT__.'/Public/Admin/img',
        
    
    ),
);