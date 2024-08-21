<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/index/welcome.htm";i:1635511149;s:70:"/www/ShengXin/YFMJSite/application/admin/template/public/theme_css.htm";i:1635510274;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
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
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css" rel="stylesheet" />
<link href="/public/static/admin/css/index.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
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
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
    var __main_lang__ = "<?php echo $main_lang; ?>";
    var VarSecurityPatch = "<?php echo (isset($security_patch) && ($security_patch !== '')?$security_patch:'0'); ?>";
</script>  
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script src="/public/static/admin/js/upgrade.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body style="background-color:#F4F4F4;padding:6px; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<?php if(empty($system_explanation_welcome) || empty($system_explanation_welcome_2)): ?>
<div id="explanation_welcome" style="margin:10px 15px 0px 15px;">
    <?php if(empty($system_explanation_welcome) || (($system_explanation_welcome instanceof \think\Collection || $system_explanation_welcome instanceof \think\Paginator ) && $system_explanation_welcome->isEmpty())): ?>
    <div class="explanation" style="color: rgb(44, 188, 163); background-color: #fff!important; width: 99%; height: 100%;">
        <div class="title checkZoom" data-type="1">
            <span title="不再提示" style="display: block;"></span>
        </div>
        <ul>
            <li style="color: red;">系统检测当前版本尚未备份数据库，请点击<a href="<?php echo url('Tools/index'); ?>">【数据备份】</a>进入操作。</li>
        </ul>
    </div>
    <?php endif; if(empty($system_explanation_welcome_2)): ?>
    <div class="explanation" style="color: rgb(44, 188, 163); background-color: #fff!important; width: 99%; height: 100%; margin-top: 10px;">
        <div class="title checkZoom" data-type="2">
            <span title="不再提示" style="display: block;"></span>
        </div>
        <ul>
            <li style="color: red;">后台登录密码强度：<?php echo getPasswordLevelTitle($admin_login_pwdlevel); ?>，容易被暴力破解，请及时
            <a href="javascript:void(0);" data-href="<?php echo url('Admin/admin_edit', ['id'=>\think\Session::get('admin_info.admin_id')]); ?>" onclick="openFullframe(this, '会员管理-修改密码');">【修改密码】</a>提高安全性。</li>
        </ul>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
<div class="warpper">
    <div class="content start_content">
        <div class="contentWarp">
            <div class="index_box">
                <div class="info_count">
                     <h3><i class="iconfont e-kuaijiedaohang"></i>快捷导航</h3>
                     <div class="container-fluid">
                         <ul>
                            <?php if(is_array($quickMenu) || $quickMenu instanceof \think\Collection || $quickMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $quickMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_check_access($vo['controller'].'@'.$vo['action'])): ?>
                                <li>
                                    <a href="javascript:void(0);" onclick="GoLocation(this);" data-href="<?php echo url($vo['controller'].'/'.$vo['action'], $vo['vars']); ?>"><p class="navs"><?php echo $vo['title']; ?></p></a>
                                </li>
                                <?php endif; endforeach; endif; else: echo "" ;endif; if(is_check_access('Index@ajax_quickmenu') == '1'): ?>
                            <li>
                               <a href="javascript:void(0);" id="quickMenuAdd"><p class="navs"><i style="font-size: 20px;" class="iconfont e-tianjia"></i></p></a>
                            </li>
                            <?php endif; ?>
                         </ul>
                     </div>
                </div>
            </div>
            <div class="index_box" >
                <div class="info_count">
                     <h3><i class="iconfont e-neirongtongji"></i>内容统计</h3>
                     <div class="container-fluid">
                         <ul>
                            <?php if(is_array($contentTotal) || $contentTotal instanceof \think\Collection || $contentTotal instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($contentTotal) ? array_slice($contentTotal,0,9, true) : $contentTotal->slice(0,9, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(is_check_access($vo['controller'].'@'.$vo['action'])): ?>
                                <li>
                                   <a href="javascript:void(0);" onclick="GoLocation(this);" data-href="<?php echo url($vo['controller'].'/'.$vo['action'], $vo['vars']); ?>">
                                       <h2><?php echo $vo['title']; ?></h2>
                                       <p><cite><?php echo (isset($vo['total']) && ($vo['total'] !== '')?$vo['total']:'0'); ?></cite></p>
                                   </a>
                                </li>
                                <?php endif; endforeach; endif; else: echo "" ;endif; if(is_check_access('Index@ajax_content_total') == '1'): ?>
                            <li>
                               <a href="javascript:void(0);" id="contentTotalAdd">
                                   <h2>添加统计</h2>
                                   <p><cite><i class="iconfont e-tianjia"></i></cite></p>
                               </a>
                            </li>
                            <?php endif; ?>
                         </ul>
                     </div>
                </div>
            </div>
            <script type="text/javascript">
                function GoLocation(obj) {
                    layer_loading('正在加载');
                    window.location.href = $(obj).data('href');
                }
            </script>
            <div class="section system_section" style="float: none;width: inherit;">

                <div class="system_section_con">
                    <div class="sc_title" style="padding: 26px 0 14px;">
                        
                        <h3><i class="iconfont e-fuwuqixinxi"></i>服务器信息</h3>
                    </div>
                    <div class="sc_warp" id="system_warp" style="display: block;padding-bottom: 20px;">
                        <table cellpadding="0" cellspacing="0" class="system_table">
                            <tbody><tr>
                                <td class="gray_bg">服务器系统：</td>
                                <td><?php echo $sys_info['os']; ?></td>
                                <td class="gray_bg">网站域名/IP：</td>
                                <td><?php echo $sys_info['domain']; ?> [ <?php echo $sys_info['ip']; ?> ]</td>
                            </tr>
                            <tr>
                                <td class="gray_bg">服务器环境：</td>
                                <td style="line-height: 28px;padding-right: 20px;"><?php echo $sys_info['web_server']; ?></td>
                                <td class="gray_bg">PHP 版本：</td>
                                <td><?php echo $sys_info['phpv']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Mysql 版本：</td>
                                <td><?php echo $sys_info['mysql_version']; ?></td>
                                <td class="gray_bg">GD 版本：</td>
                                <td><?php echo $sys_info['gdinfo']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">文件上传限制：</td>
                                <td><?php echo $sys_info['fileupload']; ?></td>
                                <td class="gray_bg">最大占用内存：</td>
                                <td><?php echo $sys_info['memory_limit']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">POST限制：</td>
                                <td><?php echo (isset($sys_info['postsize']) && ($sys_info['postsize'] !== '')?$sys_info['postsize']:'unknown'); ?></td>
                                <td class="gray_bg">最大执行时间：</td>
                                <td><?php echo $sys_info['max_ex_time']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Zip支持：</td>
                                <td><?php echo $sys_info['zip']; ?></td>
                                <td class="gray_bg">Zlib支持：</td>
                                <td><?php echo $sys_info['zlib']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="position: static; bottom: 0px; font-size:14px;">
    <p>
        <b><?php echo htmlspecialchars_decode($global['web_copyright']); ?></b>
    </p>
</div>
<script type="text/javascript">


    $(function() {
        //操作提示缩放动画
        $(".checkZoom").click(function(){
            $(this).parent().animate({
                color: "#FFF",
                backgroundColor: "#4FD6BE",             
                width: "0",
                height: "0",                             
            },300,function(){
                $(this).remove();
            });
            if(1 >= $('#explanation_welcome').find('div.explanation').length) {
                $('#explanation_welcome').remove();
            }
            var url = eyou_basefile+"?m=admin&c=Ajax&a=explanation_welcome&type="+$(this).attr('data-type')+"&lang="+__lang__+"&_ajax=1";
            $.get(url);
        });

        checkInlet(); // 自动检测隐藏index.php
    });

    // 自动检测隐藏index.php
    function checkInlet() {
        layer.open({
            type: 2,
            title: false,
            area: ['0px', '0px'],
            shade: 0.0,
            closeBtn: 0,
            shadeClose: true,
            content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/setInlet.html',
            success: function(layero, index){
                layer.close(index);
                var body = layer.getChildFrame('body', index);
                var content = body.html();
                if (content.indexOf("Congratulations on passing") == -1)
                {
                    $.ajax({
                        type : "POST",
                        url  : "/index.php?m=api&c=Rewrite&a=setInlet&_ajax=1",
                        data : {seo_inlet:0},
                        dataType : "JSON",
                        success: function(res) {

                        }
                    }); 
                }
            }
        });
    }

    // 新增内容统计
    $('#contentTotalAdd').click(function(){
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '内容统计管理',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            // maxmin: false, //开启最大化最小化按钮
            area: ['550px', '220px'],
            content: "<?php echo url('Index/ajax_content_total'); ?>"
        });
    });

    // 新增快捷导航
    $('#quickMenuAdd').click(function(){
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '快捷导航管理',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            // maxmin: false, //开启最大化最小化按钮
            area: ['550px', '300px'],
            content: "<?php echo url('Index/ajax_quickmenu'); ?>"
        });
    });

    /**
     * 更新组件库
     * @return {[type]} [description]
     */
    var is_update_component_access = <?php echo (isset($is_update_component_access) && ($is_update_component_access !== '')?$is_update_component_access:0); ?>;
    function update_component_access()
    {
        if (1 == is_update_component_access) {
            $.ajax({
                type : 'post',
                url : eyou_basefile+'?m=admin&c=Diyminipro&a=ajax_syn_component_access&lang='+__lang__,
                data : {mini_id:0, _ajax:1},
                dataType : 'json',
                success : function(res){
                    if(res.code == 1) {
                        console.log(res.msg);
                    }
                }
            });
        }
    }
    update_component_access();
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