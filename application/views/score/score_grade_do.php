<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">给<?php echo $sco['0']['username'] ?>赋分</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="col-lg-6">
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/score/grade_do', 'class="form-horizontal"'); ?>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">ID</label>
            <input type="hidden" name="sco_id" value="<?php echo $sco['0']['sco_id'] ?>">
            <input type="text" class="form-control" id="inputError" disabled="" value="<?php echo $sco['0']['sco_id'] ?>">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">用户名</label>
            <input type="hidden" name="username" value="<?php echo $sco['0']['username'] ?>">
            <input class="form-control" id="inputError" name="username" type="text" disabled="" value="<?php echo $sco['0']['username'] ?>">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">重点工作名称</label>
            <input type="hidden" name="work_name" value="<?php echo $sco['0']['work_name'] ?>">
            <input class="form-control" id="work_name" name="work_name" type="text" disabled="" value="<?php echo $sco['0']['work_name'] ?>">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">重点工作完成情况</label>
            <input type="hidden" name="situation" value="<?php echo $sco['0']['situation'] ?>">
            <div class="controls">
                <textarea class="form-control" id="situation" disabled="" style="height:60px;" name="situation"><?php echo $sco['0']['situation'] ?></textarea>
            </div>
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">自评</label>
            <input type="hidden" name="self_rating" value="<?php echo $sco['0']['self_rating'] ?>">
            <input class="form-control" id="self_rating" name="self_rating" disabled="" type="text" value="<?php echo $sco['0']['self_rating'] ?>">
        </div>
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess">赋分</label>
            <input class="form-control" id="grade" name="grade" type="text" value="<?php echo $sco['0']['grade'] ?>">
        </div>
        <div class="form-group has-error">
            <label class="control-label" for="inputError">赋分人</label>
            <input type="hidden" name="captain" value="<?php echo $_SESSION['username'] ?>">
            <input class="form-control" id="captain" name="captain" type="text" disabled="" value="<?php echo $_SESSION['username'] ?> ">
        </div>

        <div class="widget-footer">
            <button class="btn btn-primary" type="submit">保存</button>
            <button class="btn" type="reset">清空</button>
        </div>
        </form>
    </div>


</div>
