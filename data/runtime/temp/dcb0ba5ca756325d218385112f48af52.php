<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:35:"./template/pc/system/users_info.htm";i:1623323200;}*/ ?>
<div class="log-in">
    <div class="button-group" onmouseover="head_nav_a();">
        <a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Users/centre", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>" title="<?php echo $users['username']; ?>" class="user-head dropdown-toggle text-center text-middle" id="a_logins_drop-menu">
            <img src="<?php echo $users['head_pic']; ?>" class="radius-circle">
        </a>
        <div class="drop-menu"  id='user_nav_z'>
        <ul onmouseout="head_nav_b();">
            <li><a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Users/index", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>">个人中心</a></li>
            <li><a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Users/collection_index", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>">我的收藏</a></li>
            <li><a href="<?php  $tagDiyurl = new \think\template\taglib\eyou\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("", "user/Users/logout", "", "", "", "", "", "", "ey_active"); echo $__VALUE__; ?>">安全退出</a></li>
        </ul>
        </div>
    </div>
</div>