<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/weapp/plugin.htm";i:1610501038;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/layout.htm";i:1635510274;s:70:"/www/ShengXin/YFMJSite/application/admin/template/public/theme_css.htm";i:1635510274;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style="cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">

    <div class="row-bar clearfix mb10">
        <div class="row-bar-l fl">
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@index') == '1'): ?>
                <li><a href="<?php echo url('Weapp/index'); ?>" class="tab <?php if(\think\Request::instance()->action() == 'index'): ?>current<?php endif; ?>"><span>我的插件</span></a></li>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@plugin') == '1'): if($weapp_plugin_open == '1'): ?>
                    <li><a href="<?php echo url('Weapp/plugin'); ?>" class="tab <?php if(\think\Request::instance()->action() == 'plugin'): ?>current<?php endif; ?>"><span>云插件库</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@mybuy') == '1'): ?>
                <li><a href="<?php echo url('Weapp/mybuy', ['install'=>0]); ?>" class="tab <?php if(\think\Request::instance()->action() == 'mybuy'): ?>current<?php endif; ?>"><span>已购买插件</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="flexigrid fr">
            <form  id="searchForm" class="navbar-form form-inline fl" action="<?php echo url('Weapp/plugin'); ?>" method="get"
                  onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2 fl" style="margin-right: 6px;">
                        <select name="is_pay" class="select" style="margin:5px 5px;" onchange="$('#searchForm').submit();">
                            <option value="">--全部--</option>
                            <option value="1" <?php if(\think\Request::instance()->param('is_pay') == '1'): ?>selected<?php endif; ?>>免费</option>
                            <option value="2" <?php if(\think\Request::instance()->param('is_pay') == '2'): ?>selected<?php endif; ?>>付费</option>
                            <option value="3" <?php if(\think\Request::instance()->param('is_pay') == '3'): ?>selected<?php endif; ?>>已购买</option>
                        </select>
                    </div>
                    <div class="sDiv2 fl" style="margin-right: 6px;">
                        <input type="text" size="30" name="keywords" class="qsbox" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="搜索相关数据...">
                        <input type="submit" class="btn" value="搜索">
            			<i class="fa fa-search"></i>
                    </div>
                    
                </div>
            </form>
            <div class="mDiv fl">
                <div class="fbutton">
                	<a href="<?php echo url('Weapp/create'); ?>">
                		<div class="add" title="插件开发者">
                			<span>插件开发者</span>
                		</div>
                	</a>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="flexigrid">
        <div class="plug-list"> 
            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
            <div class="bDiv" style="height: auto;">
                <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="50">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="iDiv" style="display: none;"></div>
            </div>
            <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                <div class="plug-item-content">
                    <div class="plug-item-top">
                        <div class="plug-img">
                            <a href="https://www.eyoucms.com/plus/view.php?aid=<?php echo $vo['id']; ?>" target="_blank"><img src="<?php echo get_default_pic($vo['litpic']); ?>" ></a>
                        </div>
                        <div class="plug-text">
                            <div class="plug-text-title">
                                <a href="https://www.eyoucms.com/plus/view.php?aid=<?php echo $vo['id']; ?>" target="_blank"><?php echo $vo['name']; ?></a>
                            </div>
                            <?php if('v'.$vo['min_version'] > $version): ?>
                            <div class="plug-text-versions"><span class="red">当前CMS版本太低，该插件要求CMS版本 >= v<?php echo $vo['min_version']; ?>，请升级系统！</span></div>
                            <?php endif; ?>
                            <div class="plug-text-des2">
                              <?php echo $vo['description']; ?>
                            </div>
                            <div class="plug-price">
                                <?php if(empty($vo['meal']) || (($vo['meal'] instanceof \think\Collection || $vo['meal'] instanceof \think\Paginator ) && $vo['meal']->isEmpty())): if(empty($vo['needmoney']) || (($vo['needmoney'] instanceof \think\Collection || $vo['needmoney'] instanceof \think\Paginator ) && $vo['needmoney']->isEmpty())): ?>
                                        免费
                                    <?php else: if(empty($vo['buy']) || (($vo['buy'] instanceof \think\Collection || $vo['buy'] instanceof \think\Paginator ) && $vo['buy']->isEmpty())): ?>
                                            <em>￥</em><?php echo $vo['needmoney']/10; else: ?>
                                            已购买
                                        <?php endif; endif; else: if(empty($vo['buy']) || (($vo['buy'] instanceof \think\Collection || $vo['buy'] instanceof \think\Paginator ) && $vo['buy']->isEmpty())): ?>
                                        <em>￥</em><?php echo (isset($vo['meal'][0]['price']) && ($vo['meal'][0]['price'] !== '')?$vo['meal'][0]['price']:'0.00'); else: ?>
                                        已购买
                                    <?php endif; endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="plug-item-bottm">
                    <?php if(is_check_access('Weapp@install') == '1'): if('v'.$vo['min_version'] > $version): ?>
                        <div class="plug-status">
                            <a class="no" title="当前CMS版本太低，该插件要求CMS版本 >= v<?php echo $vo['min_version']; ?>，请升级系统！">不支持安装</a>
                        </div>
                        <?php else: if(empty($vo['buy']) || (($vo['buy'] instanceof \think\Collection || $vo['buy'] instanceof \think\Paginator ) && $vo['buy']->isEmpty())): if(empty($vo['install']) || (($vo['install'] instanceof \think\Collection || $vo['install'] instanceof \think\Paginator ) && $vo['install']->isEmpty())): ?>
                                    <a href="javascript:void(0);" onclick="goPage(this);" data-id="<?php echo $vo['id']; ?>"  data-weapp_code="<?php echo $vo['weapp_code']; ?>"  data-min_version="<?php echo $vo['min_version']; ?>" data-buy="<?php echo $vo['buy']; ?>" data-needmoney="<?php echo $vo['needmoney']; ?>">
                                        <?php if(empty($vo['needmoney']) || (($vo['needmoney'] instanceof \think\Collection || $vo['needmoney'] instanceof \think\Paginator ) && $vo['needmoney']->isEmpty())): ?>
                                            安装
                                        <?php else: ?>
                                            购买
                                        <?php endif; ?>
                                    </a>
                                <?php else: ?>
                                    <div class="plug-status">
                                        <a class="no">已安装</a>
                                    </div>
                                <?php endif; else: if(empty($vo['install']) || (($vo['install'] instanceof \think\Collection || $vo['install'] instanceof \think\Paginator ) && $vo['install']->isEmpty())): ?>
                                    <a href="javascript:void(0);" onclick="goPage(this);" data-id="<?php echo $vo['id']; ?>"  data-weapp_code="<?php echo $vo['weapp_code']; ?>"  data-min_version="<?php echo $vo['min_version']; ?>" data-buy="<?php echo $vo['buy']; ?>" data-needmoney="<?php echo $vo['needmoney']; ?>">安装</a>
                                <?php else: ?>
                                    <div class="plug-status">
                                        <a class="no">已安装</a>
                                    </div>
                                <?php endif; endif; endif; endif; ?>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
			<div class="flexigrid">
			<div class="footer-oper">
				<div class="fbuttonr">
				    <div class="pages">
				       <?php echo $page; ?>
				    </div>
				</div>
			</div>
			</div>
        </div>
        
    </div>
</div>
<form name="form2" id="form2" method="post" action="">
    <input type="hidden" name="id" value=""/>
    <input type="hidden" name="code" value=""/>
    <input type="hidden" name="min_version" value=""/>
    <input type="hidden" name="thorough" value="1"/>
</form>
<form name="payForm" id="payForm" method="post" action="" target="_blank"></form>

<script>
    $(document).ready(function () {
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function () {
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function () {
            location.href = location.href;
        });
    });

    function install(obj) {
        var code = $(obj).attr('data-weapp_code');
        var min_version = $(obj).attr('data-min_version');
        pay(code,min_version);
    }

    function pay(code,min_version) {
        layer_loading('正在处理');
        $.ajax({
            type: 'post',
            url: "<?php echo $service_ey; ?>/index.php?m=api&c=Pay&a=alipayPay",
            data: {
                domain: window.location.host,
                code: code,
                url: 'http://yifan.test'+eyou_basefile+'?m=admin&c=Weapp&a=pay_success&lang='+__lang__,
                cms_version:"<?php echo $version; ?>",
                ip:"<?php echo $ip; ?>",
                n:"<?php echo $serial_number; ?>"
            },
            dataType: 'jsonp',
            jsonpCallback: "callback", /*设置一个回调函数，名字随便取，和下面的函数里的名字相同就行*/
            success: function (res) {
                layer.closeAll();
                if (res.code == 0){
                    layer.alert(res.msg, {icon: 2, title: false});
                }else if (res.code == 2){
                    remoteInstall(code,min_version)
                }else if (res.code ==1){
                    var payForm = $('#payForm');
                    payForm.attr('action', res.payurl);
                    payForm.submit();
                    // window.open(res.payurl);
                    layer.open({
                        type: 1
                        , btn: ['支付成功', '支付失败']
                        , yes: function (index, layero) {
                            remoteInstall(code,min_version);
                        }
                        ,btn2: function(index, layero){
                            layer.close();
                            // location.reload()//重新加载页面
                        }
                        , cancel: function () {
                            //右上角关闭回调
                            // return false //开启该代码可禁止点击该按钮关闭
                        }
                        ,shadeClose: true //点击遮罩关闭
                        ,content: '\<\div style="padding:20px;">支付成功可下载安装该插件！\<\/div>'
                    });
                }

            }
        })
    }

    function remoteInstall(code, min_version) {
        var form2 = $('#form2');
        form2.find('input[name=code]').val(code);
        form2.find('input[name=min_version]').val(min_version);
        var url = "<?php echo url('Weapp/remoteInstall'); ?>";
        form2.attr('action', url);
        layer_loading('正在处理');
        form2.submit();
    }

    function goPage(obj) {
        var id = $(obj).attr('data-id');
        var buy = $(obj).attr('data-buy');
        var needmoney = $(obj).attr('data-needmoney');
        var code = $(obj).attr('data-weapp_code');
        var min_version = $(obj).attr('data-min_version');
        if (buy == 1 ){
            remoteInstall(code,min_version);
        } else {
            if (needmoney == 0){
                remoteInstall(code,min_version);
            }else {
                window.open("https://www.eyoucms.com/plus/view.php?aid="+id);
                layer.open({
                    type: 1
                    , title: '友情提示'
                    , btn: ['购买成功', '购买失败']
                    , yes: function (index, layero) {
                        layer.closeAll();
                        remoteInstall(code, min_version);
                    }
                    ,btn2: function(index, layero){
                        layer.close();
                        // location.reload()//重新加载页面
                    }
                    , cancel: function () {
                        //右上角关闭回调
                        // return false //开启该代码可禁止点击该按钮关闭
                    }
                    ,shadeClose: true //点击遮罩关闭
                    ,content: "<div style='padding:20px;'>购买成功可在线安装该插件！</div>"
                });
            }
        }
    }

    function jump() {
        location.reload();
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