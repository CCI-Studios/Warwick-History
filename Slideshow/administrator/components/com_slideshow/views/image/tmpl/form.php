<?php
defined('KOOWA');
?>

<form enctype="multipart/form-data" action="<?=@route('id='.$image->id)?>" method="post" name="adminForm" class="adminform">
<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />

<div class="width66 left" id="mainform">
<fieldset>
	<legend><?=@text('Image Details')?></legend>
	
	<label class="mainlabel" for="title_field"><?=@text('title')?>:</label>
	<input type="text" id="title_field" name="title" value="<?=$image->title?>" /><br/>
	
	<label class="mainlabel" for="category_field"><?=@text('Category')?>:</label>
	<?=@helper('admin::com.slideshow.template.helper.listbox.categories', array('selected'=>$image->slideshow_category_id))?><br/>
	
	<label class="mainlabel" for="category_field"><?=@text('Category')?>:</label>
	<input type="file" name="fileupload" />
	<? if ($image->filename): ?>
		<br/><image src="<?=$image->filename?>" width="175" />
	<? endif; ?><br/>
</fieldset>
</div>

<div class="clr"></div>
</form>

<style src="media://com_default/css/form.css" />
<script src="media://lib_koowa/js/koowa.js" />