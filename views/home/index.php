<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use Yii\base;

AppAsset::register($this);

$this->title = 'SportPrediction';
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/homeNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 carousel-size">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <?php for ($i = 1; $i < count($all_pictures); $i++) { ?>
                    <li data-target="#carousel" data-slide-to="<?= $i ?>"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php echo Html::img($dirLocal . $all_pictures[0], ['class' => 'image-size']); ?>
                </div>
                <?php array_shift($all_pictures); ?>
                <?php foreach ($all_pictures as $picture) { ?>
                    <div class="item">
                        <?php echo Html::img($dirLocal . $picture, ['class' => 'image-size']); ?>
                    </div>
                <?php } ?>
            </div>
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
