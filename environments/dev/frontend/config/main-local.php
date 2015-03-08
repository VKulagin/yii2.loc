<?php

$config = [
    'homeUrl' => '/',
    'components' => [
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'enableStrictParsing' => true,
            'rules' => [
                '' => 'site/index',
                '<action>' => 'site/<action>',
                // ...
            ],
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
