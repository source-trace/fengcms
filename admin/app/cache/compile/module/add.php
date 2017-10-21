<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" CONTENT="no-cache">     
<meta http-equiv="Cache-Control" CONTENT="no-cache">     
<meta http-equiv="Expires" CONTENT="0">
<title><?php if(($item)){echo $item;}?>管理 - <?php if(($item)){echo $item;}?>添加</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="public/jquery/validform/css.css" rel="stylesheet" type="text/css" />
<link href="public/jquery/validform/plugin/datePicker/datePicker.css" type="text/css" rel="stylesheet" />

<script src="public/jquery/jquery.js"></script>
<script src="public/jquery/validform/validform.js"></script>
<script type="text/javascript" src="public/jquery/validform/plugin/datePicker/jquery.datePicker-min.js"></script>

<script src="public/htmledit/kindeditor.js"></script>
<script src="public/htmledit/lang/zh_CN.js"></script>
<script src="js/common.js"></script>
<script type="text/javascript">
$(function(){
	data=$(".form").Validform({
		tiptype:2,
		callback:function(data){
			if(data.status=="y"){
				location.href =	"?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=execution&type=save&re=1&id="+data.id;
			}else{
				location.href =	"?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=execution&type=save&re=0&id="+data.id;
			}
		},
		usePlugin:{
					datepicker:{
						format:"yyyy-mm-dd",//指定输出的时间格式;
						firstDayOfWeek:1,//指定每周开始的日期，0、1-6 对应 周日、周一到周六;
						callback:function(date,obj){//指定选择日期后的回调函数;
							//date:选中的日期;
							//obj:当前表单元素;
							$("#msgdemo2").text(date+" is selected");
						},
						//以上三个参数是在Validform插件内调用Datepicker时可传入的参数;
						//下面几个参数是Datepicker插件本身初始化时可接收的参数，还有更多请查看页面说明;
						clickInput:true,
						startDate:"1970-00-00",
						createButton:false
					}
				}

	});

	$("#save").click(function(){
		data.ajaxPost();
		$.Hidemsg();
	});
});
</script>

</head>

<body>

<div id="main">
	<form method="post" action="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=save" class="form">
		<div id="main_top">
			<dl id="article_ico">
				<dd class="art_ico_8"><a href="#" id="save">保存<?php if(($item)){echo $item;}?></a></dd>
				<dd class="art_ico_9"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>">取消返回</a></dd><?php if($_GET['project']=="tags" || $_GET['project']=="author" || $_GET['project']=="inputer" || $_GET['project']=="origin" || $_GET['project']=="friend"){?>
				<dd class="art_ico_9"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=batchadd">批量添加</a></dd>
				<?php }?></dl>
		</div>
		<div id="art_body">
			<table cellspacing="0" class="add_art">
			 <?php if((M("field")->findall("module_id=".$id."&&status=1")) && is_array(M("field")->findall("module_id=".$id."&&status=1"))) { foreach(M("field")->findall("module_id=".$id."&&status=1") as $k => $v) { ?><?php include Template::Tpl("system/form/".$v['type_quote']); ?><?php }} ?></table>
		</div>
	</form>
</div>

</body>
</html>
