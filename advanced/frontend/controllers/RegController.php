<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Regi;
use frontend\models\Regn;
use yii\data\Pagination;
use yii\db\Query;

/**
 * Site controller
 */
class RegController extends Controller
{

    public $enableCsrfValidation = false;

    public function actionRegister(){
    return $this->render('register');
}
    public function actionRegister_a(){
        if(Yii::$app->request->post()){
            $model=new Regi();
            $data=Yii::$app->request->post();
            $model->username=$data['username'];
            $model->password=$data['password'];
            $model->passworda=$data['passworda'];
            if($model->save()){
                return $this->render('register_2');
            }
            else
            {
                return $this->redirect('reg/register_a');
            }
        }
    }
    public function actionRegister_b(){
        return $this->render('register_2');
//        if(Yii::$app->request->post()){
//            $model=new Regn();
//            $data=Yii::$app->request->post();
//            $model->nicheng=$data['nicheng'];
//            $model->shengri=$data['shengri'];
//            $model->gongzuo=$data['gongzuo'];
//            if($model->save()){
//                return $this->render('register_3');
//            }
//            else
//            {
//                return $this->redirect('reg/register_b');
//            }
//        }
    }
    public function actionRegister_c(){
        return $this->render('register_3');
    }
    public function actionRegister_d(){
        echo "<script>alert('添加完成')</script>";
    }
}
