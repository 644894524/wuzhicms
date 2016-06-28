<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>设置新密码</h5>
                </div>
                <div class="ibox-content">
                    <form name="myform" action="" method="post" id="myform" onsubmit="return formsubmit();">
                        <table class="table-dashed table-advance table-hover ">
                            <tr>
                                <th align="right">新密码：</th>
                                <td><input name="password" class="form-control" type="password" size="30" value="" class="input-text"/></td>
                            </tr>
                            <tr>
                                <th align="right">新密码确认：</th>
                                <td><input name="password2" class="form-control" type="password" size="30" value="" class="input-text"/></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td colspan="2"><label>
                                    <input type="submit" name="submit" id="dosubmit" value="确 定"
                                           class="btn btn-primary"/>
                                </label></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
    function formsubmit() {
        myform.submit();
    }
</script>
</body>
</html>