<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<tr>
	<th><?php if(($v['aliases'])){echo $v['aliases'];}?>tags:</th>
	<td><input id="<?php if(($v['name'])){echo $v['name'];}?>" name="<?php if(($v['name'])){echo $v['name'];}?>" type="text" class="inputxt" style="width:300px" <?php if($v['must']=='0'){?>ignore="ignore"<?php }?> datatype="<?php if(($v['type_verification'])){echo $v['type_verification'];}?><?php if(($v['length'])){echo $v['length'];}?>" nullmsg="<?php if($v['nullmsg']){?><?php if(($v['nullmsg'])){echo $v['nullmsg'];}?><?php } else { ?>请填写信息！<?php }?>" errormsg="<?php if($v['errormsg']){?><?php if(($v['errormsg'])){echo $v['errormsg'];}?><?php } else { ?><?php if(($v['item'])){echo $v['item'];}?><?php if(($v['aliases'])){echo $v['aliases'];}?>要<?php if(($v['length'])){echo $v['length'];}?>个字符！<?php }?>" value="<?php if($info[$v['name']]){?><?php if(($info[$v['name']])){echo $info[$v['name']];}?><?php } else { ?><?php if(($v['defaults'])){echo $v['defaults'];}?><?php }?>"/>&nbsp;
		<span id="open_tags" class="downlist_tab color00f"><em>打开<?php if(($v['aliases'])){echo $v['aliases'];}?>列表</em>
			<div id="tags_list" class="downlist_box"><?php if((D("tags")->sort("hits","order","desc")->getall()) && is_array(D("tags")->sort("hits","order","desc")->getall())) { foreach(D("tags")->sort("hits","order","desc")->getall() as $key => $val) { ?><a href="#" onclick="gets('<?php if(($v['name'])){echo $v['name'];}?>',this)"><?php if(($val['name'])){echo $val['name'];}?></a><?php }} ?></div>
		</span>
	</td>
	<td><span class="article_notes colorf60">※：录入<?php if(($item)){echo $item;}?>关键词，可在“相关”→“关键词管理”里批量添加关键词</span></td>
</tr>