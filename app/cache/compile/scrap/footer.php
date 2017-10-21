<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<footer id="footer" class="web">
	<div id="footer_link"><?php if((M("module")->l("single","w[classid=49&&status=1];f[html,title];n[30];s[id,2]")) && is_array(M("module")->l("single","w[classid=49&&status=1];f[html,title];n[30];s[id,2]"))) { foreach(M("module")->l("single","w[classid=49&&status=1];f[html,title];n[30];s[id,2]") as $v) { ?><a href="<?php echo url($v['html']);?>" target="_blank"><?php if(($v['title'])){echo $v['title'];}?></a>&nbsp;|&nbsp;<?php }} ?><a href="<?php echo curl('map');?>" target="_blank">网站地图</a>&nbsp;|&nbsp;
		<a href="<?php echo curl('message');?>" target="_blank">在线留言</a>
	</div>
	<div id="copy"><?php if(($web['copyright'])){echo $web['copyright'];}?></div>
</footer>