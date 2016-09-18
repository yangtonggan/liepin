@extends('home.company.base')

@section('content')
<div class="row">
    <div class="col-md-9" style='background-color:#f1f1f1;'>
        <!-- tablist start -->
		<div class="m_tablist">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home"  role="tab" data-toggle="tab">新应聘简历</a></li>
				<li role="presentation"><a href="#profile"  role="tab" data-toggle="tab">新推荐简历</a></li>
				<li role="presentation"><a href="#messages" role="tab" data-toggle="tab">意向沟通</a></li>
				<li role="presentation"><a href="#settings" role="tab" data-toggle="tab">面试快</a></li>
			</ul>

			<!-- 添加下面的选择项 -->
			<div class="tab-content left">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">新应聘简历</h3>		
						</div><!-- /.box-header -->
						<div class="box-body">
							<table class="table table-border table-striped table-hover table-bordered" style='max-width:100%'>
								<tr class='info'>
								  <th style="width:15px">#</th>
								  <th>应聘职位</th>
								  <th>学历</th>
								  <th>期望薪资</th>
								  <th>性别</th>
								  <th>工作年限</th>
								  <th>投递时间</th>
								  <th>操作</th>
								</tr>
								<tr>
								  <td>1</td>
								  <td>111111</td>
								  <td>111111</td>
								  <td>111111</td>
								  <td>111111</td>
								  <td>111111</td>
								  <td>111111</td>
								  <td><a href='#'>查看简历</a></td>
								</tr>
								<tr>
								  <td>2</td>
								  <td>222222</td>
								  <td>222222</td>
								  <td>222222</td>
								  <td>222222</td>
								  <td>222222</td>
								  <td>222222</td>
								  <td><a href='#'>查看简历</a></td>
								</tr>
								<tr>
								  <td>3</td>
								  <td>333333</td>
								  <td>333333</td>
								  <td>333333</td>
								  <td>333333</td>
								  <td>333333</td>
								  <td>333333</td>
								  <td><a href='#'>查看简历</a></td>
								</tr>
							</table>
						</div><!-- /.box-body -->
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<div class="row">
						<div class="col-md-5" style="border: 1px">
							<h3 class="ma_title">这是标题</h3>
							<p class="ma_font">xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo</p>
						</div>
						<div class="col-md-7 center" >
							22222222222222222222222222222222
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="messages">
					<div class="row">
						<div class="col-md-5">
							<h3 class="ma_title">这是标题</h3>
							<p class="ma_font">xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo</p>
						</div>
						<div class="col-md-7">
							33333333333333333333333333333333333
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="settings">
					<div class="row">
						<div class="col-md-5">
							<h3 class="ma_title">这是标题</h3>
							<p class="ma_font">xxooxxooxxooxxooxxooxxooxxooxxooxxooxxoo</p>
						</div>
						<div class="col-md-7">
							4444444444444444444444444444444444444444444444444
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="col-md-3" style='background-color:#fff;'>
		<div style='background-color:#E4F1F4;'>
			<br/>
			<img class='center' src="{{ asset('images/preview-logo.png') }}" style='margin-top:10px;margin-bottom:10px;'>
			<p class="center">完善企业信息，感受优质服务</p>
			<p class="center"><a href='#'>立即完善信息</a></p>
			<br/>
		</div>
		<hr/>
		<p><b>服务热线</b></p5>
		<p>猎聘客户经理：猎聘网</p>
		<p>联系电话：400-6838-789</p>
		<p>电子邮件：soc@liepin.com</p>
		<hr>
		<p><b>帮助中心</b></p>
		<p><a href='#'>意见箱</a></p>
    </div>
</div>
@endsection