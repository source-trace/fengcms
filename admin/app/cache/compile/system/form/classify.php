<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<?php if(($classifyselect=M("classify")->procoption(M("classify")->classifytree(M("classify")->findall('type!="url"&&project="'.$_GET['project'].'"')),($_GET['classid']?$_GET['classid']:($info['classid']?$info['classid']:0)),true))){ $classifyselect=M("classify")->procoption(M("classify")->classifytree(M("classify")->findall('type!="url"&&project="'.$_GET['project'].'"')),($_GET['classid']?$_GET['classid']:($info['classid']?$info['classid']:0)),true);}?>
<tr>
	<th>所属栏目:</th>
	<td>
		<select class="inputxt" id="classid" name="classid" datatype="*" nullmsg="请选择归属栏目！" errormsg="请添加<?php if(($v['item'])){echo $v['item'];}?>栏目">
			<?php if(($classifyselect)){echo $classifyselect;}?>
		</select>
	</td>
	<td><span class="article_notes colorf60">※：选择<?php if(($item)){echo $item;}?>归属栏目。</span></td>
</tr>