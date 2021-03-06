<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
    	 'request' => [
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
       
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
          
             '' => 'site/index',
			 'contact' => 'site/contact',
			 'services' =>  'site/services',
			 'blog' => 'site/blog',
			 'galereya' =>  'site/galereya',
	//		 'signup'=>  'site/signup',
		'login'=>  'site/login',
		'reset-password'=>  'site/reset-password',
		'request-password-reset'=>  'site/request-password-reset',
            ],
        ],
       
    ],
    'params' => $params,
];
