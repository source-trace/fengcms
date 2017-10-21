<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<?php if(($web=M("web")->information)){ $web=M("web")->information;}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php include Template::Tpl("inc/title.html"); ?></title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<meta name="description" content="<?php if(($description)){echo $description;}?>">
<meta name="keywords" content="<?php if(($key)){echo $key;}?>">
<meta name="generator" content="FengCms" />
<meta name="author" content="FengCms">
<script src="/js/jquery.js"></script>
<script src="/js/jquery.marquee.js"></script>
<script src="/js/jquery.hd.js"></script>
<script src="/js/common.js"></script>
<!--[if IE]><script src="/js/html5.js"></script><![endif]-->

</head>
<body>
<?php include Template::Tpl("scrap/header.html"); ?>
<div id="web">
	<div id="web_con">
		<div id="home_hd"><?php if((M("module")->l("article","w[attrib_h=1&&img!=''&&status=1];f[title,html,img];n[5];s[id,1]")) && is_array(M("module")->l("article","w[attrib_h=1&&img!=''&&status=1];f[title,html,img];n[5];s[id,1]"))) { foreach(M("module")->l("article","w[attrib_h=1&&img!=''&&status=1];f[title,html,img];n[5];s[id,1]") as $k => $v) { ?><a href="<?php echo url($v['html']);?>"><img src="<?php if(($v['img'])){echo $v['img'];}?>" alt="<?php if(($v['title'])){echo $v['title'];}?>" width="300" height="274"></a><?php }} ?></div>
		<div id="home_news">
			<div id="home_news_tt">
				<dl><?php if((M("module")->l("article","w[attrib_t=1&&status=1];f[title,html];n[3];s[id,1]")) && is_array(M("module")->l("article","w[attrib_t=1&&status=1];f[title,html];n[3];s[id,1]"))) { foreach(M("module")->l("article","w[attrib_t=1&&status=1];f[title,html];n[3];s[id,1]") as $k => $v) { ?><?php if($k==0){?><dt><?php } else { ?><dd><?php }?><a href="<?php echo url($v['html']);?>"><?php if(($v['title'])){echo $v['title'];}?></a><?php if($k==0){?></dt><?php } else { ?></dd><?php }?><?php }} ?></dl>
			</div>
			<div id="home_news_list">
				<ul class="list_14"><?php if((M("module")->l("article","w[status=1];f[title,html,date];n[8];s[id,1]")) && is_array(M("module")->l("article","w[status=1];f[title,html,date];n[8];s[id,1]"))) { foreach(M("module")->l("article","w[status=1];f[title,html,date];n[8];s[id,1]") as $k => $v) { ?><li><span><?php echo date('m/d',strtotime($v['date']));?></span><a href="<?php echo url($v['html']);?>"><?php if(($v['title'])){echo $v['title'];}?></a></li><?php }} ?></ul>
			</div>
		</div>
		<div id="home_gunpic">
			<div class="home_box">
				<div class="boxtitle">
					<h3>滚动图文</h3>
					<div class="home_gun_control">
						<a href="javascript:void(0);" id="gol"><em></em></a>
						<a href="javascript:void(0);" id="gor"><em></em></a>
					</div>
				</div>
				<div id="home_guncon">
					<ul><?php if((M("module")->l("article","w[attrib_g=1&&img!=''&&status=1];f[title,html,img];n[8];s[id,1]")) && is_array(M("module")->l("article","w[attrib_g=1&&img!=''&&status=1];f[title,html,img];n[8];s[id,1]"))) { foreach(M("module")->l("article","w[attrib_g=1&&img!=''&&status=1];f[title,html,img];n[8];s[id,1]") as $k => $v) { ?><li><a href="<?php echo url($v['html']);?>" title="<?php if(($v['title'])){echo $v['title'];}?>"><img src="<?php if(($v['img'])){echo $v['img'];}?>" alt="<?php if(($v['title'])){echo $v['title'];}?>"/><span><?php if(($v['title'])){echo $v['title'];}?></span></a></li><?php }} ?></ul>
				</div>
			</div>
		</div>
		<div id="home_xh"><?php if((M("module")->l("classify","w[project='article'&&classid=0];f[id,name,html];n[20];s[sort,2]")) && is_array(M("module")->l("classify","w[project='article'&&classid=0];f[id,name,html];n[20];s[sort,2]"))) { foreach(M("module")->l("classify","w[project='article'&&classid=0];f[id,name,html];n[20];s[sort,2]") as $k => $v) { ?><div class="home_box <?php if(intval($k%2)==0){?>f_l clear<?php } else { ?>f_r<?php }?>">
				<div class="boxtitle">
					<h3><?php if(($v['name'])){echo $v['name'];}?></h3>
					<a href="<?php echo url($v['html']);?>" class="more">更多</a>
				</div>
				<ul class="list_12">
					
					<?php if(($classid=$v['id'])){ $classid=$v['id'];}?><?php if((M("module")->l("article","w[status=1,$classid];f[title,html,date];n[8];s[id,1]")) && is_array(M("module")->l("article","w[status=1,$classid];f[title,html,date];n[8];s[id,1]"))) { foreach(M("module")->l("article","w[status=1,$classid];f[title,html,date];n[8];s[id,1]") as $key => $val) { ?><li><span><?php echo date('m/d',strtotime($val['date']));?></span><a href="<?php echo url($val['html']);?>"><?php if(($val['title'])){echo $val['title'];}?></a></li><?php }} ?></ul>
			</div><?php if($k==3){?>
			<div class="home_c_l_show"><?php include Template::Tpl("show/home_c_l_show.html"); ?></div>
			<?php }?><?php }} ?></div>
	</div>
	<div id="web_bar">
		<div class="home_box">
			<div class="boxtitle">
				<h3>最新推荐</h3>
			</div>
			<ul class="list_12"><?php if((M("module")->l("article","w[attrib_j=1&&status=1];f[title,html,date];n[10];s[id,1]")) && is_array(M("module")->l("article","w[attrib_j=1&&status=1];f[title,html,date];n[10];s[id,1]"))) { foreach(M("module")->l("article","w[attrib_j=1&&status=1];f[title,html,date];n[10];s[id,1]") as $k => $v) { ?><li><span><?php echo date('m/d',strtotime($v['date']));?></span><a href="<?php echo url($v['html']);?>"><?php if(($v['title'])){echo $v['title'];}?></a></li><?php }} ?></ul>
		</div>
		<div id="home_show_a">
			<?php include Template::Tpl("show/home_a_show.html"); ?>
		</div>
		<div class="home_box">
			<div class="boxtitle">
				<h3>图文推荐</h3>
			</div>
			<ul class="bar_pic"><?php if((M("module")->l("article","w[attrib_j=1&&img!=''&&status=1];f[title,html,img];n[4];s[id,1]")) && is_array(M("module")->l("article","w[attrib_j=1&&img!=''&&status=1];f[title,html,img];n[4];s[id,1]"))) { foreach(M("module")->l("article","w[attrib_j=1&&img!=''&&status=1];f[title,html,img];n[4];s[id,1]") as $k => $v) { ?><li><a href="<?php echo url($v['html']);?>" title="<?php if(($v['title'])){echo $v['title'];}?>"><img src="<?php if(($v['img'])){echo $v['img'];}?>" alt="<?php if(($v['title'])){echo $v['title'];}?>"/><span><?php if(($v['title'])){echo $v['title'];}?></span></a></li><?php }} ?></ul>
		</div>
		<div class="home_box">
			<div class="boxtitle">
				<h3>热门资讯</h3>
			</div>
			<ul class="list_12"><?php if((M("module")->l("article","w[attrib_r=1&&status=1];f[title,html,date];n[10];s[hits,1]")) && is_array(M("module")->l("article","w[attrib_r=1&&status=1];f[title,html,date];n[10];s[hits,1]"))) { foreach(M("module")->l("article","w[attrib_r=1&&status=1];f[title,html,date];n[10];s[hits,1]") as $k => $v) { ?><li><span><?php echo date('m/d',strtotime($v['date']));?></span><a href="<?php echo url($v['html']);?>"><?php if(($v['title'])){echo $v['title'];}?></a></li><?php }} ?></ul>
		</div>
		<div class="home_box">
			<div class="boxtitle">
				<h3>热门图文</h3>
			</div>
			<ul class="bar_pic"><?php if((M("module")->l("article","w[attrib_r=1&&img!=''&&status=1];f[title,html,img];n[4];s[hits,1]")) && is_array(M("module")->l("article","w[attrib_r=1&&img!=''&&status=1];f[title,html,img];n[4];s[hits,1]"))) { foreach(M("module")->l("article","w[attrib_r=1&&img!=''&&status=1];f[title,html,img];n[4];s[hits,1]") as $k => $v) { ?><li><a href="<?php echo url($v['html']);?>" title="<?php if(($v['title'])){echo $v['title'];}?>"><img src="<?php if(($v['img'])){echo $v['img'];}?>" alt="<?php if(($v['title'])){echo $v['title'];}?>"/><span><?php if(($v['title'])){echo $v['title'];}?></span></a></li><?php }} ?></ul>
		</div>
		<div class="home_box">
			<div class="boxtitle">
				<h3>标签云</h3>
				<a href="<?php echo curl('tags');?>" class="more">更多</a>
			</div>
			<ul class="tags_list"><?php if((M("module")->l("tags","f[name];n[20];s[hits,1]")) && is_array(M("module")->l("tags","f[name];n[20];s[hits,1]"))) { foreach(M("module")->l("tags","f[name];n[20];s[hits,1]") as $k => $v) { ?><li><a href="<?php echo search($v['name']);?>" target="_blank"><?php if(($v['name'])){echo $v['name'];}?></a></li><?php }} ?></ul>
		</div>
	</div>
</div>



<div id="f_link" class="web">
	<div class="home_box">
		<div class="boxtitle">
			<h3>友情链接</h3>
		</div>
		<ul><?php if((M("module")->l("friend","w[status=1];f[url,name];n[30];s[time,1]")) && is_array(M("module")->l("friend","w[status=1];f[url,name];n[30];s[time,1]"))) { foreach(M("module")->l("friend","w[status=1];f[url,name];n[30];s[time,1]") as $v) { ?><li><a href="<?php if(($v['url'])){echo $v['url'];}?>" target="_blank"><?php if(($v['name'])){echo $v['name'];}?></a></li><?php }} ?></ul>
	</div>
</div>
<?php include Template::Tpl("scrap/footer.html"); ?>
</body>
</html>