<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use frontend\models\Admin;
?>
<?php $from=ActiveForm::begin(['action'=>'?r=exma/add'])?>
<?=$from->field($model,'username')?>
<?=$from->field($model,'password')?>
<?= Html::submitButton('Submit',['class'=>'btn bnt-primary'])?>
<?php $from->end()?>
