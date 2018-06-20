<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">添加用户</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="col-lg-6">
        <?php echo form_open('admin/user/add_do', 'class="form-horizontal"'); ?>

        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">用户名</label>
            <input type="text" class="form-control" id="inputSuccess" placeholder="不可修改" name="username" required="">
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">密码</label>
            <input class="form-control" id="newpassword" placeholder="新的密码" name="newpassword" type="password" required="">
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">确认密码</label>
            <input class="form-control" id="repassword" placeholder="确认密码" name="repassword" type="password" required="">
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">权限</label>
            <select class="form-control" name="role">
                <option value="1">员工</option>
                <option value="2">领导</option>
                <option value="3">管理员</option>
            </select>
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">备注</label>
            <div class="controls">
                <textarea class="form-control" id="inputSuccess" placeholder="备注...小于200字" rows="3" name="remark" placeholder="小于200字"></textarea>
            </div>
        </div>
        <div class="widget-footer">
            <button class="btn btn-primary" type="submit" onclick="return chk()">添加</button>
            <button class="btn" type="reset">清空</button>
        </div>
        </form>
    </div>

</div>
<script>
    function chk() {
        var p1 = document.getElementById("newpassword").value;
        var p2 = document.getElementById("repassword").value;
        if (p1==""||p1==null){
            alert("密码不能为空！");
            return false;
        }
        if (p1!=p2){
            alert("两次密码不一样!");
            return false;
        }
    }
</script>