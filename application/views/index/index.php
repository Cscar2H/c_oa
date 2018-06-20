        <!-- 内容 -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">欢迎登陆</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-star-half-o fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $self_all_count ?></div>
                                                <div>尚未评分</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo site_url('admin/score/grade_all') ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left">Check</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-tasks fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $score_all_count ?></div>
                                                <div>人力总汇</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo site_url('admin/score/all') ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left">Check</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">用户</div>
                                                <div>快速添加</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo site_url('admin/user/add') ?>">
                                        <div class="panel-footer">
                                            <span class="pull-left">GO</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-download fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">下载</div>
                                                <div>导出Excel</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="panel-footer">
                                            <span class="pull-left">Download</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-server"></i>
                                服务器信息
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>用户名</td>
                                            <td><?php echo $this->session->userdata('username') ?></td>
                                        </tr>
                                        <tr>
                                            <td>登录时间</td>
                                            <td><?php echo date('Y-m-d H:i:s',$this->session->userdata('logintime')) ?></td>
                                        </tr>
                                        <tr>
                                            <td>客户端IP</td>
                                            <td><?php echo $this->input->ip_address() ?></td>
                                        </tr>
                                        <tr>
                                            <td>版本环境</td>
                                            <td><?php echo $this->input->server('SERVER_SOFTWARE') ?></td>
                                        </tr>
                                        <tr>
                                            <td>PHP版本</td>
                                            <td><?php echo PHP_VERSION ?></td>
                                        </tr><tr>
                                            <td>服务器IP</td>
                                            <td><?php echo $this->input->server('SERVER_ADDR') ?></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->