
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

use frontend\models\Admin;
// 获取感词库索引数组

?>

<?php $form=ActiveForm::begin(['action'=>'?r=login/index'])?>
<?=$form->field($model,'username')?>
<?=$form->field($model,'matt')?>
<?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php $form->end()?>

