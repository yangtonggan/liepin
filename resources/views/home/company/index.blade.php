@extends('home.company.base')
@section('title','test')

@section('content')
<div style="margin-bottom:5%;">
	<div style="border:none;box-shad:none;' class="panel panel-default bg-white m-t-md">
		<div class="row">
			<header class="panel-heading text-center" style='height:100px;'>
				<h3 style="font-size:28px;color:#333;">完善企业信息，立即享受猎聘网免费招聘服务</h3>
			</header>
			<div class="col-md-offset-1 col-md-6">
				<form class="form-horizontal" role="form">
				  <div class="form-group has-feedback">
					<label for="inputEmail3" class="col-md-3 control-label">公司名称：</label>
					<div class="col-md-9">
						<input type="text" class="form-control" id="inputEmail3" placeholder="请您填写公司营业执照上的公司名称全称">
						<span id='viewtip' class='glyphicon glyphicon-info-sign form-control-feedback' onmouseover="show(this)" onmouseout="guanbi()"></span>
						<img id="big" src=""/>
					</div>
						<script>
							// $('viewtip').hover(function(){
								// $(this).css('color','red');
								
							// });
							var big = document.getElementById('big');
							function show(obj){
								//alert(obj.src);
								// big.src = obj.src;
								big.src = "{{ asset('images/tip-comp_name_66d90fb1.png') }}";
								big.style.display = 'block';
							}

							function guanbi(){
								big.style.display = 'none';
							}
						</script>
				  </div>
				  <div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-3 control-label">所在地：</label>
					<div class="col-md-9">
						<input type="text" class="form-control" id="inputPassword3" placeholder="上海">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
				  </div>
				  <div class="form-group has-feedback">
					<label for="inputPassword3" class="col-md-3 control-label">所属行业：</label>
					<div class="col-md-9">
						<input type="text" class="form-control" id="inputPassword3" placeholder="所属行业">
						<span class='glyphicon glyphicon-th form-control-feedback' style='color:#3A87AD'></span>
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-md-3 control-label">联系人：</label>
					<div class="col-md-5">
					  <input type="text" class="form-control" id="inputPassword3" placeholder="联系人">
					</div>
					<div class="col-md-4">
					  <label class="checkbox-inline">
						<input type="radio" name="sex" id="optionsRadios3" value="w" checked>女士
					  </label>
					  <label class="checkbox-inline">
						<input type="radio" name="sex" id="optionsRadios4" value="m">先生
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-md-3 control-label">手机号码：</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="inputPassword3" placeholder="手机号码">
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">发送验证码</button>
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-md-3 control-label">邮箱：</label>
					<div class="col-md-5">
						<input type="email" class="form-control" id="inputPassword3" placeholder="邮箱">
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">验证邮箱</button>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn btn-primary">点击提交</button>
					</div>
				  </div>
				</form>
			</div>
		  <div class="col-md-offset-1 col-md-4" style='border-left:1px solid #ddd;'>
			<center><img src="{{ asset('images/icon-guarantee_a275304a.png') }}"></center>
			<div style='text-align:center;'>
				<h5><b>猎聘承诺</b></h5>
				<p>企业资料仅用于资质审核，</p>
				<p>猎聘网绝不向第三方泄露，</p>
				<p>请您放心填写。</p>
			</div>
		  </div>
		</div>
	</div>
</div>
@endsection