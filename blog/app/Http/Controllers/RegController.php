<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
// 引入model
use App\Http\Models\Reg;
class RegController extends Controller{
    public $reg;
    public function __construct(){
        $this->reg=new Reg();// 实例化model
    }

    public function index(){
        return view('reg/index');
    }

    public function add(){
        $input = Input::all();
        $res=$this->reg->getInfo($input);
        if($res){
            echo '<script>alert("添加成功");location.href="'.'show'.'";</script>';
        }
    }

    public function show(){
        $data=$this->reg->showInfo();
        return view('reg/show',['data'=>$data]);
    }


    public function deletes(){
        $id = Input::get('id');
        $res=$this->reg->delRow($id);
        if($res){
            echo '<script>alert("删除成功");location.href="'.'show'.'";</script>';
        }
    }

    public function updates(){
        $id = Input::get('id');
        $row=$this->reg->getRow($id);
        return view('reg/save',['row'=>$row]);
    }

    public function upd(){
        $post = Input::all();
        $res=$this->reg->saveRow($post);
        if($res){
            echo '<script>alert("修改成功");location.href="'.'show'.'";</script>';
        }
    }

}
?>