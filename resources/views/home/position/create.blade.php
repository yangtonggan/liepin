@extends('home.company.base')

@section('content')
<div class="panel panel-default">
   <div class="panel-heading">
      <b>职位发布</b> 您可同时运作 0 个职位，当前还可以发布 0 个职位，职位有效期 0 天
   </div>
   <div class="panel-body">
		<form class="form-horizontal" role="form">
			<header class="panel-heading">
				<div style="text-indent:60px;">
					<span style="color:#fff;font-size:25px;background:url({{ asset('images/icon_steps_bg_10513d51.png') }})  no-repeat 0px 0px;">&nbsp;1&nbsp;&nbsp;</span>
					<span style='color:93BDE0;font-size:18px;'>职位基本信息</span>
				</div>
			</header>
			<div class="col-md-offset-1 col-md-10">
				<!-- 1 职位基本信息 -->
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>职位名称:
					</label>
					<div class="col-md-5">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="如:人力资源总监">
					</div>
					<div class="col-md-5">
						<label class="checkbox-inline" style='margin-left:-20px;'>
							注：职位发布后职位名称不可以修改
						</label>
					</div>
				</div>
				<div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>工作地址:
					</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="inputPassword3" placeholder="上海">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
					<div class="col-md-5">
					  <input type="text" class="form-control" placeholder="填写街道,楼宇详细地址">
					</div>
				</div>
				<div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>职能分类:
					</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="inputPassword3" placeholder="所属行业">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
					<div class="col-md-5">
						<label class="checkbox-inline text-danger" style='margin-left:-20px;'>
							<span class='glyphicon glyphicon-info-sign'></span> 请填写职能分类
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>所属部门:
					</label>
					<div class="col-md-5">
					  <input type="text" class="form-control" id="inputPassword3" placeholder="联系人">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>职位月薪:
					</label>
					<div class="col-md-1">
						<input type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label class="checkbox-inline" style='margin-left:-40px;'>
							千元至
						</label>
					</div>
					<div class="col-md-1" style='margin-left:-115px;'>
					  <input type="text" class="form-control">
					</div>
					<div class="col-md-2">
						<label class="checkbox-inline" style='margin-left:-80px;'>
							千元
						</label>
					</div>
					<div class="col-md-4">
						<label class="checkbox-inline" style='margin-left:-120px;'>
							<input type="checkbox"> 显示为面议
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>发放月数:
					</label>
					<div class="col-md-1">
						<input type="text" class="form-control"placeholder="12">
					</div>
					<div class="col-md-4">
						<label class="checkbox-inline" style='margin-left:-40px;'>个月
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>职位描述:
					</label>
					<div class="col-md-8">
						<textarea id='poseditor' cols="20" rows="2" class="ckeditor"></textarea>
						<script src="{{asset('admins/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
						<script type="text/javascript">
							//处理编辑器
							$(function () {
								var config = new Object();
								//config.image_previewText="";
								config.filebrowserImageUploadUrl="{{ asset('uploads/position') }}?_token={{csrf_token()}}";
								CKEDITOR.replace("poseditor",config);
							});
						</script>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>职位亮点:
					</label>
					<div class="col-md-5">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="点击增加亮点">
					</div>
					<div class="col-md-5">
						<label class="checkbox-inline" style='margin-left:-40px;'>
							注:增加职位亮点可以吸引求职者快速应聘职位
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;汇报对象:
					</label>
					<div class="col-md-2">
					  <input type="text" class="form-control" id="inputEmail3">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;下属人数:
					</label>
					<div class="col-md-2">
					  <input type="text" class="form-control" id="inputEmail3">
					</div>
				</div>
			<hr>
			</div>
			<!-- 2 职位要求 -->
			<header class="panel-heading">
				<div style="text-indent:60px;">
					<span style="color:#fff;font-size:25px;background:url({{ asset('images/icon_steps_bg_10513d51.png') }})  no-repeat 0px 0px;">&nbsp;2&nbsp;&nbsp;</span>
					<span style='color:93BDE0;font-size:18px;'>职位要求</span>
				</div>
			</header>
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;基本要求:
					</label>
					<div class="col-md-10">
						<label class='checkbox-inline'>
							<input type="checkbox">只允许完全符合以下条件人选投递
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;工作年限:
					</label>
					<div class="col-md-2">
					  <input type="text" class="form-control">
					</div>
					<div class="col-md-8"><label class="checkbox-inline" style='margin-left:-40px;'>年以上</label></div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;语言要求:
					</label>
					<div class="col-md-10">
						<label class="checkbox-inline font-size">
							<input type="checkbox" id="goods_server_name" name="goods_server_name[]" value="英语">英语
						</label>
						<label class="checkbox-inline font-size">
							<input type="checkbox" id="goods_server_name" name="goods_server_name[]" value="日语">日语
						</label>
						<label class="checkbox-inline font-size">
							<input type="checkbox" id="goods_server_name" name="goods_server_name[]" value="法语">法语
						</label>
						<label class="checkbox-inline font-size">
							<input type="checkbox" id="goods_server_name" name="goods_server_name[]" value="普通话">普通话
						</label>
						<label class="checkbox-inline font-size">
							<input type="checkbox" id="goods_server_name" name="goods_server_name[]" value="其他">其他
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						&nbsp;专业要求:
					</label>
					<div class="col-md-2">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="不限">
					</div>
				</div>
				<div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-2 control-label">&nbsp;期望行业:</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="inputPassword3" placeholder="请选择行业">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">&nbsp;学历要求:</label>
					<div class="col-md-2">
						<select class="form-control" name='xieli'>
						  <option value=''>不限</option>
						  <option value='1'>博士后</option>
						  <option value='0'>博士</option>
						  <option value='0'>MBA/EMBA</option>
						  <option value='0'>硕士</option>
						  <option value='0'>本科</option>
						  <option value='0'>大专</option>
						  <option value='0'>中专</option>
						  <option value='0'>中技</option>
						  <option value='0'>高中</option>
						  <option value='0'>初中</option>
						</select>
					</div>
					<div class="col-md-2"><label class="checkbox-inline" style='margin-left:-40px;'>及以上</label></div>
					<div class="col-md-6">
						<label class="checkbox-inline" style='margin-left:-120px;'>是否全日制统招:
							<input type="radio" name="tong" id="optionsRadios3" value="1" checked>是
						</label>
						<label class="checkbox-inline">
							<input type="radio" name="tong" id="optionsRadios4" value="2" checked>否
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">&nbsp;年龄要求:</label>
					<div class="col-md-2">
						<select class="form-control" name='xieli'>
						  <option value=''>--请选择--</option>
						  <option value='1'>20</option>
						  <option value='0'>25</option>
						  <option value='0'>30</option>
						  <option value='0'>35</option>
						  <option value='0'>40</option>
						  <option value='0'>45</option>
						  <option value='0'>50</option>
						  <option value='0'>55</option>
						  <option value='0'>60</option>
						  <option value='0'>65</option>
						</select>
					</div>
					<div class="col-md-1"><label class="checkbox-inline" style='margin-left:-40px;'>至</label></div>
					<div class="col-md-2">
						<select class="form-control" name='xieli' style='margin-left:-70px;'>
						  <option value=''>--请选择--</option>
						  <option value='1'>20</option>
						  <option value='0'>25</option>
						  <option value='0'>30</option>
						  <option value='0'>35</option>
						  <option value='0'>40</option>
						  <option value='0'>45</option>
						  <option value='0'>50</option>
						  <option value='0'>55</option>
						  <option value='0'>60</option>
						  <option value='0'>65</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-md-2 control-label">&nbsp;性别要求:</label>
					<div class="col-md-3" style='margin-left:-20px;'>
						<label class="checkbox-inline">
							<input type="radio" name="sex" id="optionsRadios3" value="" checked>不限&nbsp;&nbsp;
							<input type="radio" name="sex" id="optionsRadios4" value="m">男&nbsp;&nbsp;
							<input type="radio" name="sex" id="optionsRadios4" value="w">女
						</label>
					</div>
					<div class="col-md-7">
						<label class="checkbox-inline text-danger" style='margin-left:-70px;'>注：该条件不公开展示，但会根据要求为您推荐或筛选简历</lable>
					</div>
				</div>
				<hr>
			</div>
			<!-- 3 其它信息 -->
			<header class="panel-heading">
				<div style="text-indent:60px;">
					<span style="color:#fff;font-size:25px;background:url({{ asset('images/icon_steps_bg_10513d51.png') }})  no-repeat 0px 0px;">&nbsp;3&nbsp;&nbsp;</span>
					<span style='color:93BDE0;font-size:18px;'>其他信息</span>
				</div>
			</header>
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-2 control-label">&nbsp;收信地址：</label>
					<div class="col-md-5">
						<input type="email" class="form-control" id="inputPassword3" placeholder="收简历的地址">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
				</div>
				<div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-2 control-label">&nbsp;自动回复：</label>
					<div class="col-md-10">
						<label class="checkbox-inline" style='margin-left:-20px;'>
							<input type="radio" name="reply" id="optionsRadios3" value="w" checked>是&nbsp;&nbsp;
							<input type="radio" name="reply" id="optionsRadios4" value="m">否
						 </label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<label class="checkbox-inline">
							<input type="checkbox"> 发布为保密职位（保密职位不会公开，仅对您的招聘服务顾问开放，招聘顾问会帮您推荐适合人选！）
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-md-2 control-label">
						<span style='color:red;'>* </span>反馈时长:
					</label>
					<div class="col-md-2">
						<input type="text" class="form-control" id="inputEmail3" placeholder="请填1-5的数字">
					</div>
					<div class="col-md-6">
						<label class="checkbox-inline" style='margin-left:-40px;'>
							个工作日 （请填写您一般给应聘人选反馈结果需要的时间）
						</label>
					</div>
				</div>
				<div class="form-group" style='margin:50px 0 30px -10px;'>
					<div class="col-md-offset-2 col-md-2">
						<button type="submit" class="btn btn-primary btn-lg">发布职位</button>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary btn-lg">保存为草稿</button>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-primary btn-lg">保存为模板</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection