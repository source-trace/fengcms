<?php defined('TPL_INCLUDE') OR exit('Access Denied'); ?>
<script type="text/javascript">
	//设置编辑器
KindEditor.ready(function(K) {
	var editor = K.editor({
					allowFileManager : true
				});
		//加载上传图片
		K('#image').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					showRemote : false,
					imageUrl : K('#img').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#img').val(url);
						editor.hideDialog();
					}
				});
			});
		});
});
</script>
<tr>
	<th><?php if(($item)){echo $item;}?>图片:</th>
	<td>
	<input type="text" name="img" id="img" value="<?php if($info['img']){?><?php if(($info['img'])){echo $info['img'];}?><?php }?>" class="inputxt" style="width:300px"/> <input type="button" id="image" value="选择图片" class="admin_button inputxt" style="width:100px;height:30px;" />
	</td>
	<td><span class="article_notes colorf60">※：上传<?php if(($item)){echo $item;}?>的封面图片。</span></td>
</tr>