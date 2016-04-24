<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.04.2016
 * Time: 1:49
 */

use yii\bootstrap\Alert;

?>
<?php $this->beginPage() ?>
    <?php
        echo Alert::widget([
            'options' => [
            'class' => 'alert-info'
         ],
            'body' => '<b>Click</b> on the <b>logo</b> for more information about the team &darr;'
    ]); ?>

<?php $this->endPage() ?>
