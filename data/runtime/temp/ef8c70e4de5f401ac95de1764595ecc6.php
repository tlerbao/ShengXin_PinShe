<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/weapp/create.htm";i:1611051758;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/layout.htm";i:1635510274;s:70:"/www/ShengXin/YFMJSite/application/admin/template/public/theme_css.htm";i:1635510274;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title"><a class="back" href="<?php echo url("Weapp/index"); ?>" title="返回列表"><i class="fa fa-angle-double-left"></i>返回</a></a>
            <div class="subject">
                <h3>插件应用</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@create') == '1'): ?>
                <li><a href="<?php echo url("Weapp/create"); ?>" class="tab <?php if(in_array(\think\Request::instance()->action(), array('create'))): ?>current<?php endif; ?>"><span>创建插件</span></a></li>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@pack') == '1'): ?>
                <li><a href="<?php echo url("Weapp/pack"); ?>" class="tab <?php if(in_array(\think\Request::instance()->action(), array('pack'))): ?>current<?php endif; ?>"><span>打包插件</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Weapp/create'); ?>" method="post">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="code"><em>*</em>插件标识</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="code" placeholder="比如：Demo" id="code" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                    <p class="">易优插件库中唯一的标识，首字母必须大写，只支持大小字母与数字。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name"><em>*</em>插件名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="name" value="" id="name" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="version">插件版本号</label>
                </dt>
                <dd class="opt">
                    v1.0.0
                    <input type="hidden" name="version" value="v1.0.0" id="version" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="min_version">CMS版本号</label>
                </dt>
                <dd class="opt">
                    <?php echo (isset($min_version) && ($min_version !== '')?$min_version:'v1.1.6'); ?>
                    <input type="hidden" name="min_version" value="<?php echo (isset($min_version) && ($min_version !== '')?$min_version:'v1.1.6'); ?>" id="min_version" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="author"><em>*</em>开发者</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="author" value="" id="author" autocomplete="off" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="scene"><em>*</em>应用场景</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" value="0" name="scene" checked="checked" />手机端+PC端</label>&nbsp;&nbsp;
                    <label><input type="radio" value="1" name="scene" />手机端</label>&nbsp;&nbsp;
                    <label><input type="radio" value="2" name="scene" />PC端</label>&nbsp;&nbsp;
                    <p class="">在哪种场景展现，不指定的场景调用插件无效。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="description"><em>*</em>插件描述</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="80" id="description" name="description" style="height:80px;" placeholder=""></textarea>
                    <p class="notic"></p>
                </dd>
            </dl>
            <div class="bot"><a href="JavaScript:void(0);" onclick="checkForm();" class="ncap-btn-big ncap-btn-green" id="submitBtn">初始化结构</a></div>
        </div>
    </form>
</div>
<script type="text/javascript">

    /**
     * 插件标识格式判断
     * @param str
     */
    function checkCode(str){
        var reg = /^[A-Z]([a-zA-Z0-9]*)$/;
        if(reg.test(str)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 版本号格式判断
     * @param str
     */
    function checkVersion(str){
        var reg = /^v\d+\.\d+\.\d+([0-9\.]*)$/i;
        if(reg.test(str)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 插件标识验证
     * @param str
     */
    function ajax_check_code()
    {
        var flag = false;
        var code = $.trim($('input[name=code]').val());
        var reg = /(^[A-Z]([a-zA-Z0-9]*)$)/;
        if (!reg.test(code)) {
            showErrorMsg('插件标识格式不正确！');
            $('input[name=code]').focus();
            return false;
        }
        if ('Sample' == code) {
            showErrorMsg('插件标识已被占用！');
            $('input[name=code]').focus();
            return false;
        }

        $.ajax({
            url: "<?php echo url('Weapp/ajax_check_code', ['_ajax'=>1]); ?>",
            type: 'GET',
            async: false,
            dataType: 'JSON',
            data: {code: code},
            success: function(res){
                if(res.code == 1){
                    flag = true;
                } else {
                    showErrorMsg(res.msg);
                    $('input[name=code]').focus();
                }
            },
            error: function(e){}
        });

        return flag;
    }

    // 判断输入框是否为空
    function checkForm(){
        if(!checkCode($('input[name=code]').val())){
            showErrorMsg('插件标识格式不正确！');
            $('input[name=code]').focus();
            return false;
        }
        if(!ajax_check_code())
        {
            return false;
        }
        if($('input[name=name]').val() == ''){
            showErrorMsg('插件名称不能为空！');
            $('input[name=name]').focus();
            return false;
        }
        if(!checkVersion($('input[name=version]').val())){
            showErrorMsg('插件版本号格式不正确！');
            $('input[name=version]').focus();
            return false;
        }
        if(!checkVersion($('input[name=min_version]').val())){
            showErrorMsg('CMS最低版本号格式不正确！');
            $('input[name=min_version]').focus();
            return false;
        }
        if($('input[name=author]').val() == ''){
            showErrorMsg('开发者不能为空！');
            $('input[name=author]').focus();
            return false;
        }
        if($('input[name=scene]').val() == ''){
            showErrorMsg('应用场景不能为空！');
            $('input[name=scene]').focus();
            return false;
        }
        if($('#description').val() == ''){
            showErrorMsg('插件名称不能为空！');
            $('#description').focus();
            return false;
        }
        layer_loading('正在处理');
        $('#post_form').submit();
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