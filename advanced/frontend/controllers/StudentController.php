<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Student;
use yii\data\Pagination;
use DfaFilter\SensitiveHelper;
class StudentController extends Controller {
//添加入库
    public function actionIndex()
    {
        if (Yii::$app->request->post()) {
            $model = new Student();
            $date = Yii::$app->request->post('Student');
            $model->username = $date['username'];
            $model->sex = $date['sex'];
            $model->age=$date['age'];
            $model->hobby=implode(',',$date['hobby']);
            if($model->save()){
                $this->redirect(['student/show']);
            }

        } else {
            $model = new Student();
            return $this->render('index', ['model' => $model]);
        }
    }



//展示页面
    public function actionShow(){
        $model=new Student();
        $pagination=new pagination([
           'defaultPageSize'=>5,
           'totalCount'=>$model->find()->count(),
        ]);
        $arr=$model->find()->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();

        return $this->render('show',['arr'=>$arr,'pagination'=>$pagination]);

    }


//页面添加
    public function actionupdate(){
        $model= new Student();
        if($model->load(Yii::$app->request->post())&& $model->validate()){
            print_r(Yii::$app->request->post());die;
        }else
        {
            return $this->render('add',['model'=>$model]);
        }
    }


//数据删除
    public function actionDelete(){
        $id=Yii::$app->request->get('id');
        $model=new Student();
        $res=$model->deleteAll('id=:id',[':id'=>$id]);
        if($res){
            return $this->redirect(['student/show']);
        }
    }


//数据修改
     public function actionSave(){
        $model = new Student();

        //载入的数据 进行验证
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($id = Yii::$app->request->get('id')){
                $model = $model->findOne($id);
                $post=Yii::$app->request->post('Student');
                $model->sex=$post['sex'];
                $model->age=$post['age'];
                $model->hobby=implode(',',$post['hobby']);
            }else{
                $model->hobby = implode(',',$model->hobby);//
            }
            $res = $model->save();//
            if($res){
                return $this->redirect(['student/index']);
            }
        }else{
            if($id = Yii::$app->request->get('id')){
                $model = $model->findOne($id);
                $model->hobby = explode(',',$model->hobby);//让之前的爱好魔人选中
            }
            return $this->render('save',['model' => $model]);
        }
}
}
?>