<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:38
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

$this->title = 'Other';
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
                <?php
                echo Nav::widget([
                    'items' => [
                        [
                            'label' => 'Contacts',
                            'url' => ['other/contacts'],
                            'visible' => Yii::$app->user->isGuest
                        ],
                        [
                            'label' => 'Experts',
                            'url' => ['other/experts'],
                            'visible' => Yii::$app->user->isGuest
                        ],
                        [
                            'label' => 'Information',
                            'url' => ['other/information'],
                            'visible' => Yii::$app->user->isGuest
                        ],
                        [
                            'label' => 'Statistics',
                            'url' => ['other/statistics'],
                            'visible' => Yii::$app->user->isGuest
                        ],

                    ],
                    'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
                ]);
                ?>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>