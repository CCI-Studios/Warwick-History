<div class="slideshowblock">
	<? if (isset($image1)): ?>
	<div class="currentImage">
		<img src="<?=$image1->filename?>" alt="<?=$image1->title?>" />
	</div>
	<? endif; ?>
	
	<? if (isset($image2)): ?>
	<div class="newImage">
		<img src="<?=$image2->filename?>" alt="<?=$image2->title?>" />
	</div>
	<? endif; ?>
	
	<div class="scrollers">
		<div class="scrollLeft">
			<img src="media://com_slideshow/images/left.png" alt="Previous" />
		</div>
		<div class="scrollRight">
			<img src="media://com_slideshow/images/right.png" alt="Next" />
		</div>
	</div>
	
	<div class="allImages">
		<? foreach($images as $image): ?>
			<img src="<?=$image->filename?>" alt="<?=$image->title?>" />
		<? endforeach; ?>
	</div>
</div>

<script src="media://com_slideshow/scripts/com_slideshow.js" />
<style src="media://com_slideshow/css/site.css" />
