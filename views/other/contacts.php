<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:42
 */

use app\assets\AppAsset;
use yii\bootstrap\Nav;

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = ['label' => 'Other', 'url' => ['other/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
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
                'options' => ['class' => ' nav nav-pills nav-stacked'],
            ]);
            ?>
        </div>
    </div>
</div>
