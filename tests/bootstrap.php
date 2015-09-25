<?php
define('YII_DEBUG', true);
define('YII_ENV', 'prod');
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

//boot application

$app = new \yii\web\Application([
    'id' => 'test-application',
    'name' => 'test-application',
    'basePath' => __DIR__,
    'vendorPath' => __DIR__ . '/../vendor',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'test'
        ]
    ]
]);
