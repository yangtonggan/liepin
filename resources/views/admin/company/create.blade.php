@extends("admin.base.base")
@section("content")
    <section class="content-header">
          <h1>
            企业信息管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">企业信息管理</a></li>
            <li class="active">新增企业</li>
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
                  <h3 class="box-title">新增企业信息</h3>
                </div><!-- /.box-header -->
				
                <!-- form start -->
                <form class="form-horizontal" action="{{ URL('/admin/company') }}" method='post' enctype="multipart/form-data">
				<input type='hidden' name='_token' value='{{ csrf_token() }}'>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">企业名称:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name='c_name'>
                      </div>
                      <label for="inputEmail3" class="col-sm-2 control-label">简称:</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputEmail3" name='c_ename'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">电话:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name='c_phone'>
                      </div>
                      <label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
                      <div class="col-sm-3">
                        <input type="email" class="form-control" id="inputEmail3" name='c_email'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">公司主页:</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="c_site">
                      </div>
                      <label class="col-sm-2 control-label">标签:</label>
                      <div class="col-sm-3">
                        <input type="text" name="c_label" class='form-control' required='required'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">规模:</label>
                      <div class="col-sm-4">
						<div class="input-group">
							<select class="form-control" name='c_size'>
							  <option value=''>请选规模</option>
							  <option value='5'>200人以上</option>
							  <option value='4'>200-100人</option>
							  <option value='3'>100-50人</option>
							  <option value='2'>50-20人</option>
							  <option value='1'>20人以下</option>
							</select>
						</div>
                      </div>
                      <label class="col-sm-2 control-label">Logo:</label>
                      <div class="col-sm-3">
                        <input type="file" name="c_logo" required='required'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">地址:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPassword3" name="c_address">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">公司简介:</label>
                      <div class="col-sm-9">
						<textarea class="form-control" rows="3" name='c_desc'></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-9">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> 是否启用
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
				  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">取消</button>
                    <button type="submit" class="btn btn-info pull-right">提交</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->

            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection