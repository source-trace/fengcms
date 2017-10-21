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
<form method="post" action="?controller=dbmanage&operate=save&type=0" class="form">
	<div id="main_top">
		<dl id="article_ico">
			<dd class="art_ico_8"><a href="?controller=dbmanage&operate=dbbackup">备份数据</a></dd>
			<dd class="art_ico_9"><a href="?controller=dbmanage&operate=dbregain">恢复数据</a></dd>
			<dd class="art_ico_6"><a href="?controller=dbmanage&operate=dbmanages">管理备份</a></dd>
		</dl>
	</div>
	<div id="art_body">
		<table cellspacing="0" cellpadding="0" border="0" class="add_art">
			<tr>
				<th colspan="2" style="text-align:center;font-size:16px">备份数据</th>
			</tr>
			<tr>
				<th style="width:300px">备份说明：</th>
				<td>您的数据库将备份到 “ /后台目录/app/dbbackup/ ”下面，备份格式为：当前日期_当前时间.sql</td>
				<td></td>
			</tr>
			<tr>
				<th>确定备份：</th>
				<td><input type="button" id="save" class="p5_10" value="备份数据库"></td>
			</tr>
		</table>
	</div>
</div>
</form>

</body>
</html>
