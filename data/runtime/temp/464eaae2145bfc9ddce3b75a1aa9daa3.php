<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"./application/admin/template/uploadify/picture_folder.htm";i:1587086758;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>在线管理</title>
    <link rel="stylesheet" type="text/css" href="/public/plugins/webuploader/css/style.css?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>">

    <link rel="stylesheet" href="/public/plugins/ztree/css/iframe.css?v=<?php echo $version; ?>">
    <link rel="stylesheet" href="/public/plugins/ztree/css/zTreeStyle/zTreeStyle.css?v=<?php echo $version; ?>" type="text/css">

    <style type="text/css">
        .ztree li{
            line-height: 22px;
        }
        .ztree .node_name{
            font-size: 13px !important;
           
        }
        .hover{
            line-height: 22px;
        }
        #saveBtn{ float: right; }
		.ui-layout-pane {   
		     background: #fff;   
		 } 
		 .ui-layout-center{
			 padding:0 15px 60px 15px;
		 }
    </style>

    <script type="text/javascript">
        var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
        var module_name = "<?php echo MODULE_NAME; ?>";
        var __root_dir__ = "";
    </script> 
</head>
<body>
		
	<div class="ui-layout-west" >
		<div class="upload-main-left">
			<div class="upload-nav">
				<ul>
					<li><a href="<?php echo url('Uploadify/upload',['num'=>$info['num'],'input'=>$info['input'],'path'=>$info['path'],'func'=>$info['func'],'lang'=>\think\Request::instance()->param('lang')]); ?>">本地上传</a></li>
					<li> <a class="upload-nav-active" href="javascript:void(0);">在线管理</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ui-layout-center" >
		<iframe name="content_body" id="content_body" src="<?php echo url('Uploadify/get_images_path',['num'=>$info['num'],'func'=>$info['func']]); ?>" width="100%" height="100%" frameborder="0" style="margin-bottom: 50px;"></iframe>
        <div class="upload-button">
			<div id="saveBtn" class="upload-btn">确定使用</div>
		</div>
	</div>
	<div class="ui-layout-east area manage-area" id="manage_area">
		<div class="ztreeContent">
			<div id="tree" class="ztree"></div>
		</div>
	</div>
	
    <script type="text/javascript" src="/public/static/common/js/jquery.min.js"></script>
    <script src="/public/static/admin/js/jquery.layout-latest.min.js"></script>
    <script type="text/javascript" src="/public/plugins/ztree/js/jquery.ztree.core.min.js"></script>
    <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo (isset($version) && ($version !== '')?$version:'1.2.9'); ?>"></script>

    <script type="text/javascript">
        var myLayout;
        jQuery(document).ready(function () {
            myLayout = jQuery("body").layout({
            /*  全局配置 */
                closable:                   false    /* 是否显示点击关闭隐藏按钮*/
            ,   resizable:                  true    /* 是否允许拉动*/
            ,   maskContents:               true    /* 加入此参数，框架内容页就可以拖动了*/
            /*  顶部配置 */
            ,   north__spacing_open:        0       /* 顶部边框大小*/
            /*  底部配置 */
            ,   south__spacing_open:        0       /* 底部边框大小*/
			,   west__spacing_open:         0       /* 左部边框大小*/
			,   east__spacing_open:         1       /* 右部边框大小*/
            /*  some pane-size settings*/
            ,   west__minSize:              140     /*左侧最小宽度*/
            ,   west__maxSize:              143     /*左侧最大宽度*/
            /*  左侧配置 */
            ,   west__slidable:             false
            ,   west__animatePaneSizing:    false
            ,   west__fxSpeed_size:         "slow"  /* 'fast' animation when resizing west-pane*/
            ,   west__fxSpeed_open:         1000    /* 1-second animation when opening west-pane*/
            ,   west__fxSettings_open:      { easing: "easeOutBounce" } // 'bounce' effect when opening*/
            ,   west__fxName_close:         "none"  /* NO animation when closing west-pane*/
            ,   stateManagement__enabled:   false   /*是否读取cookies*/
            ,   showDebugMessages:          false ,
            }); 
        });

        var zNodes = <?php echo $zNodes; ?>;
        var setting = {
            view:{
                dblClickExpand:false
                ,showLine:true
                // ,showIcon: false
            },
            data:{
                simpleData:{
                    enable:true
                }
            },
            callback:{
                beforeExpand:beforeExpand
                ,onExpand:onExpand
                ,onClick:onClick
            }
        };
        var curExpandNode=null;
        function beforeExpand(treeId,treeNode) {
            var pNode=curExpandNode?curExpandNode.getParentNode():null;
            var treeNodeP=treeNode.parentTId?treeNode.getParentNode():null;
            var zTree=$.fn.zTree.getZTreeObj("tree");
            for(var i=0,l=!treeNodeP?0:treeNodeP.children.length;i<l; i++){
                if(treeNode!==treeNodeP.children[i]){zTree.expandNode(treeNodeP.children[i],false);}
            };
            while (pNode){
                if(pNode===treeNode){break;}
                pNode=pNode.getParentNode();
            };
            if(!pNode){singlePath(treeNode);}
        };
        function singlePath(newNode) {
            if (newNode === curExpandNode) return;
            if (curExpandNode && curExpandNode.open==true) {
                var zTree = $.fn.zTree.getZTreeObj("tree");
                if (newNode.parentTId === curExpandNode.parentTId) {
                    zTree.expandNode(curExpandNode, false);
                } else {
                    var newParents = [];
                    while (newNode) {
                        newNode = newNode.getParentNode();
                        if (newNode === curExpandNode) {
                            newParents = null;
                            break;
                        } else if (newNode) {
                            newParents.push(newNode);
                        }
                    }
                    if (newParents!=null) {
                        var oldNode = curExpandNode;
                        var oldParents = [];
                        while (oldNode) {
                            oldNode = oldNode.getParentNode();
                            if (oldNode) {
                                oldParents.push(oldNode);
                            }
                        }
                        if (newParents.length>0) {
                            zTree.expandNode(oldParents[Math.abs(oldParents.length-newParents.length)-1], false);
                        } else {
                            zTree.expandNode(oldParents[oldParents.length-1], false);
                        }
                    }
                }
            }
            curExpandNode = newNode;
        };

        function onExpand(event,treeId,treeNode){curExpandNode=treeNode;};
        
        function onClick(e,treeId,treeNode){
            var zTree=$.fn.zTree.getZTreeObj("tree");
            zTree.expandNode(treeNode,null,null,null,true);
        }

        $(function(){
            $.fn.zTree.init($("#tree"),setting,zNodes);
            $(".ui-layout-north li:first-child").click();
        });
    </script>

    <script type="text/javascript">
        // 点击确认使用
        $("#saveBtn").click(function(){
            var frm = $("#content_body").contents();

            // 将选中的图片拼装数组
            var images_array = [];
            frm.find("#list li").each(function(){
                var val = $(this).attr("data-url");
                if($(this).hasClass("selected")){
                    images_array.push(val);
                }
            });

            // 若未选择图片就点确认则提示
            if (!images_array.length) {
                layer.msg('请选择图片~~', {icon: 2,time: 1500});
                return false;
            }

            $.ajax({
                type:'POST',
                url:"<?php echo url('Uploadify/update_pic', ['_ajax'=>1]); ?>",
                data:{images_array:images_array},
                success: function(res) {
                    
                }
            });

            // 调用父级方法，传入图片数据
            var callback = "<?php echo $info['func']; ?>";
            var num = <?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>;
            if(num > 0){
                if (num == 1) {
                    fileurl_tmp = images_array[0];
                } else {
                    fileurl_tmp = images_array;
                }
                eval('window.parent.'+callback+'(fileurl_tmp)');
                window.parent.layer.closeAll();
            }
        });
    </script>
</body>
</html>