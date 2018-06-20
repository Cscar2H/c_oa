<!-- 内容 -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="alert alert-warning">
                        请谨慎操作
                    </div>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">修改密码</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form action="<?php echo site_url('admin/admin/change_password')?>" method="POST">
                                            <fieldset>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="disabledSelect">用户名</label>
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('username') ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>原始密码</label>
                                                    <div class="controls">
                                                        <input class="form-control" placeholder="原始密码" name="password" id="userPassword" type="password" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>新密码</label>
                                                    <div class="controls">
                                                        <input class="form-control" placeholder="新的密码" name="newpassword" type="password" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>确认密码</label>
                                                    <div class="controls">
                                                        <input class="form-control" placeholder="确认密码" name="repassword" type="password" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-lg btn-warning btn-block">修改</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->