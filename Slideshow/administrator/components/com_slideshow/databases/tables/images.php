<?php
defined('KOOWA') or die;

class __ComSlideshowDatabaseTableImages extends KDatabaseTableAbstract {

	public function __construct(KConfig $config) {
		$config->name	= 'slideshow_view_images';
		$config->base	= 'slideshow_images';
		
		parent::__construct($config);
	}
	
	protected function _initialize(KConfig $config) {
		$config->behaviors = array('orderable');
		parent::_initialize($config);
	}
}