<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module',
            // your other grid module settings
        ],
       'gridviewKrajee' =>  [
            'class' => '\kartik\grid\Module',
            // your other grid module settings
        ],
        'datecontrol' =>  [
            'class' => '\kartik\datecontrol\Module',
            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'php:d/m/Y',
                'time' => 'php:H:i:s A',
                'datetime' => 'php:d-m-Y H:i:s A',
            ],
            // format settings for saving each date attribute
             'saveSettings' => [
                'date' => 'php:Y-m-d', 
                'time' => 'php:H:i:s',
                'datetime' => 'php:Y-m-d H:i:s',
            ],
     // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ],
    ], 
];
