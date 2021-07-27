<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'mcursudaa',
        ],
        'formatter' => [
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-m-Y H:i:s',
            'timeFormat' => 'php:H:i:s',
            'decimalSeparator' => ',',
            'thousandSeparator' => '.',
            'currencyCode' => 'IDR',
            // 'numberFormatterSymbols' => [
            //     NumberFormatter::CURRENCY_SYMBOL => ''
            // ],
            // 'numberFormatterOptions' => [
            //     // NumberFormatter::MIN_FRACTION_DIGITS => 0,
            //     // NumberFormatter::MAX_FRACTION_DIGITS => 2,
            // ],
            'defaultTimeZone' => 'Asia/Jakarta',
            'nullDisplay' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,
        'db_sqlsrv' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlsrv:Server=192.168.252.250;Database=RS_AASimrs',
            'username' => 'sa',
            'password' => 'data_123',
            'charset' => 'utf8',
            'tablePrefix' => 'dbo.',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //            'suffix' => '.html',
            'rules' => [
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',                 // only for integer id
                '<controller:\w+>/<action:\w+[-\w]+\w>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+[-\w]+\w>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>s' => '<controller>/index',
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
    ],
    'container' => [
        'definitions' => [
            // app\components\number\KyNumber::class => [
            //     'maskedInputOptions' => [
            //         // 'prefix' => 'Rp ',
            //         // 'alias' => 'numeric',
            //         'positionCaretOnClick' => 'none',
            //         'groupSeparator' => '.',
            //         'radixPoint' => ',',
            //         'allowMinus' => false,
            //         'unmaskAsNumber' => true, // untuk ambil unmasked value sebagai number,
            //     ],
            //     'displayOptions' => ['class' => 'form-control form-control-sm', 'autocomplete' => 'off'],
            //     'options' => [
            //         'type' => 'hidden',
            //         // 'label' => '<label>Saved Value: </label>',
            //         'label' => null,
            //         'class' => 'kv-saved',
            //         'readonly' => true,
            //         'tabindex' => 1000
            //     ],
            //     'saveInputContainer' => ['class' => 'kv-saved-cont'],
            // ],
            yii\grid\ActionColumn::class => [
                'class' => 'app\components\ActionColumn',
                'headerOptions' => [
                    'class' => 'bg-lightblue'
                ],
                'contentOptions' => [
                    'class' => 'action-column',
                    'style' => 'text-align: center;'
                ],
            ],
            kartik\grid\ActionColumn::class => [
                'class' => 'app\components\ActionColumn',
                'headerOptions' => [
                    'class' => 'bg-lightblue'
                ],
                'contentOptions' => [
                    'class' => 'action-column',
                    'style' => 'text-align: center;'
                ],
            ],

            yii\grid\DataColumn::class => [
                'filterInputOptions' => [
                    'class' => 'form-control form-control-sm',
                    'autocomplete' => 'off'
                ],
                'headerOptions' => [
                    // 'class' => 'bg-lightblue'
                ],
                'contentOptions' => [
                    // 'style' => 'white-space: nowrap;',
                    // 'class' => 'action-column',
                    'style' => 'overflow: hidden; text-overflow: ellipsis;',
                ]
            ],


        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

if (!YII_ENV_TEST) {
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [ // here
            'crud' => [ // generator name
                'class' => 'yii\gii\generators\crud\Generator', // generator class
                'templates' => [ // setting for our templates
                    'yii2-adminlte3' => '@vendor/hail812/yii2-adminlte3/src/gii/generators/crud/default' // template name => path to template
                ]
            ]
        ]
    ];
}

return $config;
