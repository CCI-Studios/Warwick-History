<?php
defined('KOOWA');
?>

<form enctype="multipart/form-data" action="<?=@route('id='.$image->id)?>" method="post" id="mainform" name="adminForm" class="adminform">
<div class="width66 left">
<fieldset>
	<legend><?=@text('Image Details')?></legend>
	
	<label class="mainlabel" for="title_field"><?=@text('title')?>:</label>
	<input type="text" id="title_field" name="title" value="<?=$image->title?>" /><br/>
	
	<label class="mainlabel" for="category_field"><?=@text('Category')?>:</label>
	<?=@helper('admin::com.slideshow.helper.listbox.categories', array('selected'=>$image->slideshow_category_id))?><br/>
	
	<label class="mainlabel" for="category_field"><?=@text('Category')?>:</label>
	<? if ($image->filename): ?>
		<image src="<?=$image->filename?>" width="175" />
	<? endif; ?><br/>
	<input type="file" name="fileupload" />
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
</fieldset>
</div>

<div class="clr"></div>
</form>

<style src="media://com_default/css/form.css" />