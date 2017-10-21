<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<tr>
	<th>添加日期:</th>
	<td><input name="date" type="text" id="date" value="<?php if($info[$v['name']]){?><?php if(($info[$v['name']])){echo $info[$v['name']];}?><?php } else { ?><?php echo date('Y-m-d');?><?php }?>" style="width:300px"  ignore="ignore" class="inputxt" plugin="datepicker" /></td>
	<td><span id="msgdemo2" class="article_notes colorf60">※：默认为当前时间，也可以手动输入你希望的时间。</span></td>
</tr>