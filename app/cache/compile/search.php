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





<?php if(($search=M("module")->search($_GET,'',100))){ $search=M("module")->search($_GET,'',100);}?>
<div id="web">
	<hgroup id="hgroup">
		<h2>站内搜索</h2>
		
		<span>搜索“<?php if(($_GET['tags'])){echo $_GET['tags'];}?>”，本次共找到相关网页<?php if($search['total']){?><?php if(($search['total'])){echo $search['total'];}?><?php } else { ?>0<?php }?>条</span>
	</hgroup>
	<div id="soso_list">
		<ul class="list_14"><?php if(($search['list']) && is_array($search['list'])) { foreach($search['list'] as $k => $v) { ?><li><span><?php echo date('Y-m-d',$v['time']);?></span><a href="<?php echo url($v['html']);?>" target="_blank"><?php if(($v['title'])){echo $v['title'];}?></a></li><?php if(intval(intval($k+1)%10)==0&&intval($k+1)<100){?> <div class="newsfy_line"></div><?php }?><?php }} ?></ul>			
	</div>
	
	<div id="fenye"><?php if(($search['fy'])){echo $search['fy'];}?></div>	
</div>

<?php include Template::Tpl("scrap/footer.html"); ?>
</body>
</html>