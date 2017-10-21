<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" CONTENT="no-cache">     
<meta http-equiv="Cache-Control" CONTENT="no-cache">     
<meta http-equiv="Expires" CONTENT="0">
<title><?php if(($module['item'])){echo $module['item'];}?>管理</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/theme.css" rel="stylesheet" type="text/css" />
<link href="public/jquery/validform/css.css" rel="stylesheet" type="text/css" />

<script src="public/jquery/jquery.js"></script>
<script src="public/jquery/validform/validform.js"></script>
<script src="js/tab.js"></script>
<script type="text/javascript">
$(function(){

	data=$(".form").Validform({
		callback:function(data){
			if(data.status=="y"){
				location.href =	"?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=execution&type=exc&re=1";
			}else if(data.status=="a"){
				alert('请选择记录！');
				location.href ="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>";
			}else if(data.status=="n"){
				location.href =	"?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=execution&type=exc&re=0";
			}
		}
	});
	$(".recover"+","+".thorough"+","+".attrib_j"+","+".attrib_h"+","+".attrib_r"+","+".attrib_d"+","+".attrib_t"+","+".attrib_g").bind("click",function(){
		var item = $('input[class="record"]:checked');
		if(item.length==0){
             alert("请选择记录！");
        }else{
			$("#method").val($(this).attr("name"));
			$("#parameter").val($(this).attr("class"));
			data.ajaxPost();
			$.Hidemsg();
		}
	});

	$("#search").click(function(){
		location.href ="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&field="+$("#field").val()+"&title="+$("#title").val();
	});
		
	$("#shift").click(function(){
	var item = $('input[class="record"]:checked');
		if(item.length==0){
             alert("请选择记录！");
        }else{
			var str="";
			item.each(function(){
				str+=$(this).val()+",";
			});

			$("#siguptitle").text("批量转移");
			$("#sigupcontent").load('?controller=classify&operate=shift&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>'+"&classarray="+str);
			$('.theme-popover-mask').fadeIn(100);
			$('.theme-popover').slideDown(200);
		}
	});

	$('.theme-poptit .close').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.theme-popover').slideUp(200);
	});

});
</script>

</head>

<body>
<div id="main">
<?php if(($count=D($module['project'])->getcount())){ $count=D($module['project'])->getcount();}?><?php if(($recovercount=D($module['project'])->where("status<0")->getcount())){ $recovercount=D($module['project'])->where("status<0")->getcount();}?>
  <form name="checkboxform" method="post" action="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=batch" class="form">
	<div id="main_top">
		<dl id="article_ico">
			<dd class="art_ico_1"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=add<?php if($_GET['classid']!=""){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>">添加<?php if(($module['item'])){echo $module['item'];}?></a></dd><?php if($module['recover']==1){?><dd class="art_ico_2"><a href="#" name="recover" class="recover"><?php if(($module['item'])){echo $module['item'];}?>回收</a></dd><?php }?><dd class="art_ico_3"><a href="#" name="thorough" class="thorough">彻底删除</a></dd><?php if(in_array("classid",array_multi2single($field))){?>
			<dd class="art_ico_9"><a href="#" name="shift" id="shift">批量转移</a></dd>
			<?php }?><?php if($_GET['classid']){?>
				<?php if(($up=M("classify")->findone("id=".$_GET['classid']))){ $up=M("classify")->findone("id=".$_GET['classid']);}?><?php if($up['classid']=="0"){?>
				<dd class="art_ico_9"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>">返回上级</a></dd><?php } else { ?><dd class="art_ico_9"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&classid=<?php if(($up['classid'])){echo $up['classid'];}?>">返回上级</a></dd>
				<?php }?><?php }?><dt class="art_ico_7"><span>快速导航</span>
			</dt>
		</dl>
	</div>
	<div id="art_body"><?php if(in_array("classid",array_multi2single($field))){?>
		<div id="art_class">
			<ul><?php if(D("classify")->where('classid="'.$_GET['classid'].'"&&project="'.$_GET['project'].'"')->getcount()>0){?>
				<?php if(($where=$_GET['classid']?'type!="url"&&classid="'.$_GET['classid'].'"&&project="'.$_GET['project'].'"':'type!="url"&&classid="0"&&project="'.$_GET['project'].'"')){ $where=$_GET['classid']?'type!="url"&&classid="'.$_GET['classid'].'"&&project="'.$_GET['project'].'"':'type!="url"&&classid="0"&&project="'.$_GET['project'].'"';}?><?php } else { ?><?php if(($where=$_GET['classid']?'type!="url"&&classid="'.$up['classid'].'"&&project="'.$_GET['project'].'"':'type!="url"&&classid="0"&&project="'.$_GET['project'].'"')){ $where=$_GET['classid']?'type!="url"&&classid="'.$up['classid'].'"&&project="'.$_GET['project'].'"':'type!="url"&&classid="0"&&project="'.$_GET['project'].'"';}?>
				<?php }?><?php if((D("classify")->where($where)->sort('sort')->getall()) && is_array(D("classify")->where($where)->sort('sort')->getall())) { foreach(D("classify")->where($where)->sort('sort')->getall() as $k => $v) { ?><?php if(D("classify")->where("classid=".$v['id'])->getcount()>0){?>
						<li class="art_ico_pd"><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&classid=<?php if(($v['id'])){echo $v['id'];}?>"><?php if(($v['name'])){echo $v['name'];}?></a></li><?php } else { ?><li class="art_ico_lm"><?php if($_GET['classid']==$v['id']){?><strong><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&classid=<?php if(($v['id'])){echo $v['id'];}?>"><?php if(($v['name'])){echo $v['name'];}?></a></strong><?php } else { ?><a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&classid=<?php if(($v['id'])){echo $v['id'];}?>"><?php if(($v['name'])){echo $v['name'];}?></a><?php }?></li>
					<?php }?><?php }} ?></ul>
		</div>
		<?php }?><?php if(in_array("attrib",array_multi2single($field))){?>
		<div id="art_sx">
			<span><strong><?php if(($module['item'])){echo $module['item'];}?>系统</strong> [共有<em><?php if($record['total']){?><?php if(($record['total'])){echo $record['total'];}?><?php } else { ?>0<?php }?></em>篇 回收站<em><?php if(($count=D($_GET['project'])->where('status<0')->getcount())){ $count=D($_GET['project'])->where('status<0')->getcount();}?><?php if($count){?><?php if(($count)){echo $count;}?><?php } else { ?>0<?php }?></em>篇]</span>
			<strong>按属性查看：</strong>
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>">全部</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_j=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_j']){?>style="font-weight:600"<?php }?>>推荐</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_h=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_h']){?>style="font-weight:600"<?php }?>>幻灯</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_r=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_r']){?>style="font-weight:600"<?php }?>>热门</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_d=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_d']){?>style="font-weight:600"<?php }?>>固顶</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_t=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_t']){?>style="font-weight:600"<?php }?>>头条</a> - 
			<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&attrib_g=1<?php if($_GET['classid']){?>&classid=<?php if(($_GET['classid'])){echo $_GET['classid'];}?><?php }?>" <?php if($_GET['attrib_g']){?>style="font-weight:600"<?php }?>>滚动</a>
		</div>
		<?php }?><div id="art_list">
			<table cellspacing="0">
				<tr>
					<th width="40">选择</th>
					 <?php if(($field) && is_array($field)) { foreach($field as $k => $v) { ?><th <?php if($k==0){?>class="art_title_th"<?php }elseif($v['type']==12||$v['type']==15||$v['type']==30||$v['type']==14) { ?>style="width:80px"<?php }elseif($v['type']==2||$v['type']==10||$v['type']==28) { ?>style="width:120px"<?php }elseif($v['type']==3) { ?>style="width:150px"<?php } else { ?>style="width:100px"<?php }?>><?php if(($v['aliases'])){echo $v['aliases'];}?></th><?php }} ?><th width="100">操作</th>
				</tr><?php if(($record['list']) && is_array($record['list'])) { foreach($record['list'] as $k => $v) { ?><tr>
					<td width="40"><input type="checkbox" class="record" id="record<?php echo intval($k+1);?>" name="record[]" value="<?php if(($v['id'])){echo $v['id'];}?>" /></td><?php if(($field) && is_array($field)) { foreach($field as $key => $val) { ?><?php include Template::Tpl("system/list/".$val['type_quote']); ?><?php }} ?><td width="100">
						<a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=update&id=<?php if(($v['id'])){echo $v['id'];}?>" class="color00f storng">修改</a> <?php if($module['recover']=="1"){?>
							| <a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=recoverone&id=<?php if(($v['id'])){echo $v['id'];}?>" class="color999">回收站</a><?php }elseif($module['recover']=="0") { ?>| <a href="?controller=module&project=<?php if(($_GET['project'])){echo $_GET['project'];}?>&operate=deleteone&id=<?php if(($v['id'])){echo $v['id'];}?>" class="color999">删除</a>
						<?php }?></td>
					</tr><?php }} ?></table>
		</div>
		<div id="art_sxsz">
			<div id="art_xz"><input type="button" value="全选" id="art_xz_qx" onclick="checkAll()" /><input type="button" value="反选" id="art_xz_fx" onclick="switchAll()" /><input type="button" value="不选" id="art_xz_bx" onclick="uncheckAll()" /></div><?php if(in_array("attrib",array_multi2single($field))){?>
			<div id="art_sxsz_xz"><strong>设置属性：</strong> 
				[<a href="#" class="attrib_j" name="attrib">推荐</a>]
				[<a href="#" class="attrib_h" name="attrib">幻灯</a>]
				[<a href="#" class="attrib_r" name="attrib">热门</a>]
				[<a href="#" class="attrib_d" name="attrib">固顶</a>]
				[<a href="#" class="attrib_t" name="attrib">头条</a>]
				[<a href="#" class="attrib_g" name="attrib">滚动</a>]
			</div>
			<div id="art_sxsz_qq"><strong>取消属性：</strong>
				[<a href="#" class="attrib_j" name="attribc">推荐</a>]
				[<a href="#" class="attrib_h" name="attribc">幻灯</a>]
				[<a href="#" class="attrib_r" name="attribc">热门</a>]
				[<a href="#" class="attrib_d" name="attribc">固顶</a>]
				[<a href="#" class="attrib_t" name="attribc">头条</a>]
				[<a href="#" class="attrib_g" name="attribc">滚动</a>]
			</div>
			<?php }?></div>
		<div id="art_fenye">
			<dl><?php if(($record['fy'])){echo $record['fy'];}?></dl>
		</div><?php if($module['search']==1){?>
		<div id="art_so">
			搜索类型：
				<select name="field" id="field"><?php if((M("field")->findall('search=1&&project="'.$_GET['project'].'"')) && is_array(M("field")->findall('search=1&&project="'.$_GET['project'].'"'))) { foreach(M("field")->findall('search=1&&project="'.$_GET['project'].'"') as $k => $v) { ?><option value="<?php if(($v['name'])){echo $v['name'];}?>" <?php if($_GET['field']==$v['name']){?>selected<?php }?>><?php if(($module['item'])){echo $module['item'];}?><?php if(($v['aliases'])){echo $v['aliases'];}?></option><?php }} ?></select>
			<input name="title" id="title" type="text" <?php if($_GET['title']){?>value="<?php if(($_GET['title'])){echo $_GET['title'];}?>"<?php }?> />
			<input type="button" id="search" value="立即搜索" />
		</div>
		<?php }?></div>
	<input type="hidden" name="method" id="method"><input type="hidden" name="parameter" id="parameter">
   </form>
</div>
<div class="theme-popover">
<div class="theme-poptit">
	<a href="javascript:;" title="关闭" class="close">×</a>
	<h3 id="siguptitle"></h3>
	<div class="dform" id="sigupcontent"></div>
</div>
</div>
<div class="theme-popover-mask"></div>
 </body>
</html>
