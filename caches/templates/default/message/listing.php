<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","head"); ?>
<body class="gray-bg">
<?php if($set_iframe==0) { ?>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","iframetop"); ?>
<?php } else { ?>
<div style="padding-top: 15px;"></div>
<?php } ?>
<div class="container-fluid  ie8-member">
    <div  class="row row-40">
        <?php if($set_iframe==0) { ?>
        <div  class="col-sm-3 left-nav padding-right0">
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

        <div class="<?php if($set_iframe==0) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?>  paddingleft0">

            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content" style="min-height: 500px;">
                            <div>
                                <table class="table-dashed table-advance table-hover ">
                                    <thead>
                                    <tr>
                                        <th class="tablehead" colspan="7">
                                            <form name="myform" action="" method="get"><div class="pull-left"><a href="?m=message&f=message&v=add&set_iframe=<?php echo $set_iframe;?>" class="btn btn-danger">发私信</a>  <a href="javascript:makedo('index.php?m=message&f=message&v=make_empty&set_iframe=<?php echo $set_iframe;?>', '确认要清空收件夹？')" class="btn btn-white btn-sm" >清空所有私信</a> </div> <div class="col-md-3 pull-right"><div class="input-group"><input type="text" name="keyword" class="form-control" placeholder="查找联系人或私信"><span class="input-group-btn"><button class="btn btn-btn btn-primary" type="submit">搜索</button>
                                        <input type="hidden" name="m" value="message">
                                        <input type="hidden" name="f" value="message">
                                        <input type="hidden" name="v" value="listing">
                                        <input type="hidden" name="set_iframe" value="<?php echo $set_iframe;?>">
                                    </span></div></div></form> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n=1;if(is_array($result)) foreach($result AS $r) { ?>
                                    <tr>
                                        <td class="messagelist">
                                            <a href="?m=message&f=message&v=add&username=<?php echo $r['username'];?>">
                                                <div class="userphoto"><img src="<?php echo avatar($r['uid'],180);?>" alt=""></div>
                                                <div class="username"><h5><?php echo $r['username'];?>：<span><?php echo time_format($r['addtime']);?></span></h5></div>
                                                <div class="usermessage"><?php echo $r['content'];?></div></a>
                                        </td>
                                    </tr>
                                    <?php $n++;}?>
                                    </tbody>
                                </table>
                            </div>

                            <!--分页开始-->
                            <div class="paginationpage text-center">
                                <nav>
                                    <ul class="pagination">
                                        <?php echo $pages;?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("member","foot"); ?>