@extends("admin.base.base")
@section("content")
    <section class="content-header">
          <h1>
            企业信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">企业信息管理</a></li>
            <li class="active">企业信息详情</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">企业信息详情</h3>
                </div><!-- /.box-header -->
				
                <!-- form start -->
                <form class="form-horizontal" action='/admin/{{ $info->c_id }}' method='post'>
				<input type='hidden' name='_token' value='{{ csrf_token() }}'>
				<input type='hidden' name='_method' value='put'>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">企业名称:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name='c_name' value='{{ $info->c_name }}' readonly="readonly">
                      </div>
                      <label for="inputEmail3" class="col-sm-2 control-label">简称:</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" name='c_ename' value='{{ $info->c_ename }}' readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">电话:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name='c_phone' value='{{ $info->c_phone }}' readonly="readonly">
                      </div>
                      <label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
                      <div class="col-sm-3">
                        <input type="email" class="form-control" id="inputEmail3" name='c_email' value='{{ $info->c_email }}' readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">公司主页:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="c_site" value='{{ $info->c_site }}' readonly="readonly">
                      </div>
                      <label class="col-sm-2 control-label">标签:</label>
                      <div class="col-sm-3">
                        <input type="text" name="c_label" class='form-control' required='required' value='{{ $info->c_label }}' readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">规模:</label>
                      <div class="col-sm-4">
                        <input type="text" class='form-control' name="c_size" required='required' value='{{ $info->c_size }}' readonly="readonly">
                      </div>
                      <label class="col-sm-2 control-label">Logo:</label>
                      <div class="col-sm-3">
						<img src='{{ asset("uploads/logo/$info->c_logo") }}' height='30px'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">地址:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" name="c_address" value='{{ $info->c_address }}' readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">公司简介:</label>
                      <div class="col-sm-9">
						<textarea class="form-control" rows="3" name='c_desc' readonly="readonly">{{ $info->c_desc }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-9">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" disabled="disabled"> 是否启用
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection