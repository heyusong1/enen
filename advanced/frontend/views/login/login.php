<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use frontend\models\Admin;
?>

<?php $form=ActiveForm::begin(['action'=>"?r=login/logindo",'method'=>'post']) ?>
<?=$form->field($model,'user')?>
<?=$form->field($model,'password')->passwordInput()?>
<?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php $form->end()?>

