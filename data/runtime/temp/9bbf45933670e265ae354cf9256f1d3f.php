<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./application/admin/template/system/basic.htm";i:1635510274;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/layout.htm";i:1635510274;s:70:"/www/ShengXin/YFMJSite/application/admin/template/public/theme_css.htm";i:1635510274;s:64:"/www/ShengXin/YFMJSite/application/admin/template/system/bar.htm";i:1611051758;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style="overflow-y: scroll;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page atta">
    <?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@web') == '1'): ?>
                <li><a href="<?php echo url('System/web'); ?>" <?php if('web'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>网站设置</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@web2') == '1'): ?>
                    <li><a href="<?php echo url('System/web2'); ?>" <?php if('web2'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>核心设置</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@basic') == '1'): ?>
                <li><a href="<?php echo url('System/basic'); ?>" <?php if('basic'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>附件设置</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@api_conf') == '1'): ?>
                    <li><a href="<?php echo url('System/api_conf'); ?>" <?php if(preg_match('/^api_conf/i', ACTION_NAME)): ?>class="current"<?php endif; ?>><span>接口配置</span></a></li>
                    <?php endif; endif; ?>
<!-- 
                <?php if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@pay_api_index') == '1'): ?>
                        <li><a href="<?php echo url('PayApi/pay_api_index'); ?>" <?php if('pay_api_index'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>支付接口</span></a></li>
                    <?php endif; endif; ?>
 -->
            </ul>
        </div>
    </div>
<?php endif; ?>
    <form method="post" enctype="multipart/form-data" name="form1" id="handlepost" action="<?php echo U('System/basic'); ?>">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">
                    <label for="basic_indexname">面包屑首页名</label>
                </dt>
                <dd class="opt">
                    <input id="basic_indexname" name="basic_indexname" value="<?php echo (isset($config['basic_indexname']) && ($config['basic_indexname'] !== '')?$config['basic_indexname']:'首页'); ?>" class="input-txt" type="text" />
                    <p class="notic"></p>
                </dd>
            </dl>
            <?php if($main_lang == $admin_lang): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="list_symbol">面包屑间隔符</label>
                </dt>
                <dd class="opt">
                    <input id="list_symbol" name="list_symbol" value="<?php echo (isset($config['list_symbol']) && ($config['list_symbol'] !== '')?$config['list_symbol']:' > '); ?>" class="input-txt" type="text" />
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="image_type">允许上传图片类型</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="image_type" name="image_type" style="height:20px;"><?php if(empty($config['image_type']) || (($config['image_type'] instanceof \think\Collection || $config['image_type'] instanceof \think\Paginator ) && $config['image_type']->isEmpty())): ?>jpg|gif|png|bmp|jpeg|ico<?php else: ?><?php echo $config['image_type']; endif; ?></textarea>
                    <p class="notic">禁止非图片的扩展名，比如：php</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="file_type">允许上传软件类型</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="file_type" name="file_type" style="height:20px;"><?php if(empty($config['file_type']) || (($config['file_type'] instanceof \think\Collection || $config['file_type'] instanceof \think\Paginator ) && $config['file_type']->isEmpty())): ?>zip|gz|rar|iso|doc|xsl|ppt|wps<?php else: ?><?php echo $config['file_type']; endif; ?></textarea>
                    <p class="notic">禁止非软件的扩展名，比如：php</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="media_type">允许多媒体类型</label>
                </dt>
                <dd class="opt">
                    <textarea rows="5" cols="60" id="media_type" name="media_type" style="height:20px;"><?php if(empty($config['media_type']) || (($config['media_type'] instanceof \think\Collection || $config['media_type'] instanceof \think\Paginator ) && $config['media_type']->isEmpty())): ?>swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov|mp4<?php else: ?><?php echo $config['media_type']; endif; ?></textarea>
                    <p class="notic">禁止非媒体的扩展名，比如：php</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="file_size">附件上传大小</label>
                </dt>
                <dd class="opt">
                    <input id="file_size" name="file_size" value="<?php echo (isset($config['file_size']) && ($config['file_size'] !== '')?$config['file_size']:$max_filesize); ?>" type="text" style="width: 60px;" /> <?php echo $max_sizeunit; ?>
                    <p class="notic">附件上传大小限制，如果空间不支持，请与空间商联系修改php.ini部分参数</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">文档图片自适应</dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="basic_img_style_wh1" class="cb-enable <?php if(isset($config['basic_img_style_wh']) && $config['basic_img_style_wh'] == 1): ?>selected<?php endif; ?>" >开启</label>
                        <label for="basic_img_style_wh0" class="cb-disable <?php if(!isset($config['basic_img_style_wh']) || $config['basic_img_style_wh'] == 0): ?>selected<?php endif; ?>" >关闭</label>
                        <input id="basic_img_style_wh1" name="basic_img_style_wh" value="1" <?php if(isset($config['basic_img_style_wh']) && $config['basic_img_style_wh'] == 1): ?>checked<?php endif; ?> type="radio">
                        <input id="basic_img_style_wh0" name="basic_img_style_wh" value="0" <?php if(!isset($config['basic_img_style_wh']) || $config['basic_img_style_wh'] == 0): ?>checked<?php endif; ?> type="radio">
                    </div>
                    <p class="notic">自动通过样式控制，确保手机端下图片不拉伸变形</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="other_arcclick">文档默认浏览量</label>
                </dt>
                <dd class="opt">
                    <input id="other_arcclick" name="other_arcclick" value="<?php if(isset($other_config['other_arcclick']) && 0 <= $other_config['other_arcclick']): ?><?php echo $other_config['other_arcclick']; else: ?>500|1000<?php endif; ?>" onkeyup="this.value=this.value.replace(/[^\|\d]/g,'');" onpaste="this.value=this.value.replace(/[^\|\d]/g,'')" class="input-txt" type="text" />
                    <p class="notic">比如：500|1000 表示随机数500-1000之间</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="other_arcdownload">软件默认下载量</label>
                </dt>
                <dd class="opt">
                    <input id="other_arcdownload" name="other_arcdownload" value="<?php if(isset($other_config['other_arcdownload']) && 0 <= $other_config['other_arcdownload']): ?><?php echo $other_config['other_arcdownload']; else: ?>100|500<?php endif; ?>" onkeyup="this.value=this.value.replace(/[^\|\d]/g,'');" onpaste="this.value=this.value.replace(/[^\|\d]/g,'')" class="input-txt" type="text" />
                    <p class="notic">比如：100|500 表示随机数100-500之间</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="editor_select">内容编辑器</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="editor_select" value="1" <?php if(empty($editor['editor_select']) || $editor['editor_select'] == 1): ?> checked="checked" <?php endif; ?>>Ueditor</label>
                    &nbsp;&nbsp;
                    <label class="curpoin"><input type="radio" name="editor_select" value="2" <?php if(isset($editor['editor_select']) && $editor['editor_select'] == 2): ?> checked="checked" <?php endif; ?>>Ckeditor</label>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">自动远程图片本地化</dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="editor_remote_img_local1" class="cb-enable <?php if(isset($editor['editor_remote_img_local']) && $editor['editor_remote_img_local'] == 1): ?>selected<?php endif; ?>" >开启</label>
                        <label for="editor_remote_img_local0" class="cb-disable <?php if(!isset($editor['editor_remote_img_local']) || $editor['editor_remote_img_local'] == 0): ?>selected<?php endif; ?>" >关闭</label>
                        <input id="editor_remote_img_local1" name="editor_remote_img_local" value="1" <?php if(isset($editor['editor_remote_img_local']) && $editor['editor_remote_img_local'] == 1): ?>checked<?php endif; ?> type="radio">
                        <input id="editor_remote_img_local0" name="editor_remote_img_local" value="0" <?php if(!isset($editor['editor_remote_img_local']) || $editor['editor_remote_img_local'] == 0): ?>checked<?php endif; ?> type="radio">
                    </div>
                    <p class="notic">开启后,提交保存文档时将先自动执行远程图片本地化操作</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">自动清除本站链接</dt>
                <dd class="opt">
                    <div class="onoff">
                        <label for="editor_img_clear_link1" class="cb-enable <?php if(isset($editor['editor_img_clear_link']) && $editor['editor_img_clear_link'] == 1): ?>selected<?php endif; ?>" >开启</label>
                        <label for="editor_img_clear_link0" class="cb-disable <?php if(!isset($editor['editor_img_clear_link']) || $editor['editor_img_clear_link'] == 0): ?>selected<?php endif; ?>" >关闭</label>
                        <input id="editor_img_clear_link1" name="editor_img_clear_link" value="1" <?php if(isset($editor['editor_img_clear_link']) && $editor['editor_img_clear_link'] == 1): ?>checked<?php endif; ?> type="radio">
                        <input id="editor_img_clear_link0" name="editor_img_clear_link" value="0" <?php if(!isset($editor['editor_img_clear_link']) || $editor['editor_img_clear_link'] == 0): ?>checked<?php endif; ?> type="radio">
                    </div>
                    <p class="notic">开启后,提交保存文档时将先自动执行清除本站链接操作</p>
                </dd>
            </dl>
            <?php endif; ?>
            <div class="bot">
                <input type="hidden" name="max_filesize" id="max_filesize" value="<?php echo $max_filesize; ?>">
                <input type="hidden" name="max_sizeunit" id="max_sizeunit" value="<?php echo $max_sizeunit; ?>">
                <input type="hidden" name="old_basic_img_style_wh" value="<?php echo (isset($config['basic_img_style_wh']) && ($config['basic_img_style_wh'] !== '')?$config['basic_img_style_wh']:0); ?>">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">确认提交</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    function adsubmit(){
        var file_size = parseInt($('#file_size').val());
        var max_filesize = parseInt($('#max_filesize').val());
        var max_sizeunit = $('#max_sizeunit').val();
        if (0 < max_filesize && max_filesize < file_size) {
            showErrorMsg('附件上传大小超过空间的最大限制'+max_filesize+max_sizeunit);
            $('input[name=file_size]').focus();
            return false;
        }

        layer_loading("正在处理");
        $('#handlepost').submit();
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