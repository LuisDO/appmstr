<?php
use \kartik\datecontrol\Module;
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
		'gridview' => [
				'class' => 'kartik\grid\Module',
    ],
//---
'datecontrol' =>  [
        'class' => 'kartik\datecontrol\Module',

        // format settings for displaying each date attribute (ICU format example)
        'displaySettings' => [
            Module::FORMAT_DATE => 'dd-MM-yyyy',
            Module::FORMAT_TIME => 'hh:mm:ss a',
            Module::FORMAT_DATETIME => 'dd-MM-yyyy hh:mm:ss a',
        ],

        // format settings for saving each date attribute (PHP format example)
        'saveSettings' => [
            Module::FORMAT_DATE => 'yyyy-MM-dd', // saves as unix timestamp
            Module::FORMAT_TIME => 'php:H:i:s',
            Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
        ],

        // set your display timezone
      //  'displayTimezone' => 'Asia/Kolkata',
         'displayTimezone' => 'UTC',
        // set your timezone for date saved to db
        'saveTimezone' => 'UTC',

        // automatically use kartik\widgets for each of the above formats
        'autoWidget' => true,

        // default settings for each widget from kartik\widgets used when autoWidget is true
        'autoWidgetSettings' => [
            Module::FORMAT_DATE => ['type'=>2, 'pluginOptions'=>['autoclose'=>true]], // example
            Module::FORMAT_DATETIME => [], // setup if needed
            Module::FORMAT_TIME => [], // setup if needed
        ],

        // custom widget settings that will be used to render the date input instead of kartik\widgets,
        // this will be used when autoWidget is set to false at module or widget level.
        'widgetSettings' => [
            Module::FORMAT_DATE => [
                'class' => 'yii\jui\DatePicker', // example
                'options' => [
                    'dateFormat' => 'php:d-M-Y',
                    'options' => ['class'=>'form-control'],
                ]
            ]
        ]
        // other settings
    ]
//---

				],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,

        ],
        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
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
    ],
    'params' => $params,
];
