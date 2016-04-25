<?php

use app\assets\AppAsset;
use Yii\base;
use app\models\OutputImages;

$this->title = 'UkranianLigue';
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

$path = Yii::$app->request->baseUrl;
$dir = $_SERVER['DOCUMENT_ROOT'] . $path . '/images/upl';
$dirLocal = $path . '/images/upl/';
$imageObject = new OutputImages();
$all_pictures = $imageObject->outDirFile($dir);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 image-center">
        <?php $this->beginContent('@app/views/layouts/footballAlert.php'); ?>
        <?php $this->endContent(); ?>
        <?php foreach ($all_pictures as $picture) { ?>
            <img class="image-wrap" src="<?= $dirLocal . $picture ?>"/>
        <?php } ?>
    </div>
</div>
