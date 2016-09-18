<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;

//验证码
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class RegisterController extends Controller
{
	//登录页面
	public function index()
	{
		return view('admin.register');
	}
	
	//执行注册
	public function doregister(Request $request)
	{
		// 验证验证码
		// echo time();die;//1473585989
		// echo Session::get('code');die;
		// if($request->input('code') !== $code){
			// return back()->with('msg','验证码错误');
		// }
		
		//通过model类引入登录验证
		$user = new Users();
		$obj = $user->checkUser($request);
		if($obj){
			Session::set("adminuser",$obj);
			//session(['adminuser'=>$obj]); //将登录成功的信息放置到session中
			// var_dump(session('code'));die;
			//Session::set('admin',$obj);
			return view('admin.index');
			// return redirect('/admin/index');
		}else{
			return back()->with('msg','登录失败:帐号或密码错误!');
		}
	}
	
	//验证码
	public function captcha($tmp)
	{    
		$builder = new CaptchaBuilder;                            //生成验证码图片的Builder对象,配置相应属性
		$builder->build($width = 85, $height = 40, $font = null); // 设置图片宽度及字体
		$phrase = $builder->getPhrase();                          //获取验证码的内容
		// Session::flash('code', $phrase);                         // 通过静态方法使用flash
		// Session::keep(array('code', $phrase));
		// echo Session::get("code");die;
		Session::put('code', $phrase);
		header('Cache-Control: no-cache, must-revalidate');
		header('Content-Type: image/jpeg');
		$builder->output();
		exit();
	}
}
