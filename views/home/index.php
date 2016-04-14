<?php
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="container" align="center">
        <?php
        echo Carousel::widget ( [
            'items' => [
                [
                    'content' => '<img src="../web/css/images/1.jpg"/>',
                    'caption' => '<h2>Football</h2><p>First</p>',
                    'options' => [ ]
                ],
                [
                    'content' => '<img  src="../web/css/images/2.jpg"/>',
                    'caption' => '<h2>Tennis</h2><p>Second</p>',
                    'options' => []
                ],
                [
                    'content' => '<img  src="../web/css/images/3.jpg"/>',
                    'caption' => '<h2>Basketball</h2><p>Third</p>',
                    'options' => []
                ]
            ],
            'options' => [
                'style' => 'width:500px;', // Задаем ширину контейнера
            ]
        ]);
        ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>