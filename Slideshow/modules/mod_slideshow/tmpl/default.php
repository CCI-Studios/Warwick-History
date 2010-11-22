<div class="slideshowblock">
	<div class="newImage">
	<? if (isset($image2)): ?>
		<img src="<?=$image2->filename?>" alt="" />
	<? elseif (isset($image1)): ?>
		<img src="<?=$image1->filename?>" alt="" />
	<? endif; ?>
	</div>
	
	<? if (isset($image1)): ?>
	<div class="currentImage">
		<img src="<?=$image1->filename?>" alt="" />
	</div>
	<? endif; ?>
	
	<?php if (count($images) > 1): ?>
	<div class="scrollers">
		<div class="scrollLeft">
			<img src="media://com_slideshow/images/left.png" alt="Previous" />
		</div>
		<div class="scrollRight">
			<img src="media://com_slideshow/images/right.png" alt="Next" />
		</div>
	</div>
	<?php endif; ?>
	
	<div class="allImages">
		<? foreach($images as $image): ?>
			<img src="<?=$image->filename?>" alt="<?=$image->title?>" />
		<? endforeach; ?>
	</div>
</div>

<script src="media://com_slideshow/scripts/com_slideshow.js" />
<style src="media://com_slideshow/css/site.css" />
