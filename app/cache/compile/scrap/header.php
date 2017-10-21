<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<div id="head_top">
	<div class="web">
		<div id="head_top_hy"><strong><?php if(($web['name'])){echo $web['name'];}?></strong>欢迎您的光临！</div>
		<div id="head_top_link">
			<a onclick="SetHome(window.location)" href="javascript:void(0)">设为首页</a> | 
			<a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)">加入收藏</a>
		</div>
	</div>
</div>
<header id="head" class="web">
	<h1 id="logo"><a href="/" target="_blank" alt="<?php if(($web['name'])){echo $web['name'];}?>"><?php if(($web['title'])){echo $web['title'];}?></a></h1>
	<div id="soso">
		<form method="post" action="/?controller=search">
		<div class="soso_select" id="projectval">
			<select id="project" name="project">
				<option value="">全部</option><?php if((M("module")->l("module","w[type=1&&search=1&&status=1];f[project,item];n[20];s[id,2]")) && is_array(M("module")->l("module","w[type=1&&search=1&&status=1];f[project,item];n[20];s[id,2]"))) { foreach(M("module")->l("module","w[type=1&&search=1&&status=1];f[project,item];n[20];s[id,2]") as $k => $v) { ?><option value="<?php if(($v['project'])){echo $v['project'];}?>"<?php if($_GET['project']==$v['project']){?> selected="selected"<?php }?>><?php if(($v['item'])){echo $v['item'];}?></option><?php }} ?></select>
		</div>
		<div class="soso_input">
			<input type="text" class="soso_text" name="tags" id="tags" value="<?php if($_GET['tags']){?><?php if(($_GET['tags'])){echo $_GET['tags'];}?><?php }?>" />
			<input type="submit" class="soso_submit" value="搜索">
			
		</div>
		</form>
		
		<div class="soso_tags">
			<strong>热搜：</strong><?php if((M("module")->l("tags","f[name];s[hits,1]")) && is_array(M("module")->l("tags","f[name];s[hits,1]"))) { foreach(M("module")->l("tags","f[name];s[hits,1]") as $k => $v) { ?><a href="<?php echo search($v['name']);?>"><?php if(($v['name'])){echo $v['name'];}?></a> <?php }} ?></div>
	</div>
</header>
<nav id="nav">
	<ul class="web">

		

		<li class="nav_home"><a href="/" <?php if(!$_GET['controller']){?>class="nav_on"<?php }?>>网站首页</a></li><?php if((M("module")->l("classify","w[classid=0&&nav=1];f[id,html,name,url_type];n[100];s[sort,2]")) && is_array(M("module")->l("classify","w[classid=0&&nav=1];f[id,html,name,url_type];n[100];s[sort,2]"))) { foreach(M("module")->l("classify","w[classid=0&&nav=1];f[id,html,name,url_type];n[100];s[sort,2]") as $k => $v) { ?><li><a href="<?php if($v['type']=='url'){?><?php if(($v['html'])){echo $v['html'];}?><?php } else { ?><?php echo url($v['html']);?><?php }?>"<?php if($_GET['classid']==$v['id']||$topid==$v['id']){?> class="nav_on"<?php }?><?php if($v['url_type']=='1'){?> target="_blank"<?php }?>><?php if(($v['name'])){echo $v['name'];}?></a>
			

			<?php if(($navid=$v['id'])){ $navid=$v['id'];}?>

			

			<?php if(($navwhere=M("module")->l("classify","w[classid=$navid&&nav=1];f[id,html,name,url_type];n[100];s[sort,2]"))){ $navwhere=M("module")->l("classify","w[classid=$navid&&nav=1];f[id,html,name,url_type];n[100];s[sort,2]");}?><?php if(array_filter($navwhere)!=""){?>
			<ul class="submenu"><?php if(($navwhere) && is_array($navwhere)) { foreach($navwhere as $key => $val) { ?><li><a href="<?php if($val['type']=='url'){?><?php if(($val['html'])){echo $val['html'];}?><?php } else { ?><?php echo url($val['html']);?><?php }?>"<?php if($val['url_type']=='1'){?> target="_blank"<?php }?>><?php if(($val['name'])){echo $val['name'];}?></a></li><?php }} ?></ul>
			<?php }?></li><?php }} ?><li><a href="<?php echo curl('message');?>" <?php if($_GET['controller']=='message'){?>class="nav_on"<?php }?>>在线留言</a></li>
	</ul>
</nav>