<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">你好，目前已评分部门汇总如下</h3>
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
                        <th>姓名</th>
                        <th>重点工作名称</th>
                        <th>重点工作完成情况</th>
                        <th>自评</th>
                        <th>赋分</th>
                        <th>赋分人</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($score as $v): ?>
                        <tr>
                            <td><?php echo $v['username'] ?></td>
                            <td><?php echo $v['work_name'] ?></td>
                            <td><?php echo $v['situation'] ?></td>
                            <td><?php echo $v['self_rating'] ?></td>
                            <td><?php echo $v['grade'] ?></td>
                            <td><?php echo $v['captain'] ?></td>

                            <td>
                                <button type="button" class="btn btn-warning btn-xs">
                                    <a href="<?php echo site_url('admin/score/edit/'.$v['sco_id']) ?>">
                                        <i class="fa fa-edit"></i>
                                        修改
                                    </a>

                                </button>

                                <button type="button" class="btn btn-danger btn-xs">
                                    <a onclick="del()" href="<?php echo site_url('admin/score/del/'.$v['sco_id']) ?>">
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
