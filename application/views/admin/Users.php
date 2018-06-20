
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">用户管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row-fluid">
                <table id="dataTables" class="table table-striped table-bordered dataTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>注册日期</th>
                        <th>权限</th>
                        <th>备注</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $v): ?>
                        <tr>
                            <td><?php echo $v['id'] ?></td>
                            <td><?php echo $v['username'] ?></td>
                            <td><?php echo date('Y-m-d H:i:s', $v['regtime']); ?></td>
                            <td>
                                <?php
                                switch ($v['role']) {
                                    case '1':
                                        echo '员工';
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
                                ?>
                            </td>
                            <td><?php echo $v['remark'] ?></td>
                            <td>
                                <button type="button" class="btn btn-warning btn-xs">
                                <a href="<?php echo site_url('admin/user/edit/'.$v['id']) ?>">
                                    <i class="fa fa-edit"></i>
                                    修改
                                </a>

                                </button>

                                <button type="button" class="btn btn-danger btn-xs">
                                <a onclick="del()" href="<?php echo site_url('admin/user/del/'.$v['id']) ?>">
                                    <i class="fa fa-trash-o"></i>
                                    删除
                                </a>

                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div> <!-- /row-fluid -->
        </div><!-- /Main window -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

<script>
    function del() {
        event.returnValue = confirm("确定删除吗?");
    }
</script>





