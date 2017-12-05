<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

?>

<?php $form=ActiveForm::begin(['action'=>'?r=student/index'])?>
<?=$form->field($model,'username')?>
<?= $form->field($model,'sex')->radioList(['0'=>'女','1'=>'男'])?>
<?=$form->field($model,'age')->dropDownList([12,13,14,15,16,17,18])?>
<?=$form->field($model,'hobby')->checkboxList(['篮球'=>'篮球','羽毛球'=>'羽毛球','乒乓球'=>'乒乓球'])?>
<?= Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php $form->end()?>