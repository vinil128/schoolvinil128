<?php

use yii\helpers\Html;

$this->beginPage(); ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Video School</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody(); ?>
    <h1>Video School</h1>
    <div class="container" style="margin-top: 80px">
        <?= $content ?>
    </div>
    <br/>
    <?= (Yii::$app->language == 'en') ? 'English' :
        Html::a('English', '/en') ?> |
    <?= (Yii::$app->language == 'ru') ? 'Русский' :
        Html::a('Русский', '/ru') ?>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>