<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<tr>
	<th><?php if(($item)){echo $item;}?>属性:</th>
	<td><label for="attrib_j" style="margin:0 auto;padding:0 5px"><input id="attrib_j" name="attrib_j" type="checkbox" value="1" <?php if($info['attrib_j']=='1'){?>checked<?php }?> /> 推荐</label>
		<label for="attrib_g" style="margin:0 auto;padding:0 5px"><input id="attrib_g" name="attrib_g" type="checkbox" value="1" <?php if($info['attrib_g']=='1'){?>checked<?php }?> /> 滚动</label>
		<label for="attrib_t" style="margin:0 auto;padding:0 5px"><input id="attrib_t" name="attrib_t" type="checkbox" value="1" <?php if($info['attrib_t']=='1'){?>checked<?php }?> /> 头条</label>
		<label for="attrib_r" style="margin:0 auto;padding:0 5px"><input id="attrib_r" name="attrib_r" type="checkbox" value="1" <?php if($info['attrib_r']=='1'){?>checked<?php }?> /> 热门</label>
		<label for="attrib_d" style="margin:0 auto;padding:0 5px"><input id="attrib_d" name="attrib_d" type="checkbox" value="1" <?php if($info['attrib_d']=='1'){?>checked<?php }?> /> 固顶</label>
		<label for="attrib_n" style="margin:0 auto;padding:0 5px"><input id="attrib_n" name="attrib_h" type="checkbox" value="1" <?php if($info['attrib_h']=='1'){?>checked<?php }?> /> 幻灯</label>
	</td>
	<td><span class="article_notes colorf60">※：勾选<?php if(($item)){echo $item;}?>要赋予的特殊属性，便于前台调用。</span></td>
</tr>