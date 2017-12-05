<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
class One extends Model
{
	public $tableName='one';
	public function getInfo($input){
     $data['matt']=$input['matt'];
     $data['open']=$input['open'];
     $data['addtime']=$input['addtime'];

     return DB::table($this->tableName)->insert($data);
	}

    //登录页面

}

