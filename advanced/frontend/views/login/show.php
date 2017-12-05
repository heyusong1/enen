<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\bootstrap\ActiveForm;
use DfaFilter\SensitiveHelper;
use frontend\models\Pinglun;
$user = array(
    '拆迁'
);

?>
<center>
    <a href="<?=Url::toRoute(['login/ming'])?>">登录</a>
    <table bgcolor="1">
        <tr>
            <td>ID</td>
            <td>名称</td>
            <td>内容</td>
            <td>操作</td>
        </tr>
        <?php foreach ($arr as $k =>$v){ ?>
            <tr>
                <td><?= $v['id']?></td>
                <td>
                    <?php echo $filterContent = SensitiveHelper::init()->setTree($user)->replace($v['username'], '***');?>
                </td>
                <td>
                <?php echo $filterContent = SensitiveHelper::init()->setTree($user)->replace($v['matt'], '***');?>
                </td>
                <td>
                    <a href="<?=Url::toRoute(['login/delete','id'=>$v['id']])?>">delete</a>
                    <a href="<?=Url::toRoute(['login/save','id'=>$v['id']])?>">update</a>
                </td>
            </tr>
        <?php }?>
    </table>
    <?= LinkPager::widget(['pagination'=>$pagination])?>
</center>
