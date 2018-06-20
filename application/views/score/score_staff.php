<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">员工自评</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">

            <div class="panel panel-info">
                <div class="panel-heading">
                    你好，<?php echo $_SESSION['username'] ?>。请填写本月重点工作及完成情况，并进行自评。
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('admin/score/staff_do'); ?>

                                <div class="form-group">
                                    <label>用户名</label>
                                    <input class="form-control" id="username" name="username" value="<?php echo $_SESSION['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>重点工作名称</label>
                                    <input class="form-control" id="work_name" name="work_name" value="<?php echo set_value('work_name'); ?>">
                                </div>
                                <div class="form-group">
                                    <label>重点工作完成情况</label>
                                    <textarea class="form-control" id="situation" name="situation" rows="6" placeholder="小于200字"><?php echo set_value('situation'); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>自评分数</label>
                                    <input class="form-control" id="self_rating" name="self_rating" value="<?php echo set_value('self_rating'); ?>">
                                </div>
                                <div class="form-group">
                                    <label>上传文件</label>
                                    <input type="file">
                                </div>

                                <div class="widget-footer">
                                    <button class="btn btn-primary" type="submit" onclick="return chk()">提交</button>
                                    <button class="btn" type="reset">清空</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script>
    function chk() {
        var wo = document.getElementById("work_name").value;
        var si = document.getElementById("situation").value;
        var se = document.getElementById("self_rating").value;
        if (wo==""||wo==null){
            alert("重点工作名称不能为空！");
            return false;
        }
        if (si==""||si==null){
            alert("重点工作完成情况不能为空!");
            return false;
        }
        if (se==""||se==null){
            alert("自评分数不能为空!");
            return false;
        }
    }
</script>