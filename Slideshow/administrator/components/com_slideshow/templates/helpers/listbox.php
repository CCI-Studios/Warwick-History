<?php
defined('KOOWA') or die;

class ComSlideshowTemplateHelperListbox extends ComDefaultTemplateHelperListbox {

	public function categories($config = array()) {
		$config['model'] 	= 'categories';
		$config['name']		= 'slideshow_category_id';
		$config['value']	= 'id';
		$config['text']		= 'title';
		
		return parent::_listbox($config);
	}

}