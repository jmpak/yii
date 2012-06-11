<?php
return array(
	'name'=>'Yii Test Demo',
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

 	'preload'=>array('log'),
	

        'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=10.130.10.76;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
		),
	),
);
