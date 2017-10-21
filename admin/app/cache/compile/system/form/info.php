<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<tr>
	<th><?php if(($item)){echo $item;}?>导读:</th>
	<td colspan="2"><textarea name="info" id="info" class="inputxt" ignore="ignore" altercss="gray" class="gray" style="width:500px;height:120px"><?php if($info['info']){?><?php if(($info['info'])){echo $info['info'];}?><?php } else { ?><?php if(($v['defaults'])){echo $v['defaults'];}?><?php }?></textarea><span class="notes colorf60"><br />※：如果不填写文章导读，将自动截取文章详细内容的前200个字为导读。</span></td>
</tr>