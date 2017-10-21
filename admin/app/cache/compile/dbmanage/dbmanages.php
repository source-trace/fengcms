<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据备份管理</title>

<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="public/jquery/validform/css.css" rel="stylesheet" type="text/css" />

<script src="public/jquery/jquery.js"></script>
<script src="public/jquery/validform/validform.js"></script>
<script src="js/dbmanage.js"></script>

</head>

<body>

<div id="main">
<form method="post" action="?controller=dbmanage&operate=save&type=1" class="form">
	<div id="main_top">
		<dl id="article_ico">
			<dd class="art_ico_8"><a href="?controller=dbmanage&operate=dbbackup">备份数据</a></dd>
			<dd class="art_ico_9"><a href="?controller=dbmanage&operate=dbregain">恢复数据</a></dd>
			<dd class="art_ico_6"><a href="?controller=dbmanage&operate=dbmanages">管理备份</a></dd>
		</dl>
	</div>
	<div id="art_body">
		<div id="art_list">
			<table cellspacing="0">
				<tr>
					<th class="tal">数据库备份</th>
					<th width="100">管理选项</th>
				</tr><?php if(count($dblist)>0){?><?php if(($dblist) && is_array($dblist)) { foreach($dblist as $v) { ?><tr>
					<td class="tal"><span class="art_title_txt"><?php if(($v)){echo $v;}?></span></td>
					<td><a href="?controller=dbmanage&operate=delete&name=<?php if(($v)){echo $v;}?>" class="color999" onclick="javascript:return confirm('您确定要删除“<?php if(($v)){echo $v;}?>”这个数据库备份吗？')">删除</a></td>
				</tr><?php }} ?><?php } else { ?><tr>
					<td class="tal">暂时没有任何数据库备份</td>
					<td></td>
				</tr>
				<?php }?></table>
		</div>
	</div>
</div>
</form>

</body>
</html>
