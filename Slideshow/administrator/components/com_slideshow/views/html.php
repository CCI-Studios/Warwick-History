<?php
defined('KOOWA') or die;

class ComSlideshowViewHtml extends ComDefaultViewHtml {
	
	public function __construct(KConfig $config) {
		parent::__construct($config);
		$this->views = array(
			'images'		=> JText::_('Images'),
			'categories'	=> JText::_('Categories')
		);
	}
	
	
	public function display() {
		$name = $this->getName();
		
		if (KInflector::isPlural($name)) {
			KFactory::get('admin::com.slideshow.toolbar.'.$name)
				->setTitle('Slideshow: <small>'.ucfirst($name).'</small>')
				->append('divider')
				->append('enable')
				->append('disable');
		} else {
		}
	
	
		return parent::display();
	}
}