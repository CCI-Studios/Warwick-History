<?php
defined('KOOWA') or die;
 
class ModSlideshowHtml extends ModDefaultHtml {
	public function display() {
		$images = KFactory::get('admin::com.slideshow.model.images')
			->set('slideshow_category_id', $this->params->get('slideshow_category_id', null))
			->getList();
		
		if (count($images) > 0) {
			$this->assign('image1', $images->current());
		}
		if (count($images) > 1) {
			$images->next();
			$this->assign('image2', $images->current());
		}
		$this->assign('images', $images);
		
		parent::display();
	}
}