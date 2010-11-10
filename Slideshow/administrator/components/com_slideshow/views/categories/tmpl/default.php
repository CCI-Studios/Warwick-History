<?php
defined('KOOWA') or die;
?>

<form action="<?=@route()?>" method="get">
<table class="adminlist">
	<thead>
		<tr>
			<th width="5">#</th>
			<th width="20" align="center">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count($categories); ?>);" />
			</th>
			<th><?=@helper('grid.sort', array('column'=>'title'))?></th>
			<th width="5" align="center"><?=@helper('grid.sort', array('column'=>'slideshow_image_id', 'title'=>'id'))?></th>
		</tr>
	</thead>
	
	<tfoot>
		<tr>
			<td colspan="20" align="center">
				<?=@helper('paginator.pagination', array('state'=>$state, 'total'=>$total))?>
			</td>
	</tfoot>
	
	<tbody>
		<? $i = 1;
		foreach($categories as $category): ?>
		<tr>
			<td align="center"><?=$i?></td>
			<td align="center">
				<?=@helper('grid.checkbox', array('row'=>$category))?>
			</td>
			<td>
				<a href="<?=@route('view=category&id='.$category->id)?>">
					<?=$category->title?>
				</a>
			</td>
			<td align="center"><?=$category->id?></td>
		</tr>
		<? $i++;
		endforeach; ?>
		
		<? if (!count($categories)):?>
		<tr>
			<td colspan="20" align="center">
				<?=@text('No Images Located')?>
			</td>
		<? endif; ?>
	</tbody>
</table>
</form>

<style src="media://com_default/css/admin.css" />