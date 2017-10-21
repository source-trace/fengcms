<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<?php if(($web=M("web")->information)){ $web=M("web")->information;}?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title><?php include Template::Tpl("inc/title.html"); ?></title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<meta name="description" content="<?php if(($web['name'])){echo $web['name'];}?>全站有关“<?php if(($_GET['tags'])){echo $_GET['tags'];}?>”的内容。 ">
<meta name="keywords" content="<?php if(($_GET['tags'])){echo $_GET['tags'];}?>">
<meta name="generator" content="FengCms" />
<meta name="author" content="FengCms">
<script src="/js/jquery.min.js"></script>
<script src="/js/common.js"></script>
<!--[if IE]><script src="/js/html5.js"></script><![endif]-->
</head>
<body>

<?php include Template::Tpl("scrap/header.html"); ?>


<?php if(($search=M("module")->search($_GET,'info,date,hits',10))){ $search=M("module")->search($_GET,'info,date,hits',10);}?>
<div id="class_main" class="web">
	<hgroup id="hgroup">
		<h2>站内搜索</h2>
		<span>搜索“<?php if(($_GET['tags'])){echo $_GET['tags'];}?>”，本次共找到相关网页<?php if($search['total']){?><?php if(($search['total'])){echo $search['total'];}?><?php } else { ?>0<?php }?>条</span>
	</hgroup>

	<div id="class_contont">
		<div id="class_list"><?php if(($search['list']) && is_array($search['list'])) { foreach($search['list'] as $k => $v) { ?><dl><?php if($v['img']){?><dt><img src="<?php if(($v['img'])){echo $v['img'];}?>" alt="<?php if(($v['title'])){echo $v['title'];}?>"></dt><?php }?><dd>
					<strong><a href="<?php echo url($v['html']);?>" target="_blank"><?php if(($v['title'])){echo $v['title'];}?></a></strong>
					<section>
						<em class="class_list_time">更新时间：</em>
						<time><?php if(($v['date'])){echo $v['date'];}?></time>
						<em class="class_list_author">文章作者：</em>
						<span><?php if(($v['author'])){echo $v['author'];}?></span>
						<em class="class_list_hot">阅读次数：</em>
						<span><tt><?php echo intval($v['hits']);?></tt>次</span>
					</section>
					<p><?php if(($v['info'])){echo $v['info'];}?></p>
				</dd>
			</dl><?php }} ?></div>
		<div id="fenye"><?php if(($search['fy'])){echo $search['fy'];}?></div>
	</div>
	
</div>

<?php include Template::Tpl("scrap/footer.html"); ?>
</body>
</html>