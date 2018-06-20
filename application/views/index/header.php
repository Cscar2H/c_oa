<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('static')?>/css/bootstrap.css">
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url('static')?>/metisMenu/metisMenu.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('static')?>/css/sb-admin-2.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('static')?>/css/font-awesome.css">
    <!-- dataTables -->
    <link rel="stylesheet" href="<?php echo base_url('static')?>/css/dataTables.bootstrap.css">



    
  </head>
	<body>
		<div id="wrapper">
        <!-- 导航 -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/admin/index') ?>">OA管理系统</a>
            </div>
            <!-- /.顶部导航栏 -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php
                        echo @$_SESSION['username'].' (';
                        switch ($_SESSION['role']) {
                            case '1':
                                echo '职员';
                                break;
                            case '2':
                                echo '领导';
                                break;
                            case '3':
                                echo '管理员';
                                break;
                            default:
                                echo '外星人';
                        }
                        echo ')';
                        ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo site_url('admin/admin/change') ?>"><i class="fa fa-lock fa-fw"></i> 修改密码</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> 用户设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('admin/login/login_out') ?>"><i class="fa fa-power-off fa-fw"></i> 注销</a>
                        </li>
                    </ul>
                    <!-- /.导航用户 -->
                </li>
                
            </ul>

            <!-- /.侧边栏 -->            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo site_url('admin/admin/index') ?>"><i class="fa fa-home fa-fw"></i> 首页</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-star-half-o"></i> 月度评价 <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/score/staff') ?>"><i class="fa fa-id-card-o fa-fw"></i> 员工自评</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/score/grade_all') ?>"><i class="fa fa-thumbs-o-up"></i> 上级评分</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> 人力总汇 <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/score/all') ?>"><i class="fa fa-bar-chart fa-fw"></i> 部门总汇</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> 用户管理 <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/user/add') ?>"><i class="fa fa-user-plus fa-fw"></i> 添加用户</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/user/index') ?>"><i class="fa fa-cogs fa-fw"></i> 权限管理</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /.导航栏与侧边栏 -->
        </nav>