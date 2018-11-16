<?php

return [
    'id' => 'school-web',
    'basePath' => realpath(__DIR__ . '/../'),
    //'sourceLanguage' => 'tr',
    'language' => 'en',
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'code'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];