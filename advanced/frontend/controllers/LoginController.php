<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\pinglun;
use frontend\models\Admin;
use yii\data\Pagination;

/**
 * Site controller
 */
class LoginController extends Controller
{
    public function actionIndex()
    {

        if (Yii::$app->request->post()) {
            $model = new Admin();
            $post = Yii::$app->request->post('Admin');
            $model->username = $post['username'];
            $model->matt = $post['matt'];
            if ($model->save()) {
                $this->redirect(['login/show']);
            }
        } else {
            $model = new Admin();
            return $this->render('add', ['model' => $model]);
        }
    }

    public function actionShow(){
        $model=new Admin();
        $pagination=new pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$model->find()->count(),
        ]);
        $arr=$model->find()->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

        return $this->render('show',['arr'=>$arr,'pagination'=>$pagination]);

    }
    public function actionLogin(){
        $model = new Pinglun();
        return $this->render('login',['model'=>$model]);
    }

    public function actionLogindo(){
        $model = new Pinglun();

        $post = Yii::$app->request->post('Pinglun');
          $model->user=$post['user'];

        $model->user= $filterContent;
          $model->password=md5($post['password']);
        $res = $model->save();
        if($res){
            return $this->redirect(['login/show']);
        }else{
            echo "<script>alert('用户名或密码错误！')</script>";
            return $this->redirect(['login/show']);
        }

    }
    //数据删除
    public function actionDelete(){
        $id=Yii::$app->request->get('id');
        $model=new Admin();
        $res=$model->deleteAll('id=:id',[':id'=>$id]);
        if($res){
            return $this->redirect(['login/show']);
        }
    }

public function actionSave(){
        $model = new Admin();
        //载入的数据 进行验证
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($id = Yii::$app->request->get('id')){
                $model = $model->findOne($id);
                $post=Yii::$app->request->post('Admin');
                $model->username=$post['username'];
                $model->username=$post['matt'];
            }
            $res = $model->save();//
            if($res){
                return $this->redirect(['login/add']);
            }
        }else{
            if($id = Yii::$app->request->get('id')){
                $model = $model->findOne($id);
            }
            return $this->render('save',['model' => $model]);
        }
    }
    public function actionMing(){
        $model = new Pinglun();
        return $this->render('deng',['model'=>$model]);
    }
    public function actionDnglu(){
        $model = new Pinglun();
        $post = Yii::$app->request->post();
        $user = $post['user'];
        $password = $post['password'];
        $res = $model->find()->where(['user'=>"$user",'password'=>"$password"])->one();
        if($res){
            return $this->redirect(['login/deng']);
        }else{
            echo "<script>alert('用户名或密码错误！')</script>";
            return $this->redirect(['login/deng']);
        }
        //var_dump($post);
    }



}