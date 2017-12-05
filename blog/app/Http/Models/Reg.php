<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reg extends Model
{
    protected $tableName = 'reg';
    public function getInfo($input){
        //添加数据
        $data['username']=$input['username'];
        $data['sex']=$input['sex'];
        $data['hobby']=implode(',',$input['hobby']);
        $data['age']=$input['age'];
        return DB::table($this->tableName)->insert($data);
    }
    public function showInfo(){
        //查询所有数据
        return DB::table($this->tableName)->paginate(2);
    }

    public function delRow($id){
        //删除
        return DB::table($this->tableName)->where(['id'=>$id])->delete();
    }

    public function getRow($id){
        //查询一条数据
        $row=DB::table($this->tableName)->where(['id'=>$id])->first();
        $row->hobby=explode(',', $row->hobby);
        return $row;
    }

    public function saveRow($post){
        //修改数据
        $id=$post['id'];
        $data['username']=$post['username'];
        $data['sex']=$post['sex'];
        $data['hobby']=implode(',',$post['hobby']);
        $data['age']=$post['age'];
        return DB::table($this->tableName)->where(['id'=>$id])->update($data);
    }
}
?>