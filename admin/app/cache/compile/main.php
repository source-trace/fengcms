<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<?php if(($base=M('base')->findone())){ $base=M('base')->findone();}?>
<?php if(($version=M('base')->version())){ $version=M('base')->version();}?>
<?php if(($manage=D('manage')->getone())){ $manage=D('manage')->getone();}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script src="js/tab.js"></script>
<script src="public/jquery/jquery.js"></script>
<script>
	$(document).ready(function() {
		$("#safe").load('?controller=safe');
		//$("#version").load('?controller=safe&operate=serverversion');
	});
</script>
</head>

<body>

<div id="main">
	<div id="main_top"><span class="colorf60"><?php if(($manage['admin'])){echo $manage['admin'];}?></span>，你好，你已经进入到《<span class="colorf60"><?php if(($base['name'])){echo $base['name'];}?></span>》管理后台。 你的身份：<span class="colorf60">超级管理员</span>。</div>
	<div id="main_body">
		<table cellspacing="20" id="main_table">
			<tr>
				<td>
					<div class="main_box">
						<div class="main_box_h3"><h3>网站SEO信息</h3><a href="http://seo.chinaz.com/?host=<?php if(($base['domran'])){echo $base['domran'];}?>" target="_blank">查看《<?php if(($base['name'])){echo $base['name'];}?>》SEO报告</a></div>
						<div class="main_box_con">
							<p class="color00f">※ 请点击右上角“查看《<?php if(($base['name'])){echo $base['name'];}?>》SEO报告”，直接进入chinaz的站长查询工具查询。</p>
							<p>欢迎使用由地方网络工作室特别开发的“FengCms 内容管理系统”，本系统极致简约、灵活多变，小巧灵秀，它将是您建设网站的最佳助手！</p>
							<p>FengCms 内容管理系统由地方网络工作室独立开发，地方网络工作室对 FengCms 内容管理系统非注明版权的其他部分拥有完整版权。</p>
							<p>FengCms 编辑器部分采用 KindEditor 编辑器，KindEditor编辑器版权归KindEditor官方所有。即时验证部分采用 validform ，validform版权归validform所有。</p>
							<p>您可以在非商业运用的情况下免费使用FengCms内容管理系统。您可以在FengCms官方版本的基础上二次开发。二次开发部分版权归开发者所有。但二次开发部分如果开发者决定发布，则必须在FengCms官方论坛首发，以方便其他使用FengCms的朋友。</p>
						</div>
					</div>
				</td>
				<td>
					<div class="main_box">
						<div class="main_box_h3"><h3>网站安全信息</h3></div>
						<div class="main_box_con" id="safe"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="main_box">
						<div class="main_box_h3"><h3>网站程序信息</h3></div>
						<div class="main_box_con">
							<ul id="copyinfo">
								<li><em>程序版本:</em> <?php if(($version)){echo $version;}?></li>
								<li><em>最新版本:</em> <span id="version"><script type="text/javascript" src="http://www.fengcms.com/version.js"></script></span></li>
								<li><em>升级提示:</em> 如果程序版本低于最新版本，请及时更新。</li>
								<li><em>开发团队:</em> <strong><a href="http://www.hezewangzhan.com">地方网络工作室</a></strong> FengCms开发团队</li>
								<li><em>官方网站:</em> <a href="http://www.fengcms.com" target="_blank">www.fengcms.com</a></li>
								<li><em>交流论坛:</em> <a href="http://bbs.fengcms.com" target="_blank">bbs.fengcms.com</a></li>
								<li><em>联系邮箱:</em> web@fengcms.com</li>
								<li><em>联系QQ: </em> 61572536</li>
								<br />
							</ul>
						</div>
					</div>
				</td>
				<td>
					<div class="main_box">
						<div class="main_box_h3"><h3>FengCms 使用帮助</h3><a href="http://bbs.fengcms.com/" target="_blank">更多内容</a></div>
						<div class="main_box_con">
							<div id="main_help">FengCms 使用帮助正在构建中。请点击右上角“更多帮助信息”登陆FengCms官方论坛查看使用教程。</div>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>