<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use Yii\base;

$this->title = 'EURO 2016';
$this->params['breadcrumbs'][] = $this->title;

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

    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
                <?php $this->beginContent('@app/views/layouts/homeNavbar.php'); ?>
                <?php $this->endContent(); ?>
            </div>

        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>