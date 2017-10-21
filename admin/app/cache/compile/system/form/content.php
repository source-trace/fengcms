<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<tr>
	<th><?php if(($item)){echo $item;}?>内容:</th>
	<td colspan="2"><textarea class="content" id="content" name="content" style="width:98%;height:300px;"><?php if($info['content']){?><?php if(($info['content'])){echo $info['content'];}?><?php }?></textarea></td>
</tr>