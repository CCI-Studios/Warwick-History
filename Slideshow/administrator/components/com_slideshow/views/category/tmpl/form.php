<?php
defined('KOOWA');
?>

<form action="<?=@route('id='.$category->id)?>" method="post" id="mainform" name="adminForm" class="adminform">
<div class="width66 left">
<fieldset>
	<legend><?=@text('Image Details')?></legend>
	
	<label class="mainlabel" for="title_field"><?=@text('title')?>:</label>
	<input type="text" id="title_field" name="title" value="<?=$category->title?>" /><br/>
</fieldset>
</div>

<div class="clr"></div>
</form>

<style src="media://com_default/css/form.css" />