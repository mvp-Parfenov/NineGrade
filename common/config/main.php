<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'container' => [

// теперь везде Pagination будет по 25 выводить
//        'yii\data\Pagination'=> [
//            'pageSize' => 50
//        ]
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached' => true,

//            'class' => 'yii\caching\FileCache',
            // set cache in one folder
//            'cachePath' => '@common/runtime/cache'
        ],
    ],
];
