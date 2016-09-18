<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;

class CompanyController extends Controller
{
	//进入后台主页
	public function index(Request $request)
	{
		$table = \DB::table('lp_company');
		//判断并封装搜索条件
        $where = [];
        if($request->has('c_name')){
            $cname = $request->input('c_name');
            $table->where('c_name','like',"%{$c_name}%");
            $where['c_name'] = $c_name;
        }
        // if($request->has('sex')){
            // $sex = $request->input('sex');
            // $table->where('sex','=',$sex);
            // $where['sex'] = $sex;
        // }
		
        $list = $table->paginate(2);
		return view('admin.company.index',['list'=>$list,'where'=>$where]);
	}
	
	//显示新增
    public function create()
	{
		return view('admin.company.create');
	}
	
	//执行新增
	public function store(Request $request)
	{
		$data = $request->only('c_name','c_ename','c_phone','c_email','c_add','c_site','c_label','c_size','c_desc');
		
		//上传
		if($request->hasFile("c_logo")){
            //获取上传信息
            $file = $request->file("c_logo");
            //确认上传的文件是否成功
            if($file->isValid()){
                $picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
				$filename = time().rand(1000,9999).".".$ext;
                $file->move("./uploads/logo/",$filename);
				$data['c_logo'] = $filename;
            }
        }
		
		$data['c_uid'] = session('adminuser')->uid;
		$data['c_time'] = time();
	   
	    //添加学生信息
		$table = \DB::table('lp_company');
		$id = $table->insertGetId($data);
		
		//返回公司列表主页面,查询公司主页面所有公司信息
		//判断并封装搜索条件
        $where = [];
        if($request->has('c_name')){
            $c_name = $request->input('c_name');
            $table->where('c_name','like',"%{$c_name}%");
            $where['c_name'] = $c_name;
        }
        // if($request->has('sex')){
            // $sex = $request->input('sex');
            // $table->where('sex','=',$sex);
            // $where['sex'] = $sex;
        // }
		
        $list = $table->paginate(2);
		return view('admin.company.index',['list'=>$list,'where'=>$where,'msg'=>"添加成功！id号:{$id}"]);
	}
	
	//显示单条详情
	public function show($id)
	{
		$info = \DB::table('lp_company')->where('c_id',$id)->first();
		return view('admin.company.show',['info'=>$info]);
	}

	//显示编辑
	public function edit($id)
	{
		$info = \DB::table('lp_company')->where('c_id',$id)->first();
		return view('admin.company.edit',['info'=>$info]);
	}
	
	//执行编辑
	public function update(Request $request,$id)
	{
		$data = $request->only('c_name','c_ename','c_phone','c_email','c_address','c_site','c_label','c_size','c_desc');
		$table = \DB::table('lp_company');
		
		//上传
		if($request->hasFile("c_logo")){
            //获取上传信息
            $file = $request->file("c_logo");
            //确认上传的文件是否成功
            if($file->isValid()){
                $picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
				$filename = time().rand(1000,9999).".".$ext;
                $file->move("./uploads/logo/",$filename);
				$data['c_logo'] = $filename;
				
				//删除文件夹中的原logo图片
				
				$oldfilename = $table->where('c_id',$id)->first()->c_logo;
				if(file_exists('./uploads/logo/'.$oldfilename)){
					unlink('./uploads/logo/'.$oldfilename);
				}
            }
        }
		
		$info = $table->where('c_id',$id)->update($data);
		$msg = $info>0 ? "修改成功" : "修改失败";
		
		//判断并封装搜索条件
        $where = [];
        if($request->has('c_name1')){
            $cname = $request->input('c_name');
            $table->where('c_name','like',"%{$c_name}%");
            $where['c_name'] = $c_name;
        }
        // if($request->has('sex')){
            // $sex = $request->input('sex');
            // $table->where('sex','=',$sex);
            // $where['sex'] = $sex;
        // }
		
        $list = $table->paginate(2);
		return view('admin.company.index',['list'=>$list,'where'=>$where,'msg'=>$msg]);
	}
	
	//删除单条
	public function destroy($id,Request $request)
	{
		$table = \DB::table('lp_company');
		$info = $table->where('c_id',$id)->delete();
		$msg = $info>0 ? "删除成功" : "删除失败";
		
		//判断并封装搜索条件
		$where = [];
		if($request->has('c_name')){
			$cname = $request->input('c_name');
			$table->where('c_name','like',"%{$c_name}%");
			$where['c_name'] = $c_name;
		}
		// if($request->has('sex')){
			// $sex = $request->input('sex');
			// $table->where('sex','=',$sex);
			// $where['sex'] = $sex;
		// }
	
		$list = $table->paginate(2);
		return view('admin.company.index',['list'=>$list,'where'=>$where,'msg'=>$msg]);
	}
}
