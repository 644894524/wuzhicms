<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T('member','head'); ?>
<div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>我的关注</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary"><strong>商业</strong></button>
                                </div>
                                <?php $n=1;if(is_array($tags)) foreach($tags AS $tag) { ?>
                                <?php if($tag['type']==1) { ?>
                                <div class="btn-group btn-group-sm" role="group" aria-label="..." onclick="del_tags(this,'<?php echo $tag['tagname'];?>',1);">
                                    <button type="button" class="btn btn-default btn-outline"><?php echo $tag['tagname'];?> <i class="fa fa-times"></i></button>
                                </div>
                                <?php } ?>
                                <?php $n++;}?>
                                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default btn-outline" style="border-radius: 50%" data-toggle="modal" data-target="#myModal1"><strong>+</strong></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary"><strong>金融</strong></button>
                                </div>
                                <?php $n=1;if(is_array($tags)) foreach($tags AS $tag) { ?>
                                <?php if($tag['type']==2) { ?>
                                <div class="btn-group btn-group-sm" role="group" aria-label="..." onclick="del_tags(this,'<?php echo $tag['tagname'];?>',2);">
                                    <button type="button" class="btn btn-default btn-outline"><?php echo $tag['tagname'];?> <i class="fa fa-times"></i></button>
                                </div>
                                <?php } ?>
                                <?php $n++;}?>

                                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default btn-outline" style="border-radius: 50%" data-toggle="modal" data-target="#myModal2"><strong>+</strong></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary"><strong>土地</strong></button>
                                </div>
                                <?php $n=1;if(is_array($tags)) foreach($tags AS $tag) { ?>
                                <?php if($tag['type']==3) { ?>
                                <div class="btn-group btn-group-sm" role="group" aria-label="..." onclick="del_tags(this,'<?php echo $tag['tagname'];?>',3);">
                                    <button type="button" class="btn btn-default btn-outline"><?php echo $tag['tagname'];?> <i class="fa fa-times"></i></button>
                                </div>
                                <?php } ?>
                                <?php $n++;}?>

                                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default btn-outline" style="border-radius: 50%" data-toggle="modal" data-target="#myModal3"><strong>+</strong></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary"><strong>人才</strong></button>
                                </div>
                                <?php $n=1;if(is_array($tags)) foreach($tags AS $tag) { ?>
                                <?php if($tag['type']==4) { ?>
                                <div class="btn-group btn-group-sm" role="group" aria-label="..." onclick="del_tags(this,'<?php echo $tag['tagname'];?>',4);">
                                    <button type="button" class="btn btn-default btn-outline"><?php echo $tag['tagname'];?> <i class="fa fa-times"></i></button>
                                </div>
                                <?php } ?>
                                <?php $n++;}?>

                                <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default btn-outline" style="border-radius: 50%" data-toggle="modal" data-target="#myModal4"><strong>+</strong></button>
                                </div>
                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form name="set1" action="index.php?m=attention&f=biz_attention&v=set_bq&type=1" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">商业标签选择</h4>
                                        </div>
                                        <div class="modal-body" id="bq_data1">
                                            <?php $n=1;if(is_array($linkage_data1)) foreach($linkage_data1 AS $r) { ?>
                                            <label style="margin-right: 20px;"><?php echo $r['name'];?> <input type="checkbox" value="<?php echo $r['name'];?>" class="i-checks" name="bq[]" <?php if(!empty($tag_result) && in_array($r['name'],$tag_result)) { ?>checked<?php } ?>></label>
                                            <?php $n++;}?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-outline" data-dismiss="modal" style="margin-bottom: 0px;">关闭</button>
                                            <button type="submit" class="btn btn-primary">保存设置</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form name="set1" action="index.php?m=attention&f=biz_attention&v=set_bq&type=2" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">金融标签选择</h4>
                                            </div>
                                            <div class="modal-body" id="bq_data2">
                                                <?php $n=1;if(is_array($linkage_data2)) foreach($linkage_data2 AS $r) { ?>
                                                <label style="margin-right: 20px;"><?php echo $r['name'];?> <input type="checkbox" value="<?php echo $r['name'];?>" class="i-checks" name="bq[]" <?php if(!empty($tag_result) && in_array($r['name'],$tag_result)) { ?>checked<?php } ?>></label>
                                                <?php $n++;}?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-outline" data-dismiss="modal" style="margin-bottom: 0px;">关闭</button>
                                                <button type="submit" class="btn btn-primary">保存设置</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form name="set1" action="index.php?m=attention&f=biz_attention&v=set_bq&type=3" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">土地标签选择</h4>
                                            </div>
                                            <div class="modal-body" id="bq_data3">
                                                <?php $n=1;if(is_array($linkage_data3)) foreach($linkage_data3 AS $r) { ?>
                                                <label style="margin-right: 20px;"><?php echo $r['name'];?> <input type="checkbox" value="<?php echo $r['name'];?>" class="i-checks" name="bq[]" <?php if(!empty($tag_result) && in_array($r['name'],$tag_result)) { ?>checked<?php } ?>></label>
                                                <?php $n++;}?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-outline" data-dismiss="modal" style="margin-bottom: 0px;">关闭</button>
                                                <button type="submit" class="btn btn-primary">保存设置</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <form name="set1" action="index.php?m=attention&f=biz_attention&v=set_bq&type=4" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">人才标签选择</h4>
                                            </div>
                                            <div class="modal-body" id="bq_data4">
                                                <?php $n=1;if(is_array($linkage_data4)) foreach($linkage_data4 AS $r) { ?>
                                                <label style="margin-right: 20px;"><?php echo $r['name'];?> <input type="checkbox" value="<?php echo $r['name'];?>" class="i-checks" name="bq[]" <?php if(!empty($tag_result) && in_array($r['name'],$tag_result)) { ?>checked<?php } ?>></label>
                                                <?php $n++;}?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-outline" data-dismiss="modal" style="margin-bottom: 0px;">关闭</button>
                                                <button type="submit" class="btn btn-primary">保存设置</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <?php $n=1;if(is_array($search_result)) foreach($search_result AS $r) { ?>
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content" style="padding-bottom: 5px;">
                    <a href="<?php echo $r['url'];?>" class="btn-link" target="_blank">
                        <h2>
                            <?php echo $r['title'];?>
                        </h2>
                    </a>
                    <div class="small m-b-xs">
                        <span class="text-muted"><i class="fa fa-clock-o"></i> <?php echo date('Y-m-d H:i',$r['updatetime']);?></span>
                    </div>
                    <p>
                        <?php echo $r['remark'];?>
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>标签：
                                <?php $n=1;if(is_array($r['tags_data'])) foreach($r['tags_data'] AS $tag) { ?>
                                <button class="btn btn-<?php if(in_array($tag,$tag_result)) { ?>primary<?php } else { ?>default<?php } ?> btn-xs cursor-default" type="button" ><?php echo $tag;?></button>
                                <?php $n++;}?>
                            </h5>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <?php $n++;}?>
    </div>
</div>

<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>
<script>
    function del_tags(obj,tag,type) {
        $(obj).remove();
        $.post("index.php?m=attention&f=biz_attention&v=delete", { tagname: tag, type: type},
                function(data){
                    $("#bq_data"+type).html(data);
                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green',
                    });
                });
    }
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
</body>
</html>