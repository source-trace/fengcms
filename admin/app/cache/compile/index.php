<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" CONTENT="no-cache">     
<meta http-equiv="Cache-Control" CONTENT="no-cache">     
<meta http-equiv="Expires" CONTENT="0">
<title>后台管理</title>

<link href="css/css.css" rel="stylesheet" type="text/css" />
<script src="js/tab.js"></script>

</head>

<body id="bodyie6">
<!--[if IE 6]><div id="le6">
	亲爱的站长，您好。非常感谢您选择FengCms内容管理系统。本管理系统的管理后台由于考虑执行效率，因此，放弃支持IE 6浏览器。所以，您必须使用IE6以上浏览器，或者非IE浏览器，才能正常使用本后台。我们这样设计的原因是，如果实现对ie6的支持，需要写大量的CSS HACK，这将影响到网站后台的执行效率。而且网站后台只有站长您自己使用。我们相信作为互联网的织网者的一份子，是和我们一样厌弃IE6浏览器的。<span>不过您可以放心的是，网站前台和后台没有任何关系，网站前台是绝对支持IE6的。如果站长您非常喜欢IE6浏览器，请到 <a href="http://bbs.fengcms.com" target="_blank">FengCms官方论坛</a> 反馈，我们会针对站长的反馈，考虑下一个版本需不需要支持IE6浏览器。如果您看到这段文字，实在是表示抱歉。</span>

</div><![endif]--><?php if($_SESSION['manage']==""){?>
	<meta http-equiv="refresh" content="0;url=login.php"><?php } else { ?><?php include Template::Tpl("top.html"); ?>
<?php include Template::Tpl("menu.html"); ?>
	
<iframe name="main" id="ifmain" width="100%" style="height:100%;overflow-y:auto;" align="middle" marginwidth="0" marginheight="0" frameborder="0" allowtransparency="true" application="true" scrolling="yes" src="?controller=home&operate=main"></iframe>
	
<?php include Template::Tpl("foot.html"); ?>
<?php }?> </body>
</html>
