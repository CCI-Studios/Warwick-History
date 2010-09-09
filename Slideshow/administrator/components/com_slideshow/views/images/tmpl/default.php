<?php
defined('KOOWA') or die;
?>

<form action="<?=@route()?>" method="get">
<table class="adminlist">
	<thead>
		<tr>
			<th width="5">#</th>
			<th width="20" align="center">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count($images); ?>);" />
			</th>
			<th width="200" align="center"><?=@text('Preview')?></th>
			<th><?=@helper('grid.sort', array('column'=>'title'))?></th>
			<th width="125" align="center"><?=@helper('grid.sort', array('column'=>'slideshow_category_title', 'title'=>'category'))?></th>
			
			<th width="50" align="center"><?=@helper('grid.sort', array('column'=>'ordering', 'title'=>'order'))?></th>
			<th width="50" align="center"><?=@helper('grid.sort', array('column'=>'enabled'))?></th>
			<th width="5" align="center"><?=@helper('grid.sort', array('column'=>'slideshow_image_id', 'title'=>'id'))?></th>
		</tr>
	</thead>
	
	<tfoot>
		<tr>
			<td colspan="20" align="center">
				<?=@helper('admin::com.default.helper.paginator.pagination', array('state'=>$state, 'total'=>$total))?>
			</td>
	</tfoot>
	
	<tbody>
		<? $i = 1;
		foreach($images as $image): ?>
		<tr>
			<td align="center"><?=$i?></td>
			<td align="center">
				<?=@helper('grid.checkbox', array('row'=>$image))?>
			</td>
			<td align="center">
				<image src="<?=$image->filename?>" width="175" />
			</td>
			<td>
				<a href="<?=@route('view=image&id='.$image->id)?>">
					<?=$image->title?>
				</a>
			</td>
			<td align="center">
				<a href="<?=@route('view=category&id='.$image->slideshow_category_id)?>">
					<?=$image->slideshow_category_title?>
				</a>
			</td>
			
			<td align="center"><?=@helper('grid.order', array('row'=>$image))?></td>
			<td align="center"><?=@helper('grid.enable', array('row'=>$image))?></td>
			<td align="center"><?=$image->id?></td>
		</tr>
		<? $i++;
		endforeach; ?>
		
		<? if (!count($images)):?>
		<tr>
			<td colspan="20" align="center">
				<?=@text('No Images Located')?>
			</td>
		<? endif; ?>
	</tbody>
</table>
</form>

<style src="media://com_default/css/admin.css" />