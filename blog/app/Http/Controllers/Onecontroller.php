<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades
\Redis;
// 引入model
use App\Http\Models\One;
class OneController extends Controller{
    public $reg;
    public function __construct(){
    	$this->reg=new One; 
    }
    public function index(){
    	return view('one/index');
    }
    public function add(){
    	$input=Input::all();
        var_dump($input);die;
    	$res=$this->reg->getInfo($input);
        Redis::lpush('hys',serialize($input));
        
        if($res){
    		echo '<script>alert("记录成功");location.href="'.'show'.'"</script>';
    	}
    }
    public function redis(){

    }
    public function show(){
        $data=$this->reg->showInfo();
        return view('one/show',['data'=>$data]);
    }
}
?>