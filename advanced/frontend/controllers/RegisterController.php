<?php 
	namespace frontend\controllers;
	use Yii;
	use yii\web\Controller;
	use yii\db\connect;
	use yii\helpers\Url;
	class RegisterController extends Controller
	{
		public $enableCsrfValidation = false;
		public function actionIndex(){
			return $this->render('one');
		}
		public function actionOne_do(){
			$tel = $_POST['tel'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			if ($tel=='' || $password1=='' || $password2=='' || $password1!=$password2) {
				echo "<center>输入有误</br><a href=".Url::toRoute(['register/index']).">返回</a></center>";
			}
			
			$data = yii::$app->db->createCommand()->insert('user', [
			    'tel' => $tel,
			    'password' => $password1,
			])->execute();
			if ($data) {
				$res = yii::$app->db->createCommand("select * from user where tel = $tel")->queryOne();
				$id = $res['id'];
				return $this->render('two',['id'=>$id]);
			}
		}
		public function actionOne(){
			$id = $_GET['id'];
			$res = yii::$app->db->createCommand("select * from user where id = $id")->queryOne();
			return $this->render('one1',['res'=>$res]);
		}
		// public function actionTwo(){
		// 	$res = yii::$app->db->createCommand("select * from user where tel = $tel")->queryOne();
		// 	return $this->render('one1',['res'=>$res]);
		// }
		public function actionOne_save(){
			$id = $_POST['id'];
			$tel = $_POST['tel'];
			$password1 = $_POST['password1'];
			$password2 = $_POST['password2'];
			if ($tel=='' || $password1=='' || $password2=='' || $password1!=$password2) {
				echo "<center>输入有误</br><a href=".Url::toRoute(['register/index']).">返回</a></center>";
			}
			
			$data = yii::$app->db->createCommand("UPDATE user SET tel='$tel',password='$password1' WHERE id=$id")->execute();
			$res = yii::$app->db->createCommand("select * from user where tel = $tel")->queryOne();
			$id = $res['id'];
			return $this->render('two',['id'=>$id]);
		}
		public function actionTwo_do(){
			$name = $_POST['name'];
			$birthday = $_POST['birthday'];
			$addr = $_POST['addr'];
			$id = $_POST['id'];
			$data = yii::$app->db->createCommand("UPDATE user SET name='$name',birthday='$birthday',addr='$addr' WHERE id=$id")->execute();
			return $this->render('three',['id'=>$id]);
		}
		public function actionTwo(){
			$id = $_GET['id'];
			$res = yii::$app->db->createCommand("select * from user where id = $id")->queryOne();
			return $this->render('two1',['res'=>$res]);
		}
		public function actionTwo_save(){
			$name = $_POST['name'];
			$birthday = $_POST['birthday'];
			$addr = $_POST['addr'];
			$id = $_POST['addr'];
			$data = yii::$app->db->createCommand("UPDATE user SET name='$name',birthday='$birthday',addr='$addr' WHERE id=$id")->execute();
			$res = yii::$app->db->createCommand("select * from hobby")->queryall();
			return $this->render('three',['id'=>$id,'hobby'=>$hobby]);
		}
	}
 ?>