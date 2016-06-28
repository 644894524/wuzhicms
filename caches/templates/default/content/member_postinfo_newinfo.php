<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body class="gray-bg">
<style type="text/css">
    label{font-weight: normal;
    }
    .text-blod{font-weight: bold;}
    #Validform_msg .Validform_title {
        background-color: #4585E6;
    }
    #Validform_msg .Validform_info {
        border: 1px solid #4585E6;
    }
    .input-group-btn{display: inline-block;padding-left: 10px;}
</style>
<link href="<?php echo R;?>css/validform.css" rel="stylesheet" />
<script src="<?php echo R;?>js/validform.min.js"></script>
<script src="<?php echo R;?>js/base.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo R;?>js/ueditor/ueditor.all.min.js"></script>

<link href="<?php echo R;?>js/jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="<?php echo R;?>js/jquery-ui-1.10.1.custom.min.js"></script>
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div class="row row-40" >
        <?php if($set_iframe==0) { ?>
        <div class="col-sm-3 left-nav padding-right0">
            <!--左侧导航-->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="nav-close"><i class="fa fa-times-circle"></i>
                </div>
                <div class="slimScrollDiv" style="position: relative; width: auto; height: 100%;">
                    <div class="sidebar-collapse" style="width: auto; height: 100%;">
                        <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","left"); ?>
                    </div>
                </div>
            </nav>
            <!--end 左侧导航-->
        </div><!--col-sm-3--><?php } ?>

        <div class="<?php if($set_iframe==0) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?>">

            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox-content">
                        <div class="memberright">

                            <ul id="myTab" class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tabs1" id="1tab" role="tab" data-toggle="tab" aria-controls="tabs1" aria-expanded="true"><?php echo $catname;?> - 信息发布</a></li>
                                <li role="presentation" class=""><a href="?m=content&f=postinfo&v=listing&cid=<?php echo $cid;?>&set_iframe=<?php echo $set_iframe;?>">我发布的<?php echo $catname;?> </a></li>
                                <li class="tip-a" style="float:right;">温馨提示：我们的客服会在24小时内审核。全国免费咨询电话：010-11111111</li>
                            </ul>
                            <div class="memberbordertop">
                                <form name="myform" class="form-horizontal" action="" method="post" id="myform">
                                    <table class="table-dashed table-striped table-advance">
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><font color="red">*</font> 标题：</label><div class="col-sm-10 text-left">
                                                <input type="text" style="color:#" name="form[title]" id="title" maxlength="80" value="" class="form-control" datatype="*2-80" nullmsg="请输入标题" errormsg="标题至少2个字符,最多80个字符！">                                       </div></div></td>
                                        </tr>

                                        <?php $n=1;if(is_array($field_list)) foreach($field_list AS $info) { ?>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><?php if($info['star']) { ?><font color="red">*</font><?php } ?> <?php echo $info['name'];?>：</label><div class="col-sm-10 text-left"><?php echo $info['form'];?>
                                            </div></div></td>
                                        </tr>
                                        <?php $n++;}?>
                                        <?php if($formdata['5']['content']['name']) { ?>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right text-blod"><?php if($info['star']) { ?><font color="red">*</font><?php } ?> <?php echo $formdata['5']['content']['name'];?>：</label><div class="col-sm-10 text-left">
                                                <?php echo $formdata['5']['content']['form'];?>
                                            </div></div></td>
                                        </tr><?php } ?>
                                        <tr>
                                            <td><div class="form-groupinfo"><label class="col-sm-2 control-label text-right"> </label><div class="col-sm-3 text-left"><input type="submit" name="submit" id="submit" value="提交" class="btn btn-primary" style="width:100%;"></div></div></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.form-groupinfo').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
    $("#submit").click(function(){
        t=setTimeout("hide_formtips()",3000);
    });
    function hide_formtips() {
        $.Hidemsg();
        clearInterval(t);
    }
    $(function(){
        $(".form-horizontal").Validform({
            tiptype:1
        });
    })
    function remove_obj(obj) {
        $(obj).parent().remove();
    }
    function add_newfile(divid) {
        var str = $('#text_'+divid).val();
        str = '<li>'+str+'</li>';
        $('#'+divid+"_ul").append(str);
    }
</script>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>
