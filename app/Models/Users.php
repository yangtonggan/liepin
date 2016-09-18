<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Users extends Model
{
	//定义当前模型关联的表名
	protected $table = 'users';
	
	//自定义一个登录验证方法
	public function checkUser(Request $request)
	{
		//根据帐号获取用户信息
		$email = $request->input('email');
		$password = $request->input('password');
		$obj = $this->where('email', $email)->first();
		if($obj){
			//验证密码
			// echo $obj->password.'<br/>';
			// echo md5($request->input('password'));exit;
			if($obj->password == md5($request->input('password'))){
				return $obj;
			}
		}
		
		return null;
	}
	
}
