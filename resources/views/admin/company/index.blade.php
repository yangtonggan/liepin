@extends('admin.base.base')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	企业管理
	<small>企业的增/删/改/查/搜索/分页</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
	<li><a href="#">企业管理</a></li>
	<li class="active">企业列表</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-md-12">
	  <div class="box">
		<div class="box-header with-border">
		
		 <h3 class="box-title">{{ isset($msg)? $msg : "Bordered Table" }}</h3>		
		 
		</div><!-- /.box-header -->
		<div class="box-body">
		  <table class="table table-hover table-bordered">
			<tr class="info">
			  <th style="width:15px">#</th>
			  <th>Logo</th>
			  <th>公司名称</th>
			  <th>公司简称</th>
			  <th>电话</th>
			  <th>地址</th>
			  <th>类型</th>
			  <th>主页</th>
			  <th>邮箱</th>
			  <th>注册时间</th>
			  <th>操作</th>
			</tr>
			@forelse ($list as $val)
			<tr>
			  <td>{{ $val->c_id }}</td>
			  <td><img src='{{ asset("/uploads/logo/$val->c_logo") }}' width='50' height='50'></td>
			  <td>{{ $val->c_name }}</td>
			  <td>{{ $val->c_ename }}</td>
			  <td>{{ $val->c_phone }}</td>
			  <td>{{ $val->c_address }}</td>
			  <td>{{ $val->c_type }}</td>
			  <td>{{ $val->c_site }}</td>
			  <td>{{ $val->c_email }}</td>
			  <td>{{ date('Y-m-d H:i:s',$val->c_time) }}</td>
			  <td>
				<a href='{{ asset("admin/company/$val->c_id/edit") }}'><button class="btn btn-primary btn-xs">编辑</button></a> &nbsp; 
				<a href="javascript:dodel({{ $val->c_id }})"><button class="btn btn-danger btn-xs">删除</button></a> &nbsp; 
				<a href='{{ asset("admin/company/$val->c_id") }}'><button class="btn btn-success btn-xs">详情</button></a>
			  </td>
			</tr>
			@empty
			<tr>
				<td colspan='11'>没有数据</td>
			</tr>
			@endforelse
		  </table>
		</div><!-- /.box-body -->
		
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				<!-- 分页start,加了where条件的分页,搜索条件持久化 -->
				<li>{!! $list->appends($where)->render() !!}</li>
				<!-- 分页end -->
			</ul>
		</div>
	  </div><!-- /.box -->

  </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
<form action="" method="post" id="delform" style="display:none;">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	<input type="hidden" name="_method" value="delete"/>
</form>
<script>
	function dodel(id){
		if(confirm('确定要删除吗?')){
			var form = document.getElementById('delform');
			form.action = "{{ asset('/admin/company') }}/"+id;
			form.submit();
		}
	}
</script>
@endsection