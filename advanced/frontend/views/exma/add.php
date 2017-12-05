<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<?php $form=ActiveForm::begin(['action'=>'?r=exma/index'])?>
<?=$form->field($model,'username')?>
<?=$form ->field($model,'age')->dropDownList([11,12,13,14,15,16,17,18,19,20])?>
<?=$form ->field($model,'sex')->radioList(['0'=>'男','1'=>'女'])?>
<?=$form->field($model,'hobby')->checkboxList(['篮球'=>'篮球','羽毛球'=>'羽毛球','乒乓球'=>'乒乓球'])?>
<?= Html::submitButton('Submit',['class'=>'btn btn->primary'])?>
<?php  $form->end()?>
