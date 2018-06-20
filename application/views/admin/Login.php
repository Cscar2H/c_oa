<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | OA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('static')?>/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('static')?>/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('static')?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('static')?>/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">登录</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo site_url('admin/login/login_in') ?>" method="POST" id="login">
                            <fieldset>
                                <div class="form-group">
                                    <div class="controls">                                
                                        <input class="form-control" placeholder="用户名" name="username" id="userName" type="text" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls"> 
                                        <input class="form-control" placeholder="密码" name="password" id="userPassword" type="password" required>
                                        
                                    </div>
                                </div>
                                <!-- 验证码 -->
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="text" name="cap" placeholder="验证码" required>
                                        <span class="help-inline">
                                            <img src="<?php echo site_url('admin/login/code') ?>" onclick="this.src='<?php echo site_url('admin/login/code') ?>?d='+Math.random();" >
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">登录</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('static')?>/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('static')?>/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('static')?>/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('static')?>/js/sb-admin-2.js"></script>

</body>

</html>
