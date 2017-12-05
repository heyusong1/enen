<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Demo;
use yii\data\Pagination;
use yii\db\Query;

/**
 * Site controller
 */
class DemoController extends Controller
{

    public $enableCsrfValidation = false;
//连接添加注册页面
    public function actionAdd()
    {
        return $this->render('add');
    }

    //添加入库
    public function actionAdd_do()
    {
        if (Yii::$app->request->post()) {
            $model = new Demo();
            $date = Yii::$app->request->post();
            $model->username = $date['username'];
            $model->option = $date['option'];
            $model->typep = $date['typep'];
            $model->verify = $date['verify'];
            $model->must = $date['must'];
            $model->rule = $date['rule'];
            $model->lenght1 = $date['lenght1'];
            $model->lenght2 = $date['lenght2'];
            if ($model->save()) {
                $this->redirect(['demo/index']);
            } else {
                $model = new Demo();
                return $this->render('add', ['model' => $model]);
            }
        }
    }
    public function actionIndex(){
        $model=new Demo();
        $pagination=new pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$model->find()->count(),
        ]);
        $arr=$model->find()->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

        return $this->render('index',['arr'=>$arr,'pagination'=>$pagination]);
    }
    public function actionDel(){
        $id=Yii::$app->request->get('id');
        $model=new Demo();
        $res=$model->deleteAll('id=:id',[':id'=>$id]);
        if($res){
            return $this->redirect(['demo/index']);
        }
    }
 public function actionUpd(){
        $id=$_GET['id'];
        $data=new Query();
        $list=$data->select('*')->from('demo')->where("id=$id")->one();
        return $this->render('save',['arr'=>$list]);
 }
    public function actionSave(){
        $data = Yii::$app->request->post();
                $mo->username = $data['username'];
                $mo->option = $data['option'];
                $mo->typep = $data['typep'];
                $mo->must = $data['must'];
                $mo->rule = $data['rule'];
                $mo->lenght1 = $data['length1'];
                $mo->lenght2 = $data['length2'];
        $res = Yii::$app->db->createCommand()->update('demo',$mo, 'id=:id', array(':id' => $data['id']))->execute();
        if ($res) {
            return $this->redirect(['demo/index']);
        }
    }
}