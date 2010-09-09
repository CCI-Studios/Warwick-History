<?php
defined('KOOWA') or die;

class ComSlideshowModelImages extends KModelTable {

	public function __construct(KConfig $config) {
		parent::__construct($config);
		
		$this->_state
			->insert('slideshow_category_id', 'int');
	}
	

	protected function _buildQueryWhere(KDatabaseQuery &$query) {
		parent::_buildQueryWhere($query);
		
		if (is_numeric($this->_state->slideshow_category_id)) {
			$query->where('slideshow_category_id', '=', $this->_state->slideshow_category_id);
		}
	}
}