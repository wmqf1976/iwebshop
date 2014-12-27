<?php
return array(
	'logs'=>array(
		'path'=>'logs/log',
		'type'=>'file'
	),
	'DB'=>array(
		'type'=>'mysqli',
        'tablePre'=>'is_',
		'read'=>array(
			array('host'=>'localhost:3306','user'=>'root','passwd'=>'768133','name'=>'iwebshop'),
		),

		'write'=>array(
			'host'=>'localhost:3306','user'=>'root','passwd'=>'768133','name'=>'iwebshop',
		),
	),
	'interceptor' => array('themeroute@onCreateController','layoutroute@onCreateView'),
	'langPath' => 'language',
	'viewPath' => 'views',
	'skinPath' => 'skin',
    'classes' => 'classes.*',
    'rewriteRule' =>'url',
	'theme' => array('pc' => 'default','mobile' => 'mobile'),
	'skin' => array('pc' => 'default','mobile' => 'default'),
	'timezone'	=> 'Etc/GMT-8',
	'upload' => 'upload',
	'dbbackup' => 'backup/database',
	'safe' => 'cookie',
	'safeLevel' => 'none',
	'lang' => 'zh_sc',
	'debug'=> false,
	'configExt'=> array('site_config'=>'config/site_config.php'),
	'encryptKey'=>'dedcf52742eebfec2db6f9794d9df0a8',
);
?>