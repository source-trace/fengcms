<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" CONTENT="no-cache">     
<meta http-equiv="Cache-Control" CONTENT="no-cache">     
<meta http-equiv="Expires" CONTENT="0">
<title>文章管理</title>

<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="public/jquery/validform/css.css" rel="stylesheet" type="text/css" />
<script src="public/jquery/jquery.js"></script>
<script src="public/jquery/validform/validform.js"></script>
<script src="public/htmledit/kindeditor.js"></script>
<script src="public/htmledit/lang/zh_CN.js"></script>
<script src="js/common.js"></script>
<script src="js/base.js"></script>
</head>
<body>
<div id="main">
<form method="post" action="?controller=base&operate=save" class="form">
	<div id="main_top">
		<dl id="article_ico">
			<dd class="art_ico_8"><a href="#" id="save">保存配置</a></dd>
		</dl>
	</div>
	<div id="art_body">
		<table cellspacing="0" class="add_art">
			<tr>
				<th>网站名称：</th>
				<td width="320"><input name="name" type="text" id="name" class="inputxt" style="width:300px" datatype="*1-255" errormsg="网站名称至少6个字符！" value="<?php if(($name)){echo $name;}?>" /></td>
				<td><span class="article_notes colorf60">※：网站的简短名称，如“FengCms”</span></td>
			</tr>
			<tr>
				<th>网站标题：</th>
				<td><input name="title" type="text" id="title" class="inputxt" style="width:300px" datatype="*1-255" errormsg="网站标题至少6个字符！" value="<?php if(($title)){echo $title;}?>" /></td>
				<td><span class="article_notes colorf60">※：网站标题，如“FengCms 最好用的Cms系统”</span></td>
			</tr>
			<tr>
				<th>网站域名：</th>
				<td><input name="domran" type="text" id="domran" class="inputxt" style="width:300px" datatype="*5-255" errormsg="网站标题至少5个字符！" value="<?php if(($_SERVER['SERVER_NAME'])){echo $_SERVER['SERVER_NAME'];}?>" /></td>
				<td><span class="article_notes colorf60">※：自动获取，请勿修改</span></td>
			</tr>
			<tr>
				<th>伪静态：</th>
				<td>
				<label><input type="radio" name="url_type" id="url_type" value="1" <?php if(URL_TYPE==1){?>checked<?php }?>>开启伪静态</label>
				<label><input type="radio" name="url_type" id="url_type" value="0" <?php if(URL_TYPE==0){?>checked<?php }?>>关闭伪静态</label>
				</td>
				<td><span class="article_notes colorf60">※：开启关闭伪静态</span></td>
			</tr>
			<tr>
				<th>关键词：</th>
				<td><input name="key" type="text" id="key" class="inputxt" style="width:300px" datatype="*" errormsg="网站关键词不能为空！"  value="<?php if(($key)){echo $key;}?>" /></td>
				<td><span class="article_notes colorf60">※：KeyWords，针对搜索引擎</span></td>
			</tr>
			<tr>
				<th>站点描述：</th>
				<td><textarea name="description" id="description" altercss="gray" class="gray" style="width:500px" datatype="*" errormsg="站点描述不能为空！"><?php if(($description)){echo $description;}?></textarea></td>
				<td><span class="article_notes colorf60">※：description，针对搜索引擎</span></td>
			</tr>
			<tr>
				<th>版权信息：</th>
				<td><textarea name="copyright" id="copyright" altercss="gray" class="gray" style="width:500px" datatype="*" errormsg="版权信息不能为空！" ><?php if(($copyright)){echo $copyright;}?></textarea></td>
				<td><span class="article_notes colorf60">※：版权信息，支持Html代码</span></td>
			</tr>
			<tr>
				<th>首页模板：</th>
				<td><input type="text" name="template" id="template_url" value="<?php if(($template)){echo $template;}?>" class="inputxt" style="width:300px" datatype="*6-255" errormsg="网站名称至少6个字符！" value="<?php if(($name)){echo $name;}?>"/> <input type="button" id="filemanage" value="浏览模板" class="inputxt" style="width:100px;height:30px;" /></td>
				<td><span class="article_notes colorf60">※：一般无需修改</span></td>
			</tr>
		</table>
	</div>
</div>
<input type="hidden" name="time" id="time" value="<?php echo time();?>">
</form>
 </body>
</html>
