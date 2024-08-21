<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:56:"./application/admin/template/archives/index_archives.htm";i:1635510273;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/layout.htm";i:1635510274;s:70:"/www/ShengXin/YFMJSite/application/admin/template/public/theme_css.htm";i:1635510274;s:71:"/www/ShengXin/YFMJSite/application/admin/template/archives/tags_btn.htm";i:1635510274;s:71:"/www/ShengXin/YFMJSite/application/admin/template/archives/flag_btn.htm";i:1622084944;s:65:"/www/ShengXin/YFMJSite/application/admin/template/public/page.htm";i:1611051758;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current { border-bottom: solid 2px <?php echo $global['web_theme_color']; ?> !important;color: <?php echo $global['web_theme_color']; ?> !important;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 2px <?php echo hex2rgba($global['web_theme_color'],0.15); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}
</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;min-width:auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="flexigrid" style="margin-top: 0px;min-height: 600px;">
        <div class="mDiv" style="padding: 0 0 10px;">
            <div class="ftitle">
                 <!-- 扩展 -->
    <?php if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
        <div class="fbutton" style="float: none;">
            <a href="<?php if(\think\Request::instance()->param('typeid') > '0'): ?><?php echo url(CONTROLLER_NAME.'/add', ['channel'=>\think\Request::instance()->param('channel'), 'typeid'=>\think\Request::instance()->param('typeid')], true, true); else: ?>javascript:quick_release(<?php echo (isset($is_arctype) && ($is_arctype !== '')?$is_arctype:'1'); ?>);<?php endif; ?>">
                <div class="add">
                    <?php if(CONTROLLER_NAME == 'Special'): ?>
                    <span><i class="layui-icon layui-icon-addition"></i>发布专题</span>
                    <?php else: ?>
                    <span><i class="layui-icon layui-icon-addition"></i>发布文档</span>
                    <?php endif; ?>
                </div>
            </a>
        </div>
    <?php endif; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#searchForm select[name=flag]').change(function(){
                $('#searchForm').submit();
            });
        });

        function jump_is_release()
        {
            var is_release = $('#searchForm input[name=is_release]').val();
            if (1 == is_release) {
                $('#searchForm input[name=is_release]').val('');
            } else {
                $('#searchForm input[name=is_release]').val('1');
            }
            $('#searchForm').submit();
        }

        function quick_release(is_arctype)
        {
            if (is_arctype && 0 < is_arctype) {
                //iframe窗
                layer.open({
                    type: 2,
                    title: '快捷发布文档',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['600px', '520px'],
                    content: "//<?php echo \think\Request::instance()->host(); ?><?php echo \think\Request::instance()->baseFile(); ?>?m=admin&c=Archives&a=release&iframe=2&lang=<?php echo \think\Request::instance()->param('lang'); ?>",
                    success: function(layero, index){
                        // var body = layer.getChildFrame('body', index);
                        // var gourl = $('.curSelectedNode').attr('href');
                        // if (!$.trim(gourl)) {
                        //     gourl = "<?php echo url('Archives/index_archives'); ?>";
                        // }
                        // body.find('input[name=gourl]').val(gourl);
                    }
                });
            } else {
                layer.alert('至少要新增一个栏目！', {icon: 5, title: false, btn: ['进入栏目管理']}, function(index){
                    layer.close(index);
                    /*左侧菜单焦点定位*/
                    $('.eycms_cont_left .sub-menu a', window.parent.document).removeClass('on');
                    $('#Arctype_index', window.parent.document).addClass('on');
                    /*end*/
                    window.location.href = "<?php echo url('Arctype/index'); ?>";
                });
            }
        }
    </script>
            </div>
            <!--<div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>-->
            <form id="searchForm" class="navbar-form form-inline" action="<?php echo url('Archives/index_archives'); ?>" method="get" onSubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                        <div class="sDiv2">  
        <select name="flag" class="select" style="margin:0px 5px;">
            <option value="">--属性--</option>
            <?php if(is_array($archives_flags) || $archives_flags instanceof \think\Collection || $archives_flags instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_flags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo $vo['flag_fieldname']; ?>" <?php if(\think\Request::instance()->param('flag') == $vo['flag_fieldname']): ?>selected<?php endif; ?>><?php echo $vo['flag_name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="标题搜索...">
                        <input type="submit" class="btn" value="搜索">
						<i class="fa fa-search"></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc"><input type="checkbox" class="checkAll" autocomplete="off"></div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w70">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div style="text-align: left;" class="text-l10">标题</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w110">
                            <div class="tc">栏目</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc sort_style"><a href="<?php echo getArchivesSortUrl('arcrank'); ?>">审核&nbsp;<i <?php if(\think\Request::instance()->param('orderby') == 'arcrank'): if(\think\Request::instance()->param('orderway') == 'asc'): ?>class="asc"<?php else: ?>class="desc"<?php endif; endif; ?>></i></a></div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">点击</div>
                        </th>
                        <?php if(!empty($arctype_info) && $arctype_info['current_channel'] == 4): ?>
                        <th abbr="download_time" axis="col6" class="w60">
                            <div class="tc">下载</div>
                        </th>
                        <?php endif; ?>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">发布时间</div>
                        </th>
                        <th axis="col1" class="w160">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc sort_style"><a href="<?php echo getArchivesSortUrl('sort_order'); ?>">排序&nbsp;<i <?php if(\think\Request::instance()->param('orderby') == 'sort_order'): if(\think\Request::instance()->param('orderway') == 'asc'): ?>class="asc"<?php else: ?>class="desc"<?php endif; endif; ?>></i></a></div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>" autocomplete="off"></div>
                            </td>
                           
                            <td class="sort">
                                <div class="tc w70">
                                    <?php echo $vo['aid']; ?>
                                </div>
                            </td>
                            <td class="" style="width: 100%;">
                                <div class="tl pdl10" >
                                    <?php if(!(empty($vo['is_litpic']) || (($vo['is_litpic'] instanceof \think\Collection || $vo['is_litpic'] instanceof \think\Paginator ) && $vo['is_litpic']->isEmpty()))): ?>
                                        <i class="fa fa-picture-o color_z" onmouseover="layer_tips=layer.tips('<img src=<?php echo $vo['litpic']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});" onmouseout="layer.close(layer_tips);"></i>
                                    <?php endif; if(is_check_access('Archives@edit') == '1'): if(empty($channelRow[$vo['channel']]['ifsystem'])): ?>
                                            <a href="<?php echo url('Custom/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'), 'channel'=>$vo['channel'])); ?>" style="<?php if($vo['is_b'] == '1'): ?> font-weight: bold;<?php endif; ?>"><?php echo $vo['title']; ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'))); ?>" style="<?php if($vo['is_b'] == '1'): ?> font-weight: bold;<?php endif; ?>"><?php echo $vo['title']; ?></a>
                                        <?php endif; else: ?>
                                    <?php echo $vo['title']; endif; $showArcFlagData = showArchivesFlagStr($vo); if(is_array($showArcFlagData) || $showArcFlagData instanceof \think\Collection || $showArcFlagData instanceof \think\Paginator): $i = 0; $__LIST__ = $showArcFlagData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i == '1'): ?><span style="color: red;">[<?php endif; ?>
                                        <i style="font-size: 12px;"><?php echo $vo1['small_name']; ?></i>
                                        <?php if($i == count($showArcFlagData)): ?>]</span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w110 tc"><a href="<?php echo url('Archives/index_archives', array('typeid'=>$vo['typeid'])); ?>"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></a></div>
                            </td>
                            <td>
                                <div class="tc w60">
                                    <?php if($vo['arcrank'] == -1): ?>
                                        <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?> data-typeid="<?php echo $vo['typeid']; ?>" data-seo_pseudo="<?php echo (isset($seo_pseudo) && ($seo_pseudo !== '')?$seo_pseudo:'1'); ?>" onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','arcrank',this);" <?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                                    <?php else: ?>
                                        <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?> data-typeid="<?php echo $vo['typeid']; ?>" data-seo_pseudo="<?php echo (isset($seo_pseudo) && ($seo_pseudo !== '')?$seo_pseudo:'1'); ?>" onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','arcrank',this);" <?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="tc w60">
                                    <?php echo $vo['click']; ?>
                                </div>
                            </td>
                            <?php if(!empty($arctype_info) && $arctype_info['current_channel'] == 4): ?>
                            <td>
                                <div class="tc w60">
                                    <?php echo $vo['downcount']; ?>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td>
                                <div class="w100 tc">
                                    <?php echo date('Y-m-d',$vo['add_time']); ?>
                                </div>
                            </td>
                            <td class="operation">
                                <div class="w160 tc">
                                    <?php if(is_check_access('Archives@edit') == '1'): if(empty($channelRow[$vo['channel']]['ifsystem'])): ?>
                                            <a href="<?php echo url('Custom/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'), 'channel'=>$vo['channel'])); ?>" class="btn blue">编辑</a>
                                        <?php else: ?>
                                            <a href="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>\think\Request::instance()->param('typeid'))); ?>" class="btn blue">编辑</a>
                                        <?php endif; ?>
                                        <i></i>
                                    <?php endif; if(is_check_access('Archives@del') == '1'): ?>
                                        <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Archives/del'); ?>" data-id="<?php echo $vo['aid']; ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?> onClick="delfun(this);">删除</a>
                                        <i></i>
                                    <?php endif; ?>
                                    <a href="<?php echo $vo['arcurl']; ?>" target="_blank" class="btn blue">浏览</a>
                                </div>
                            </td>
                             <td class="sort">
                                <div class="w60 tc">
                                    <?php if(is_check_access('Archives@edit') == '1'): ?>
                                    <input type="text" onChange="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" />
                                    <?php else: ?>
                                    <?php echo $vo['sort_order']; endif; ?>
                                </div>
                            </td>
                            
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="footer-oper">
            <span class="ml15">
                <input type="checkbox" class="checkAll" autocomplete="off">
            </span>
            <div class="nav-dropup">
                <button class="layui-btn layui-btn-primary dropdown-bt">批量操作<i class="layui-icon layui-icon-up"></i></button>
                <div class="dropdown-menus" style="display:none; <?php if(0 < $pager->totalRows && ($pager->totalRows < 4 || $pager->listRows < 4)): ?>top:28px;bottom:unset;border-bottom:1px solid rgba(0,0,0,.15);border-top:none; min-height: 250px;<?php endif; ?>">
                    <?php if(is_check_access('Archives@batch_attr') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量新增属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'add']); ?>">新增属性</a>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量删除属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'del']); ?>">删除属性</a>
                    <hr class="layui-bg-gray">
                    <?php endif; if(is_check_access('Archives@batch_copy') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_batch_copy(this, 'ids');" data-url="<?php echo url('Archives/batch_copy', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>">复制文档</a>
                    <?php endif; if(is_check_access('Archives@move') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_move(this, 'ids');" data-url="<?php echo url('Archives/move', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>">移动文档</a>
                    <?php endif; if(is_check_access('Archives@del') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_del(this, 'ids');" data-url="<?php echo url('Archives/del'); ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?>>删除文档</a>
                    <?php endif; if(is_check_access('Archives@check') == '1'): ?>
                    <hr class="layui-bg-gray">
                    <a href="javascript:void(0);" onclick="batch_check(this, 'ids');" data-url="<?php echo url('Archives/check'); ?>">审核文档</a>
                    <a href="javascript:void(0);" onclick="batch_check(this, 'ids');" data-url="<?php echo url('Archives/uncheck'); ?>">取消审核</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(is_check_access('RecycleBin@archives_index') == '1'): if($recycle_switch != '1'): ?>
                <a href="<?php echo url('RecycleBin/archives_index'); ?>" class="layui-btn layui-btn-primary" title="回收站">回收站</a>
            <?php endif; endif; ?>
            <div class="fbuttonr">
    <div class="pages">
       <?php echo $page; ?>
    </div>
</div>
<div class="fbuttonr">
    <div class="total">
        <h5>共有<?php echo $pager->totalRows; ?>条,每页显示
            <select name="pagesize" style="width: 60px;" onchange="ey_selectPagesize(this);">
                <option <?php if($pager->listRows == 20): ?> selected <?php endif; ?> value="20">20</option>
                <option <?php if($pager->listRows == 50): ?> selected <?php endif; ?> value="50">50</option>
                <option <?php if($pager->listRows == 100): ?> selected <?php endif; ?> value="100">100</option>
                <option <?php if($pager->listRows == 200): ?> selected <?php endif; ?> value="200">200</option>
            </select>
        </h5>
    </div>
</div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('input[name*=ids]').click(function(){
            if ($('input[name*=ids]').length == $('input[name*=ids]:checked').length) {
                $('.checkAll').prop('checked','checked');
            } else {
                $('.checkAll').prop('checked', false);
            }
        });
        $('input[type=checkbox].checkAll').click(function(){
            $('input[type=checkbox]').prop('checked',this.checked);
        });
    });
    
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // 选择栏目检索出相应文档列表
        $('#typeid').change(function(){
          $('#searchForm').submit();
        });

        // 批量操作
        $(".dropdown-bt").click(function(){
            $(".dropdown-menus").slideToggle(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $(".dropdown-menus").slideUp(200);
            event.stopPropagation();
        })
    });

    var aids = '';
    function func_move(obj, name)
    {
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 2, title:false});
            return;
        }

        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '移动文档',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['350px', '260px'],
            content: url
        });
    }

    /**
     * 获取修改之前的内容
     */
    function get_aids()
    {
        return aids;
    }

    /**
     * 批量审核
     */
    function batch_check(obj, name) {

        var url = $(obj).attr('data-url');

        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 2, title:false});
            return;
        }

        // title = '批量审核';
        // btn = ['确定', '取消']; //按钮
        // // 删除按钮
        // layer.confirm(title, {
        //     title: false,
        //     btn: btn //按钮
        // }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: url,
                data: {ids:a, _ajax:1},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                }
            });
        // }, function (index) {
        //     layer.closeAll(index);
        // });
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>