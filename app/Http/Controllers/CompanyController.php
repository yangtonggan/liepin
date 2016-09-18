<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class CompanyController extends Controller
{
	//HR主页
    public function index()
	{
		return view('home.company.index');
	}
	
	//HR工作台
    public function work()
	{
		return view('home.company.work');
	}
	
	//HR发布职位
    public function position()
	{
		return view('home.company.position');
	}
	
	//添加学生信息表单
    public function create()
	{
		return view('index.create');
	}
	
	//保存新添加的学生信息
	public function store(Request $request)
	{
		// dd($request);
		// $input = $request->all();
		// unset($input['_token']); //防止input非法
		
		$data = $request->only('name','sex','age','classid');
	   
		$id = \DB::table('stu')->insertGetId($data);
		return view('index.info',['info'=>"添加成功！id号:{$id}"]);
	}
	
	//显示某个学生信息
	public function show($id)
	{
		$info = \DB::table('stu')->where('id',$id)->first();
		return view('index.show',['info'=>$info]);
	}
	
	//显示某个学生信息的表单
	public function edit($id)
	{
		$info = \DB::table('stu')->where('id',$id)->first();
		return view('index.edit',['info'=>$info]);
	}
	
	//更新
	public function update(Request $request,$id)
	{
		$data = $request->only('name','sex','age','classid');
        $info = \DB::table('stu')->where('id',$id)->update($data);
		if($info>0){
			return view('index.info',['info'=>'修改成功']);
		}else{
			return view('index.info',['info'=>'修改失败']);
		}
	}
	
	//删除
	public function destroy($id)
	{
		$info = \DB::table('stu')->where('id',$id)->delete();
		if($info>0){
			return view('index.info',['info'=>'删除成功']);
		}else{
			return view('index.info',['info'=>'删除失败']);
		}
		// $this->index();
	}
}
