<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"./application/admin/template/admin/login.htm";i:1635510273;s:67:"/www/ShengXin/YFMJSite/application/admin/template/public/footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE html>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="zh-cn"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name='robots' content='noindex,nofollow' />
        <title>后台登录</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
        <link href="/public/static/admin/css/login.css" rel="stylesheet" type="text/css" />
        <link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
        <style type="text/css">
            body {background:#6f8489 url('<?php echo (handle_subdir_pic($global['web_loginbgimg']) ?: '/public/static/admin/loginbg/login-bg-1.png'); ?>') left top no-repeat;}
        </style>
        <script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.SuperSlide.2.1.2.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
        <!--[if lte IE 8]>
            <script type="Text/Javascript" language="JavaScript">
                function detectBrowser()
                {
                    var browser = navigator.appName
                    if(navigator.userAgent.indexOf("MSIE")>0){ 
                        var b_version = navigator.appVersion
                        var version = b_version.split(";");
                        var trim_Version = version[1].replace(/[ ]/g,"");
                        if ((browser=="Netscape"||browser=="Microsoft Internet Explorer"))
                        {
                            if(trim_Version == 'MSIE8.0' || trim_Version == 'MSIE7.0' || trim_Version == 'MSIE6.0'){
                                layer.alert('请使用IE9.0版本以上进行访问', {icon: 5, title:false});
                                return false;
                            }
                        }
                    }
               }
               detectBrowser();
            </script>
        <![endif]-->
    </head>

    <body>
        <div id="container">
            <div id="anitOut"></div>
        </div>
        <div class="container">
            <div class="logo">
                <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                <img src="<?php echo (handle_subdir_pic($global['web_loginlogo']) ?: '/public/static/admin/images/login-logo_ey.png'); ?>?v=<?php echo time(); ?>">
                <?php else: ?>
                <img src="<?php echo (handle_subdir_pic($global['web_loginlogo']) ?: '/public/static/admin/images/login-logo.png'); ?>?v=<?php echo time(); ?>">
                <?php endif; ?>
            </div>
            <div class="box">
                <form action="" name='theForm' id="theForm" method="post">
                    <label for="inputEmail" class="sr-only">用户名</label>
                    <input type="text" name="user_name" autocomplete="off" class="form-control" value="" placeholder="用户名" required autofocus />
                    <label for="inputPassword" class="sr-only">密码</label>
                    <input type="password" name="password" autocomplete="off" class="form-control" value="" placeholder="密码" required />
                    <?php if($is_vertify == '1'): ?>
                    <div class="formText" style="position:relative">
                        <i class="icon icon-chick"></i>
                        <input type="text" name="vertify" autocomplete="off" class="form-control" value="" placeholder="验证码" />
                        <img src="<?php echo url('Admin/vertify'); ?>" class="chicuele" id="imgVerify" alt="" onclick="fleshVerify();" style="position:absolute; right: 3px;top: 3px;height: 36px;">
                    </div>
                    <?php endif; ?>

                    <!--点选文字验证码 start-->
                    <!-- weapp_clicap_input -->
                    <!--点选文字验证码 end-->

                    <!-- <div class="clearfix text-right">
                        <a href="javascript:void(0);" class="help forget_pwd">忘记密码?</a>
                    </div> -->
                    <input type="button" name="submit" class="btn btn-lg btn-primary btn-block show-dialog" value="登录">
                </form>
            </div> 
        </div> <!-- /container -->
        <script type="text/javascript">
            $(function(){
                $(".formText .input-text").focus(function(){
                    $(this).parent().addClass("focus");
                });
                
                $(".formText .input-text").blur(function(){
                    $(this).parent().removeClass("focus");
                });
                
                $(".formText").blur(function(){
                    $(this).prev().hide();
                });

                clear_session();
                function clear_session()
                {
                    $.ajax({
                        url: "<?php echo url('api/Ajax/clear_session'); ?>",
                        type: 'post',
                        dataType: 'JSON',
                        data: {_ajax: 1},
                        success: function(res){
                        }
                    });
                }
            });

            $(function(){

                $(document).keydown(function(event){
                    if(event.keyCode ==13){
                        $('#theForm input[name=submit]').trigger("click");
                    }
                });

                $('#theForm input[name=submit]').on('click',function(){
                    var user_name=true;
                    var password=true;
                    var vertify=true;

                    if($('#theForm input[name=user_name]').val() == ''){
                        layer.msg('用户名不能为空！', {time: 1000});
                        $('#theForm input[name=user_name]').focus();
                        user_name = false;
                        return false;
                    }

                    if($('#theForm input[name=password]').val() == ''){
                        layer.msg('密码不能为空！', {time: 1000});
                        $('#theForm input[name=password]').focus();
                        password = false;
                        return false;
                    }

                    <?php if($is_vertify == '1'): ?>
                    if($('#theForm input[name=vertify]').val() == ''){
                        layer.msg('验证码不能为空！', {time: 1000});
                        $('#theForm input[name=vertify]').focus();
                        vertify = false;
                        return false;
                    }
                    <?php endif; ?>

                    if(vertify && $('#theForm input[name=user_name]').val() != '' && $('#theForm input[name=password]').val() != ''){
                        var url = "<?php echo url('Admin/login', ['_ajax'=>1]); ?>";
                        if (url.indexOf('?') > -1) {
                            url += '&';
                        } else {
                            url += '?';
                        }
                        url += 't='+Math.random();
                        layer_loading('准备进入');
                        $.ajax({
                            async:false,
                            url: url,
                            data: $('#theForm').serialize(),
                            type:'post',
                            dataType:'json',
                            success:function(res){
                                if(1 == res.code){
                                    top.location.href = res.url;
                                }else{
                                    layer.closeAll();
                                    fleshVerify();
                                    user_name=false;
                                    password=false;
                                    layer.alert(res.msg, {icon: 5, title:false});
                                    return false;
                                }
                            },
                            error : function(e) {
                                layer.closeAll();
                                layer.alert(e.responseText, {icon: 5, title:false});
                            }
                        });
                    }else{
                        return false;
                    }
                });
            });
            
            function fleshVerify(){
                var src = "<?php echo url('Admin/vertify'); ?>";
                if (src.indexOf('?') > -1) {
                    src += '&';
                } else {
                    src += '?';
                }
                src += 'r='+Math.floor(Math.random()*100);
                $('#imgVerify').attr('src', src);//重载验证码
            }

            /**
             * 封装的加载层
             */
            function layer_loading(msg){
                var loading = layer.msg(
                msg+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面', 
                {
                    icon: 1,
                    time: 3600000, //1小时后后自动关闭
                    shade: [0.2] //0.1透明度的白色背景
                });
                //loading层
                var index = layer.load(3, {
                    shade: [0.1,'#fff'] //0.1透明度的白色背景
                });

                return loading;
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
