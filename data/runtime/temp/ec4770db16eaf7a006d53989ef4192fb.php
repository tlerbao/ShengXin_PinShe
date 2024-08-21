<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:52:"./application/admin/template/arctype/single_edit.htm";i:1635510274;s:69:"/www/ShengXin/PinSheSite/application/admin/template/public/layout.htm";i:1635510274;s:72:"/www/ShengXin/PinSheSite/application/admin/template/public/theme_css.htm";i:1635510274;s:74:"/www/ShengXin/PinSheSite/application/admin/template/field/addonextitem.htm";i:1635510274;s:82:"/www/ShengXin/PinSheSite/application/admin/template/diy_extend/archives_extend.htm";i:1571728724;s:69:"/www/ShengXin/PinSheSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
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
<script type="text/javascript" src="/public/plugins/laydate/laydate.js"></script>

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v1.5.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v1.5.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v1.5.5"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?v=v1.5.5"></script>
<?php endif; ?>

<body style="background-color: #FFF; overflow: auto;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-angle-double-left"></i>返回</a>
            <div class="subject">
                <h3><?php echo (isset($info['typename']) && ($info['typename'] !== '')?$info['typename']:''); ?> - 内容管理</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Arctype/single_edit'); ?>" method="post">
        <!-- 常规选项 -->
        <div class="ncap-form-default tab_div_1">
            
<!-- 用户自定义扩展模板文件 -->

<!-- 用户自定义扩展模板文件，仅用于文档的新增和编辑页面 -->

<?php 
    // 这里可以实现原生php代码
    $diyExtendLogic = new \app\admin\logic\DiyExtendLogic;
 ?>

<!-- 这里自定义HTML表单代码 -->

<!-- end -->

<?php if(is_array($addonFieldExtList) || $addonFieldExtList instanceof \think\Collection || $addonFieldExtList instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!isset($vo['ifeditable']) || $vo['ifeditable']): switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <dl class="row" style="display: none;">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 隐藏域 start -->
            <?php break; case "region": ?>
                <!-- 区域选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <label>
                                <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2['id']; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2['id'], $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2['name']; ?>
                            </label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 区域选项 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">          
                        <textarea rows="5" cols="60" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" style="height:60px;"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> onclick="func_<?php echo $vo['name']; ?>_eyempty();"><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]" value="<?php if(!empty($vo['trueValue'])): ?>1<?php else: ?>0<?php endif; ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    function func_<?php echo $vo['name']; ?>_eyempty()
                    {
                        var len = $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>][]']:checked").length;
                        $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]']").val(len);
                    }
                </script>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 单选项 end -->
            <?php break; case "switch": ?>
                <!-- 开关 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="onoff">
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" class="cb-enable <?php if(0 != $vo['dfvalue']): ?>selected<?php endif; ?>">是</label>
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" class="cb-disable <?php if(0 == $vo['dfvalue']): ?>selected<?php endif; ?>">否</label>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="1" type="radio" <?php if(0 != $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="0" type="radio" <?php if(0 == $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                        </div>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    $(function(){
                        //自定义radio样式
                        $(".cb-enable").on('click', function(){
                            var parent = $(this).parents('.onoff');
                            $('.cb-disable',parent).removeClass('selected');
                            $(this).addClass('selected');
                            $('.checkbox',parent).attr('checked', true);
                        });
                        $(".cb-disable").on('click', function(){
                            var parent = $(this).parents('.onoff');
                            $('.cb-enable',parent).removeClass('selected');
                            $(this).addClass('selected');
                            $('.checkbox',parent).attr('checked', false);
                        });
                    });
                </script>
                <!-- 开关 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 下拉框 end -->
            <?php break; case "img": ?>
                <!-- 单张图 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                            <span class="show">
                                <a id="img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:'javascript:void(0);'); ?>">
                                    <i id="img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="fa fa-picture-o" <?php if(!(empty($vo[$vo['name'].'_eyou_local']) || (($vo[$vo['name'].'_eyou_local'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_local'] instanceof \think\Paginator ) && $vo[$vo['name'].'_eyou_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $vo[$vo['name'].'_eyou_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                                </a>
                            </span>
                            <span class="type-file-box">
                                <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text" autocomplete="off">
                                <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                                <input class="type-file-file" onClick="GetUploadify(1,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back')" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>"
                                     title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                            </span>
                        </div>
                        <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                        &nbsp;
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程图片</label>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(fileurl_tmp)
                    {
                      $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(fileurl_tmp);
                      $("#img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href', fileurl_tmp);
                      $("#img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
                    }
                </script>
                <!-- 单张图 end -->
            <?php break; case "file": ?>
            <!-- 单个文件 start -->
            <dl class="row">
                <dt class="tit">
                    <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="nyroModal" rel="gal" href="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:'javascript:void(0);'); ?>" download="<?php echo get_filename($vo[$vo['name'].'_eyou_local']); ?>">
                                <i id="file_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="layui-icon layui-icon-file-b" ></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button" value="选择上传..." class="type-file-button">
                            <input title="点击前方文件图标可下载文件，点击按钮选择文件并提交表单后上传生效" class="type-file-file" type="file" data-type="<?php echo $vo['upload_flag']; ?>" onchange="upload_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_1585641737(this)" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                        </span>
                    </div>
                    <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程文件</label>
                    <span class="err"></span>
                    <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                </dd>
            </dl>
            <script type="text/javascript">
                function upload_file_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_1585641737(e){
                    var data_type = $(e).attr('data-type');
                    if ('qny' == data_type) {
                        // 七牛云上传
                        <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_file(e);
                    } else if ('oss' == data_type) {
                        // OSS上传
                        <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_file(e);
                    } else if ('cos' == data_type) {
                        // COS上传
                        <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_file(e);
                    } else {
                        // 本地上传
                        <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_file(e);
                    }
                }
                function judgeExtFile(ext) {
                    var type = '<?php echo $vo['ext']; ?>';
                    var extArr = [];
                    extArr = type.split("|");
                    var exts = ext.replace(".","");
                    return extArr.indexOf(exts);
                }

                // 七牛云
                function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_file(e) {
                    // 获取文件路径名
                    var file = $(e)[0].files[0];

                    // 验证上传格式
                    var fileName = file.name;
                    var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                    var ext = judgeExtFile(fileExt);
                    if (ext == -1) {
                        showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                        return false;
                    }

                    // 验证上传大小
                    size = parseInt("<?php echo $vo['filesize']; ?>");
                    if (file.size > size) {
                        showErrorMsg('附件大小超过限制,可在附件设置中修改');
                        return false;
                    }

                    // 执行上传
                    layer_loading('上传七牛云');
                    $.ajax({
                        type: 'POST',
                        url: '/index.php?m=plugins&c=Qiniuyun&a=qiniu_upload',
                        data: {_ajax: 1},
                        dataType: "JSON",
                        success: function(res1) {
                            if (1 == res1.code) {
                                var token  = res1.data.token;
                                var formData = new FormData();
                                formData.append('file', file);
                                formData.append('token', token);

                                fileName = res1.data.filePath + fileExt;
                                formData.append('key', fileName);
                                $.ajax({
                                    url: res1.data.uphost,
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: formData,
                                    timeout: 1200000,
                                    cache: false,
                                    processData: false,
                                    contentType: false,
                                    xhr: function () {
                                        myXhr = $.ajaxSettings.xhr();
                                        if (myXhr.upload) {
                                            myXhr.upload.addEventListener('progress', function(e){
                                                var curr = e.loaded;
                                                var total = e.total;
                                                process = parseInt(curr / total * 100);
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传中...'+process+"%");
                                            });
                                        }
                                        return myXhr;
                                    },
                                    success: function(res2) {
                                        layer.closeAll();
                                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传成功');
                                        setTimeout(function() {
                                            $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button').text('选择上传...');
                                        }, 2000);
                                        var video_url = res1.data.domain + "/" + res2.key;
                                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(video_url);
                                        $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',video_url);
                                        var  arr = video_url.split("/");
                                        var download = arr[arr.length-1];
                                        $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);
                                    },
                                    error: function(e) {
                                        layer.closeAll();
                                        showErrorMsg(e.responseText);
                                        return false;
                                    }
                                });
                            } else {
                                layer.closeAll();
                                showErrorMsg(res1.msg);
                            }
                        },
                        error: function(e) {
                            layer.closeAll();
                            showErrorMsg(e.responseText);
                        }
                    });
                }

                //OSS
                function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_file(e) {
                    // 获取文件路径名
                    var file = $(e)[0].files[0];

                    // 验证上传格式
                    var fileName = file.name;
                    var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                    var ext = judgeExtFile(fileExt);
                    if (ext == -1) {
                        showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                        return false;
                    }

                    // 验证上传大小
                    size = parseInt("<?php echo $vo['filesize']; ?>");
                    if (file.size > size) {
                        showErrorMsg('附件大小超过限制,可在附件设置中修改');
                        return false;
                    }

                    // 执行上传
                    layer_loading('上传阿里云OSS');
                    $.ajax({
                        type: 'POST',
                        url: '/index.php?m=plugins&c=AliyunOss&a=oss_upload',
                        data: {_ajax: 1},
                        dataType: "JSON",
                        success: function(res1){
                            if (1 == res1.code){
                                fileName = res1.data.filePath + fileExt;
                                //组装发送数据
                                var request = new FormData();
                                request.append("OSSAccessKeyId",res1.data.accessid);
                                request.append("policy",res1.data.policy);
                                request.append("Signature",res1.data.signature);
                                request.append("key",fileName);
                                request.append("success_action_status",201);
                                request.append('file', file);

                                $.ajax({
                                    url : res1.data.host,
                                    data : request,
                                    processData: false,
                                    cache: false,
                                    contentType: false,
                                    dataType: 'xml',
                                    type : 'post',
                                    xhr: function () {
                                        myXhr = $.ajaxSettings.xhr();
                                        if (myXhr.upload) {
                                            myXhr.upload.addEventListener('progress', function(e){
                                                var curr = e.loaded;
                                                var total = e.total;
                                                var process = parseInt(curr / total * 100);
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传中...'+process+"%");
                                            });
                                        }
                                        return myXhr;
                                    },
                                    success : function(data) {
                                        layer.closeAll();
                                        var res = $(data).find('PostResponse');
                                        if (res) {
                                            var key = res.find('Key').text();
                                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传成功');
                                            setTimeout(function() {
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('选择上传...');
                                            }, 2000);
                                            var video_url = res1.data.domain + "/" + key;
                                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(video_url);
                                            $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',video_url);
                                            var  arr = video_url.split("/");
                                            var download = arr[arr.length-1];
                                            $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);

                                        } else {
                                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传失败');
                                            setTimeout(function() {
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('选择上传...');
                                            }, 2000);
                                        }
                                    },
                                    error : function(e) {
                                        layer.closeAll();
                                        console.log(e.responseText);
                                    }
                                });
                            } else {
                                layer.closeAll();
                                showErrorMsg(res1.msg);
                            }
                        },
                        error: function(e) {
                            layer.closeAll();
                            showErrorMsg(e.responseText);
                        }
                    });
                }

                //COS
                function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_file(e) {
                    // 获取文件路径名
                    var file = $(e)[0].files[0];

                    // 验证上传格式
                    var fileName = file.name;
                    var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                    var ext = judgeExtFile(fileExt);
                    if (ext == -1) {
                        showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式，可在附件设置中修改');
                        return false;
                    }

                    // 验证上传大小
                    size = parseInt("<?php echo $vo['filesize']; ?>");
                    if (file.size > size) {
                        showErrorMsg('附件大小超过限制，可在附件设置中修改');
                        return false;
                    }

                    // 上传参数
                    var formData = new FormData();
                    formData.append('file', file);
                    formData.append('file_ext', fileExt);

                    // 执行上传
                    $.ajax({
                        type: 'post',
                        url: '/index.php?m=plugins&c=Cos&a=cos_upload&_ajax=1',
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        xhr: function () {
                            myXhr = $.ajaxSettings.xhr();
                            if (myXhr.upload) {
                                myXhr.upload.addEventListener('progress', function(e){
                                    var curr = e.loaded;
                                    var total = e.total;
                                    process = parseInt(curr / total * 100);
                                    if (100 == process) {
                                        process = 99;
                                        layer_loading('上传腾讯云');
                                    }
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media").text('上传中...'+process+"%");
                                });
                            }
                            return myXhr;
                        },
                        success: function(res) {
                            layer.closeAll();
                            if (1 == res.code) {
                                video_url = res.data.url;
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(video_url);
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',video_url);
                                var  arr = video_url.split("/");
                                var download = arr[arr.length-1];
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);

                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传成功');
                            } else {
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").text('上传失败');
                            }
                            setTimeout(function() {
                                $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button').text('选择上传...');
                            }, 2000);
                        },
                        error: function(e) {
                            layer.closeAll();
                            showErrorMsg(e.responseText);
                        }
                    });
                }

                // 本地上传
                function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_file(e){
                    // 获取文件路径名
                    var file = $(e)[0].files[0];
                    // 验证上传格式
                    var fileName = file.name;
                    var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                    var ext = judgeExtFile(fileExt);
                    if (ext == -1) {
                        showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                        return false;
                    }

                    // 验证上传大小
                    size = parseInt("<?php echo $vo['filesize']; ?>");
                    if (file.size > size) {
                        showErrorMsg('附件大小超过限制,可在附件设置中修改');
                        return false;
                    }

                    // 定义上传数据
                    var formData = new FormData();
                    formData.append('file', file);

                    // 执行上传
                    layer_loading('上传本地');
                    $.ajax({
                        type: 'post',
                        url : "<?php echo url('Ueditor/DownloadUploadFileAjax'); ?>",
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        xhr: function () {
                            myXhr = $.ajaxSettings.xhr();
                            if (myXhr.upload) {
                                myXhr.upload.addEventListener('progress', function(e){
                                    var curr = e.loaded;
                                    var total = e.total;
                                    process = parseInt(curr / total * 100);
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").html('上传中...'+process+"%");
                                });
                            }
                            return myXhr;
                        },
                        success: function (res) {
                            layer.closeAll();
                            if (res.code==0){
                                layer.msg(res.msg)
                                setTimeout(function() {
                                    $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button').html('选择上传...');
                                }, 2000);
                            }else {
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button").html('上传成功');
                                setTimeout(function() {
                                    $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_button').html('选择上传...');
                                }, 2000);

                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(res.file_url);
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href',res.file_url);
                                var  arr = res.file_url.split("/");
                                var download = arr[arr.length-1];
                                $("#file_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('download',download);
                            }
                        }
                    });
                }
            </script>
            <!-- 单个文件 end -->
            <?php break; case "imgs": ?>
                <!-- 多张图 start -->
                <dl class="row" id="dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="tab-pane pics" id="tab_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                          <!-- <a href="javascript:void(0);" onClick="GetUploadify(100,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');" class="imgupload">
                                <i class="fa fa-photo"></i>上传图片
                            </a> -->
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td >
                                        <div class="sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                                            <?php if(is_array($vo[$vo['name'].'_eyou_imgupload_list']) || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo[$vo['name'].'_eyou_imgupload_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($k2 % 2 );++$k2;?>
                                            <div class="images_upload images_upload_html" style="display:inline-block;">
                                                <div style="position: relative; height: 130px;">
                                                    <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2['image_url']; ?>">
                                                    <a href="<?php echo $v2['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                        <img src="<?php echo $v2['image_url']; ?>" width="136" height="136">
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'<?php echo $v2['image_url']; ?>')" class="delect" title="删除"></a>
                                                </div>
                                                <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"><?php echo $v2['intro']; ?></textarea>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <div class="images_upload"></div>
                                        </div>
                                        <a href="javascript:void(0);" onClick="GetUploadify(100,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');"  class="img-upload mb15" title="点击上传">
                                             <div class="y-line"></div>
                                             <div class="x-line"></div>
                                         </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 上传图片显示的样板 start -->
                        <div class="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl none">
                            <div class="images_upload images_upload_html" style="display:inline-block;">
                                <div style="position: relative; height: 130px;">
                                    <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="" />
                                    <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                        <img src="/public/static/admin/images/add-button.jpg" width="136" height="136" />
                                    </a>
                                    <a href="javascript:void(0)" class="delect" title="删除">&nbsp;&nbsp;</a>
                                </div>
                                <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"></textarea>
                            </div>
                        </div>
                        <!-- 上传图片显示的样板 end -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 上传多图回调函数
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(paths){
                        
                        var  last_div = $(".<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl").html();
                        for (var i=0;i<paths.length ;i++ )
                        {
                            if ($(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html").length > 0) {
                                $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").after(last_div);  // 插入一个 新图片
                            } else {
                                $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload:last").before(last_div);  // 插入一个 新图片
                            }
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('img').attr('src',paths[i]);// 修改他的图片路径
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('a:eq(1)').attr('onclick',"<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'"+paths[i]+"')").text('');
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('input').val(paths[i]); // 设置隐藏域 要提交的值
                        }             
                    }
                    /*
                     * 上传之后删除组图input     
                     * @access   public
                     * @val      string  删除的图片input
                     */
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(obj,path)
                    {
                        // 删除数据库记录
                        $.ajax({
                            type:'GET',
                            url:"<?php echo url('Field/del_channelimgs', ['_ajax'=>1]); ?>",
                            data:{filename:path,channel:"<?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>",fieldname:"<?php echo $vo['name']; ?>",aid:"<?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>"},
                            success:function(){
                                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                                $.ajax({
                                    type:'GET',
                                    url:"<?php echo url('Uploadify/delupload', ['_ajax'=>1]); ?>",
                                    data:{action:"del", filename:path},
                                    success:function(){}
                                });
                            }
                        });    
                    }

                    /** 以下 产品相册的拖动排序相关 js*/

                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).sortable({
                        start: function( event, ui) {
                        
                        }
                        ,stop: function( event, ui ) {

                        }
                    });
                    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).disableSelection();
                </script>
                <!-- 多张图 end -->
            <?php break; case "int": ?>
                <!-- 整数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="只允许纯数字" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 整数类型 end -->
            <?php break; case "float": ?>
                <!-- 小数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的数值" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 小数类型 end -->
            <?php break; case "decimal": ?>
                <!-- 金额类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的金额" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <!-- 金额类型 end -->
            <?php break; case "datetime": ?>
                <!-- 日期和时间 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" class="input-txt" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" value="<?php echo $vo['dfvalue']; ?>" autocomplete="off">        
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </span> 
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script type="text/javascript">
                    layui.use('laydate', function() {
                        var laydate = layui.laydate;

                        //常规用法
                        laydate.render({
                            elem: "#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>"
                            ,type: 'datetime'
                        });
                    })
                </script>
                <!-- 日期和时间 end -->
            <?php break; case "htmltext": ?>
                <!-- HTML文本 start -->
                <?php if($editor['editor_select'] == '1'): ?>
                    <dl class="row">
                        <dt class="tit">
                            <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                        </dt>
                        <dd class="opt">
                            <?php if(isset($vo['first']) AND 1 == $vo['first']): ?>
                            <label class="curpoin"><input type="checkbox" id="editor_remote_img_local" data-val="<?php echo $vo['editor']['editor_remote_img_local']; ?>" <?php if($vo['editor']['editor_remote_img_local'] == '1'): ?> checked <?php endif; ?>>远程图片本地化</label>
                            &nbsp;
                            <label class="curpoin"><input type="checkbox" id="editor_img_clear_link" data-val="<?php echo $vo['editor']['editor_img_clear_link']; ?>" <?php if($vo['editor']['editor_img_clear_link'] == '1'): ?> checked <?php endif; ?>>清除非本站链接</label>
                            <?php endif; ?>
                            <textarea class="span12 ckeditor" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" data-func="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" title=""><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                            <!--<div class="opt-moreOper">-->
                                <!--<p>-->
                                    <!--<a href="javascript:void(0);" onclick="remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2">远程图片本地化</a>&nbsp;-->
                                    <!--<a href="javascript:void(0);" onclick="replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2">清除非本站链接</a>&nbsp;-->
                                <!--</p>-->
                            <!--</div>-->
                            <span class="err"></span>
                            <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                        </dd>
                    </dl>
                    <script type="text/javascript">
                        var ue_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> = UE.getEditor('<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>',{
                            serverUrl :"<?php echo url('Ueditor/index',array('savepath'=>'allimg')); ?>",
                            zIndex: 999,
                            initialFrameWidth: "100%", //初化宽度
                            initialFrameHeight: 450, //初化高度            
                            focus: false, //初始化时，是否让编辑器获得焦点true或false
                            maximumWords: 99999,
                            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
                            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
                            autoHeightEnabled: false,
                            toolbars: ueditor_toolbars
                        });

                        //必须在提交前渲染编辑器；
                        function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                            //判断编辑模式状态:0表示【源代码】HTML视图；1是【设计】视图,即可见即所得；-1表示不可用
                            if(UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").queryCommandState('source') != 0) {
                                UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").execCommand('source'); //切换到【设计】视图
                            }
                        }

                        // 远程图片本地化
                        function remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                            var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                            layer_loading('下载中');
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_remote_to_local'); ?>",
                                data: {body:body,_ajax:1},
                                dataType: "JSON",
                                success: function(res){
                                    layer.closeAll();
                                    if (res.code == 1) {
                                        UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                        layer.msg(res.msg, {icon: 1, time:1000});
                                    } else {
                                        showErrorMsg(res.msg);
                                    }
                                },
                                error: function(e){
                                    layer.closeAll();
                                    showErrorMsg(res.msg);
                                }
                            });
                        }

                        // 清除非本站链接
                        function replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                            var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                            layer_loading('正在处理');
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_replace_links'); ?>",
                                data: {body:body,_ajax:1},
                                dataType: "JSON",
                                success: function(res){
                                    layer.closeAll();
                                    if (res.code == 1) {
                                        UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                        layer.msg(res.msg, {icon: 1, time:1000});
                                    } else {
                                        showErrorMsg(res.msg);
                                    }
                                },
                                error: function(e){
                                    layer.closeAll();
                                    showErrorMsg(res.msg);
                                }
                            });
                        }

                        // 自动远程图片本地化/自动清除非本站链接
                        function ajax_auto_editor_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(local,link) {
                            var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_auto_editor'); ?>",
                                data: {local:local,link:link,body:body,_ajax:1},
                                dataType: "JSON",
                                async:false,
                                success: function(res){
                                    if (res.code == 1) {
                                        UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                    }
                                }
                            });
                        }
                    </script>
                <?php else: ?>
                    <dl class="row">
                        <dt class="tit">
                            <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                        </dt>
                        <dd class="opt">
                            <?php if(isset($vo['first']) AND 1 == $vo['first']): ?>
                            <label class="curpoin"><input type="checkbox" id="editor_remote_img_local" data-val="<?php echo $vo['editor']['editor_remote_img_local']; ?>" <?php if($vo['editor']['editor_remote_img_local'] == '1'): ?> checked <?php endif; ?> >远程图片本地化</label>
                            &nbsp;
                            <label class="curpoin"><input type="checkbox" id="editor_img_clear_link" data-val="<?php echo $vo['editor']['editor_img_clear_link']; ?>" <?php if($vo['editor']['editor_img_clear_link'] == '1'): ?> checked <?php endif; ?> >清除非本站链接</label>
                            <?php endif; ?>
                            <textarea id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                            <!--<div class="opt-moreOper">-->
                                <!--<p>-->
                                    <!--<a href="javascript:void(0);" onclick="remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2">远程图片本地化</a>&nbsp;-->
                                    <!--<a href="javascript:void(0);" onclick="replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>();" class="ncap-btn2">清除非本站链接</a>&nbsp;-->
                                <!--</p>-->
                            <!--</div>-->
                            <span class="err"></span>
                            <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                        </dd>
                    </dl>
                    <script type="text/javascript">
                        // 加载编辑器，若存在编辑器则先进行销毁
                        try {
                            var elemtid = "<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>";
                            var editor = CKEDITOR.instances[elemtid];
                            if (editor) editor.destroy(true);
                        } catch(e) {}

                        CKEDITOR.replace(elemtid, {
                            filebrowserBrowseUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                            filebrowserImageBrowseUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                            filebrowserUploadUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                            filebrowserImageUploadUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                        });

                        // 远程图片本地化
                        function remote_to_local_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                            var body = CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.getData();
                            layer_loading('下载中');
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_remote_to_local'); ?>",
                                data: {body:body,_ajax:1},
                                dataType: "JSON",
                                success: function(res){
                                    layer.closeAll();
                                    if (res.code == 1) {
                                        CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.setData(res.data.body);
                                        layer.msg(res.msg, {icon: 1, time:1000});
                                    } else {
                                        showErrorMsg(res.msg);
                                    }
                                },
                                error: function(e){
                                    layer.closeAll();
                                    showErrorMsg(res.msg);
                                }
                            });
                        }

                        // 清除非本站链接
                        function replace_links_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                            var body = CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.getData();
                            layer_loading('正在处理');
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_replace_links'); ?>",
                                data: {body:body,_ajax:1},
                                dataType: "JSON",
                                success: function(res){
                                    layer.closeAll();
                                    if (res.code == 1) {
                                        CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.setData(res.data.body);
                                        layer.msg(res.msg, {icon: 1, time:1000});
                                    } else {
                                        showErrorMsg(res.msg);
                                    }
                                },
                                error: function(e){
                                    layer.closeAll();
                                    showErrorMsg(res.msg);
                                }
                            });
                        }

                        // 自动远程图片本地化/自动清除非本站链接
                        function ajax_auto_editor_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(local,link) {
                            var body = CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.getData();
                            $.ajax({
                                type: 'POST',
                                url: "<?php echo url('Archives/ajax_auto_editor'); ?>",
                                data: {local:local,link:link,body:body,_ajax:1},
                                dataType: "JSON",
                                async:false,
                                success: function(res){
                                    if (res.code == 1) {
                                        CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.setData(res.data.body);
                                    }
                                }
                            });
                        }

                    </script>
                <?php endif; ?>
                <!-- HTML文本 end -->
            <?php break; ?>

            <!-- 多媒体类型 start -->
            <?php case "media": ?>
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" style="width: 400px !important;" >
                        <input type="file" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media" onchange="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media_20210408(this)" style="display: none;">
                        <?php if(qny == $vo['upload_flag']): ?>
                        <button type="button" class="layui-btn" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media" onclick="$('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media').attr('data-type', 'qny').trigger('click');">七牛云上传</button>
                        <?php elseif(oss == $vo['upload_flag']): ?>
                        <button type="button" class="layui-btn" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media" onclick="$('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media').attr('data-type', 'oss').trigger('click');">oss上传</button>
                        <?php elseif(cos == $vo['upload_flag']): ?>
                        <button type="button" class="layui-btn" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media" onclick="$('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media').attr('data-type', 'cos').trigger('click');">cos上传</button>
                        <?php else: ?>
                        <button type="button" class="layui-btn" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_upload_media" onclick="$('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media').attr('data-type', 'local').trigger('click');">本地上传</button>
                        <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </dl>
                <script>
                    // 上传媒体文件
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_media_20210408(e){
                        var data_type = $(e).attr('data-type');
                        if ('qny' == data_type) {
                            // 七牛云上传
                            <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media(e);
                        } else if ('oss' == data_type) {
                            // OSS上传
                            <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media(e);
                        } else if ('cos' == data_type) {
                            // COS上传
                            <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media(e);
                        } else {
                            // 本地上传
                            <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_upload_media(e);
                        }
                    }
                    function judgeExtMedia(ext) {
                        var type = '<?php echo $vo['ext']; ?>';
                        var extArr = [];
                        extArr = type.split("|");
                        var exts = ext.replace(".","");
                        return extArr.indexOf(exts);
                    }

                    // 七牛云
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media(e) {
                        // 获取文件路径名
                        var file = $(e)[0].files[0];

                        // 验证上传格式
                        var fileName = file.name;
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        var ext = judgeExtMedia(fileExt);
                        if (ext == -1) {
                            showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                            return false;
                        }

                        // 验证上传大小
                        size = parseInt("<?php echo $vo['filesize']; ?>");
                        if (file.size > size) {
                            showErrorMsg('文件大小超过限制,可在附件设置中修改');
                            return false;
                        }

                        // 执行上传
                        layer_loading('上传七牛云');
                        $.ajax({
                            type: 'POST',
                            url: '/index.php?m=plugins&c=Qiniuyun&a=qiniu_upload',
                            data: {_ajax: 1},
                            dataType: "JSON",
                            success: function(res1) {
                                if (1 == res1.code) {
                                    var token  = res1.data.token;
                                    var formData = new FormData();
                                    formData.append('file', file);
                                    formData.append('token', token);

                                    fileName = res1.data.filePath + fileExt;
                                    formData.append('key', fileName);
                                    $.ajax({
                                        url: res1.data.uphost,
                                        type: 'POST',
                                        dataType: 'JSON',
                                        data: formData,
                                        timeout: 1200000,
                                        cache: false,
                                        processData: false,
                                        contentType: false,
                                        xhr: function () {
                                            myXhr = $.ajaxSettings.xhr();
                                            if (myXhr.upload) {
                                                myXhr.upload.addEventListener('progress', function(e){
                                                    var curr = e.loaded;
                                                    var total = e.total;
                                                    process = parseInt(curr / total * 100);
                                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media").text('上传中...'+process+"%");
                                                });
                                            }
                                            return myXhr;
                                        },
                                        success: function(res2) {
                                            layer.closeAll();
                                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media").text('上传成功');
                                            setTimeout(function() {
                                                $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_qny_upload_media').text('七牛云上传');
                                            }, 2000);
                                            var video_url = res1.data.domain + "/" + res2.key;
                                            $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val(video_url);
                                        },
                                        error: function(e) {
                                            layer.closeAll();
                                            showErrorMsg(e.responseText);
                                            return false;
                                        }
                                    });
                                } else {
                                    layer.closeAll();
                                    showErrorMsg(res1.msg);
                                }
                            },
                            error: function(e) {
                                layer.closeAll();
                                showErrorMsg(e.responseText);
                            }
                        });
                    }

                    //OSS
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media(e) {
                        // 获取文件路径名
                        var file = $(e)[0].files[0];

                        // 验证上传格式
                        var fileName = file.name;
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        var ext = judgeExtMedia(fileExt);
                        if (ext == -1) {
                            showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                            return false;
                        }

                        // 验证上传大小
                        size = parseInt("<?php echo $vo['filesize']; ?>");
                        if (file.size > size) {
                            showErrorMsg('文件大小超过限制,可在附件设置中修改');
                            return false;
                        }

                        // 执行上传
                        layer_loading('上传阿里云OSS');
                        $.ajax({
                            type: 'POST',
                            url: '/index.php?m=plugins&c=AliyunOss&a=oss_upload',
                            data: {_ajax: 1},
                            dataType: "JSON",
                            success: function(res1){
                                if (1 == res1.code){
                                    fileName = res1.data.filePath + fileExt;
                                    //组装发送数据
                                    var request = new FormData();
                                    request.append("OSSAccessKeyId",res1.data.accessid);
                                    request.append("policy",res1.data.policy);
                                    request.append("Signature",res1.data.signature);
                                    request.append("key",fileName);
                                    request.append("success_action_status",201);
                                    request.append('file', file);

                                    $.ajax({
                                        url : res1.data.host,
                                        data : request,
                                        processData: false,
                                        cache: false,
                                        contentType: false,
                                        dataType: 'xml',
                                        type : 'post',
                                        xhr: function () {
                                            myXhr = $.ajaxSettings.xhr();
                                            if (myXhr.upload) {
                                                myXhr.upload.addEventListener('progress', function(e){
                                                    var curr = e.loaded;
                                                    var total = e.total;
                                                    var process = parseInt(curr / total * 100);
                                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media").text('上传中...'+process+"%");
                                                });
                                            }
                                            return myXhr;
                                        },
                                        success : function(data) {
                                            layer.closeAll();
                                            var res = $(data).find('PostResponse');
                                            if (res) {
                                                var key = res.find('Key').text();
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media").text('上传成功');
                                                setTimeout(function() {
                                                    $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media').text('oss上传');
                                                }, 2000);
                                                var video_url = res1.data.domain + "/" + key;
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val(video_url);
                                            } else {
                                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media").text('上传失败');
                                                setTimeout(function() {
                                                    $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_oss_upload_media').text('oss上传');
                                                }, 2000);
                                            }
                                        },
                                        error : function(e) {
                                            layer.closeAll();
                                            console.log(e.responseText);
                                        }
                                    });
                                } else {
                                    layer.closeAll();
                                    showErrorMsg(res1.msg);
                                }
                            },
                            error: function(e) {
                                layer.closeAll();
                                showErrorMsg(e.responseText);
                            }
                        });
                    }

                    //COS
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media(e) {
                        // 获取文件路径名
                        var file = $(e)[0].files[0];

                        // 验证上传格式
                        var fileName = file.name;
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        var ext = judgeExtMedia(fileExt);
                        if (ext == -1) {
                            showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式，可在附件设置中修改');
                            return false;
                        }

                        // 验证上传大小
                        size = parseInt("<?php echo $vo['filesize']; ?>");
                        if (file.size > size) {
                            showErrorMsg('文件大小超过限制，可在附件设置中修改');
                            return false;
                        }

                        // 上传参数
                        var formData = new FormData();
                        formData.append('file', file);
                        formData.append('file_ext', fileExt);

                        // 执行上传
                        $.ajax({
                            type: 'post',
                            url: '/index.php?m=plugins&c=Cos&a=cos_upload&_ajax=1',
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            xhr: function () {
                                myXhr = $.ajaxSettings.xhr();
                                if (myXhr.upload) {
                                    myXhr.upload.addEventListener('progress', function(e){
                                        var curr = e.loaded;
                                        var total = e.total;
                                        process = parseInt(curr / total * 100);
                                        if (100 == process) {
                                            process = 99;
                                            layer_loading('上传腾讯云');
                                        }
                                        $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media").text('上传中...'+process+"%");
                                    });
                                }
                                return myXhr;
                            },
                            success: function(res) {
                                layer.closeAll();
                                if (1 == res.code) {
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media").text('上传成功');
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val(res.data.url);
                                } else {
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media").text('上传失败');
                                }
                                setTimeout(function() {
                                    $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_cos_upload_media').text('cos上传');
                                }, 2000);
                            },
                            error: function(e) {
                                layer.closeAll();
                                showErrorMsg(e.responseText);
                            }
                        });
                    }

                    // 本地上传
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_upload_media(e){
                        // 获取文件路径名
                        var file = $(e)[0].files[0];

                        // 验证上传格式
                        var fileName = file.name;
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        var ext = judgeExtMedia(fileExt);
                        if (ext == -1) {
                            showErrorMsg('仅支持<?php echo $vo['ext']; ?>格式,可在附件设置中修改');
                            return false;
                        }

                        // 验证上传大小
                        size = parseInt("<?php echo $vo['filesize']; ?>");
                        if (file.size > size) {
                            showErrorMsg('文件大小超过限制,可在附件设置中修改');
                            return false;
                        }

                        // 定义上传数据
                        var formData = new FormData();
                        formData.append('file', file);

                        // 执行上传
                        layer_loading('上传本地');
                        $.ajax({
                            type: 'post',
                            url : "<?php echo url('Ueditor/upVideo', ['savepath'=>'media']); ?>",
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            xhr: function () {
                                myXhr = $.ajaxSettings.xhr();
                                if (myXhr.upload) {
                                    myXhr.upload.addEventListener('progress', function(e){
                                        var curr = e.loaded;
                                        var total = e.total;
                                        process = parseInt(curr / total * 100);
                                        $("#upload_video_litpic_local").html('上传中...'+process+"%");
                                    });
                                }
                                return myXhr;
                            },
                            success: function (res) {
                                layer.closeAll();
                                if ("SUCCESS" == res.state) {
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_upload_media").html('上传成功');
                                    setTimeout(function() {
                                        $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_local_upload_media').html('本地上传');
                                    }, 2000);
                                    $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_media_url").val(res.url);
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            }
                        });
                    }
                </script>
            <?php break; ?>
            <!-- 多媒体类型 end -->
        <?php endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>

<script>
    $(function(){
        auto_notic_tips();
        /**
        * 自动小提示
        */
        function auto_notic_tips()
        {
            var html = '<a class="ui_tips" href="javascript:void(0);" onmouseover="layer_tips = layer.tips($(this).parent().find(\'p.notic\').html(), this, {time:100000});" onmouseout="layer.close(layer_tips);">提示</a>';
            $.each($('dd.opt > p.notic'), function(index, item){
                var a_length = $(item).prev("a.ui_tips").length;
                if ($(item).html() != '' && 0 == a_length) {
                    $(item).before(html);
                }
            });
        }
    });
</script>
        </div>
        <!-- 常规选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="gourl" value="<?php echo (isset($gourl) && ($gourl !== '')?$gourl:''); ?>">
                <input type="hidden" name="typeid" id="typeid" value="<?php echo (isset($info['id']) && ($info['id'] !== '')?$info['id']:''); ?>">
                <input type="hidden" id="editor_addonFieldExt" value="<?php echo $editor_addonFieldExt; ?>">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">
    function check_submit(){
        layer_loading('正在处理');
        setTimeout(function (){
            editor_auto_210607();
            $('#post_form').submit();
        }, 1);
    }

    /* 生成静态页面代码 */
    var typeid = "<?php echo $typeid; ?>";
    if(typeid > 0){
        $.ajax({
            url:__root_dir__+"/index.php?m=home&c=Buildhtml&a=upHtml&lang="+__lang__,
            type:'POST',
            dataType:'json',
            data:{'typeid':typeid,ctl_name:'Arctype',_ajax:1},
            success:function(data){}        
        });
    }
    /* end */
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