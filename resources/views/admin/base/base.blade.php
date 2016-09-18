<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Simple Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('admins/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="admins/bootstrap/css/bootstrap.min.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/AdminLTE.min.css') }}">
    <!-- <link rel="stylesheet" href="admins/dist/css/AdminLTE.min.css"> -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/skins/_all-skins.min.css') }}">
    <!-- <link rel="stylesheet" href="admins/dist/css/skins/_all-skins.min.css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>后台</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>后台管理</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">你有4个留言</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                            <!-- <img src="admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5分钟</small>
                          </h4>
                          <p>为什么不买一个很棒的主题?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('admins/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                            <!-- <img src="admins/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> -->
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2小时</small>
                          </h4>
                          <p>为什么不买一个很棒的主题?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('admins/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                            <!-- <img src="admins/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> -->
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> 今天</small>
                          </h4>
                          <p>为什么不买一个很棒的主题?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('admins/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                            <!-- <img src="admins/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image"> -->
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> 昨天</small>
                          </h4>
                          <p>为什么不买一个很棒的主题</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ asset('admins/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                            <!-- <img src="admins/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image"> -->
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2天</small>
                          </h4>
                          <p>为什么不买一个很棒的主题?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">查看所有留言</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">你有10个通知</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5个新会员加入
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> 很长的描述,可能不适合进入页面,并可能导致设计问题
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5个新会员加入
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25个销售量
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> 你的用户名已修改
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">查看所有</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">你有9个任务</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            设计一些按钮
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            开发一个漂亮的主题
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            要做的任务
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            做一个完美的滤镜效果
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">查看所有</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  <!-- <img src="admins/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                  <span class="hidden-xs">{{ session('adminuser')->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    <!-- <img src="admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                    <p>
                      {{ session('adminuser')->name }} - 网络开发
                      <small>注册时间: {{ isset(session('adminuser')->regtime) ? date('Y-m-d',session('adminuser')->regtime) : '无' }}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">粉丝</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">销量</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">好友</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">个人资料</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ asset('admin/logout') }}" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
              <!-- <img src="admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info">
              <p>{{ session('adminuser')->name }}</p>
              <a href="{{ asset('admin/logout') }}"><i class="fa fa-circle text-success"></i> 退出</a>
            </div>
          </div>
    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">导航</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>用户管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="table.html"><i class="fa fa-circle-o"></i> 用户列表</a></li>
                <li><a href="form.html"><i class="fa fa-circle-o"></i> 添加用户</a></li>
                
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa  fa-diamond"></i> <span>分类管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> 分类列表</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> 添加分类</a></li>
                
              </ul>
            </li>
      

            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>企业管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/admin/company') }}"><i class="fa fa-circle-o"></i> 企业列表</a></li>
                <li><a href="{{ URL('/admin/company/create') }}"><i class="fa fa-circle-o"></i> 添加企业</a></li>
              </ul>
            </li>
			
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>职位管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> 职位列表</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> 添加职位</a></li>
              </ul>
            </li>
			
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>职位管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> 简历管理</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> 添加简历 </a></li>
              </ul>
            </li>
			
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>多级查看</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         @yield("content")
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>


      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('admins/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- <script src="admins/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="admins/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- Slimscroll -->
    <script src="{{ asset('admins/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- <script src="admins/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
    <!-- FastClick -->
    <script src="{{ asset('admins/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- <script src="admins/plugins/fastclick/fastclick.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('admins/dist/js/app.min.js') }}"></script>
    <!-- <script src="admins/dist/js/app.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admins/dist/js/demo.js') }}"></script>
    <!-- <script src="admins/dist/js/demo.js"></script> -->
  </body>
</html>
