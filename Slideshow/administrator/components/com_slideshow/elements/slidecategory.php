<?php
defined('KOOWA') or die;

class JElementSlidecategory extends JElement
{
	var	$_name = 'Slidecategory';

	function fetchElement($name, $value, &$node, $control_name) {
		$categories = KFactory::tmp('admin::com.slideshow.model.categories')->getList();
		
		$options = array();
		foreach ($categories as $category) {
			$options[] = JHTML::_('select.option', $category->id, $category->title);
		}
		
		return JHTML::_('select.genericlist', $options, $control_name.'['.$name.']', 'class="inputbox"', 'value', 'text', $value);
	}
}
