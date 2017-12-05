<?php
namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use frontend\models\Zhuce;
use frontend\models\Exma;

/**
 * Site controller
 */
class ExmaController extends Controller
{
    public function actionIndex()
    {
   if(Yii::$app->request->post()){
       $model=new Exma();
       $data=Yii::$app->request->post('Exma');
       $model->username=$data['username'];
       $model->age=$data['age'];
       $model->sex=$data['sex'];
       $model->hobby=implode(',',$data['hobby']);
       if($model->save()){
           $this->redirect(['exma/index']);
       }
   }else
   {
       $model=new Exma();
       return $this->render('add',['model'=>$model]);
   }

    }
    public function actionAddd(){
        $model= new Zhuce();
        return $this->render('addd',['model'=>$model]);
    }
    public function actionAdd(){
    $model=new Zhuce();
    $post=Yii::$app->request->post('Zhuce');
    $model->username=$post['username'];
    $model->username=$filterContent;
    $model->password=md5($post['password']);
    $res=$model->save();
    if($res){
  return $this->redirect('exma/show');
    }else
    {
     return $this->redirect(['exma/show']);
    }
    }
}