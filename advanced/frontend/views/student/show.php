<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use DfaFilter\SensitiveHelper;
$username = array(
    '察象蚂',
    '拆迁灭',
    '车牌隐',
    '成人电',
    '成人卡通',
);
?>
<center>
    <table bgcolor="1">
<tr>
 <td>ID</td>
 <td>名称</td>
 <td>性别</td>
 <td>年龄</td>
 <td>爱好</td>    
 <td>操作</td>
</tr>
 <?php foreach ($arr as $k =>$v){ ?>
    <tr>
        <td><?= $v['id']?></td>
        <td><?= $v['username']?></td>
        <td><?= $v['sex']?></td>
        <td><?= $v['age']?></td>
        <td><?= $v['hobby']?></td>
        <td>
        	<a href="<?=Url::toRoute(['student/delete','id'=>$v['id']])?>">delete</a>
        	<a href="<?=Url::toRoute(['student/save','id'=>$v['id']])?>">update</a>
        </td>
    </tr>
    <?php }?>
</table>
    <?= LinkPager::widget(['pagination'=>$pagination])?>
</center>
